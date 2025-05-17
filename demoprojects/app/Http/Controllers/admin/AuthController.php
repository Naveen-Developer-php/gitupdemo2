<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function admin()
    {
        return view('admin.login');
    }

       public function save_account(Request $request)
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->decrypt = $request->password;
        $user->created_at = now();
        $user->save();
        return redirect()->back()->with('popup_success','Account Cretaed Succesfully');
    }

  public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Step 1: Check if email exists
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Email not found
             return redirect()->back()->with('popup_error','Invalid user, please check.');
        }

        // Step 2: Check if password matches
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('popup_error','Incorrect password, please check.');
        }

        // Step 3: Attempt to login
        Auth::login($user);

       return redirect()->route('dashboard')->with('popup_success','Login successfully');
    }

    public function password_change()
    {
        $user = Auth::user();
        return view('admin.profile',compact('user'));
    }

    public function update_password(Request $request)
    {
       
        $request->validate([
            "old_password" => "required|min:8",
            "new_password" => "required|min:8",
            "cnf_password" => "required|min:8|same:new_password",
        ]);
        $user = Auth::user();
        $user_table = User::where('id',$user->id)->first();
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('popup_error','Giving old password is wrong, please check.');
        }else{
            $user->password = bcrypt($request->new_password);
            $user->decrypt = $request->new_password;
            $user->save();
            return redirect()->back()->with('popup_success', 'Password changed successfully.');
        }
    }

      public function logout_admin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin')->with('popup_success', 'Successfully logged out');
    }
}
