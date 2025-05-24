<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\BishopDetails;
use App\Models\BishopProfile;


class BishopController extends Controller
{
    public function bishop_profile()
    {
        $user = Auth::user();
        $profile = BishopProfile::find(1);
        $details = BishopDetails::orderby('created_at','desc')->get();
        return view('admin.bishop.list',compact('user','profile','details'));
    }

    public function update_bishop_profile(Request $request,$id)
    {
        $data = BishopProfile::where('id',$id)->first();
        if($data){
            $data->description = $request->description;
            $data->save();
            return redirect()->back()->with('popup_success','Bishopprofile updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function add_bishop_details()
    {
        $user = Auth::user();
        return view('admin.bishop.add',compact('user'));
    }

    public function save_bishop_details(Request $request)
    {
          $request->validate([
            "from" => "required",
            "to" => "required",
            "address" => "required",
        ]);
        $data = new BishopDetails();
        $data->from_year = $request->from;
        $data->to_year = $request->to;
        $data->address = $request->address;
        $data->save();
        return redirect()->back()->with('popup_success','BishopDetails added succesfully.');

    }

      public function view_bishop_details($id)
    {
        $user = Auth::user();
        $data = BishopDetails::where('id',$id)->first();
        return view('admin.bishop.view',compact('user','data'));
    }

    
    public function update_bishop_details(Request $request,$id)
    {
        $data = BishopDetails::where('id',$id)->first();
        if($data){
            $data->from_year = $request->from;
            $data->to_year = $request->to;
            $data->address = $request->address;

            $data->save();
            return redirect()->back()->with('popup_success','Bishopdetails updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

      public function delete_bishop_details($id)
    {
        $user = Auth::user();
        $data = BishopDetails::where('id',$id)->delete();
        return redirect()->back()->with('popup_success','Bishopdetails deleted succesfully.');
    }
}
