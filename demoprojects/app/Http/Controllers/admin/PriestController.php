<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\PriestProfile;

class PriestController extends Controller
{
    public function priest_profile()
    {
        $user = Auth::user();
        $data = PriestProfile::orderby('created_at','desc')->get();
        return view('admin.priest.priest_profile',compact('user','data'));
    }

    public function add_priest_profile()
    {
         $user = Auth::user();
        return view('admin.priest.add',compact('user'));
    }

       public function save_priest_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'email' => 'required',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new PriestProfile();
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
             $data->email = $request->email; 
            $var = 'storage/app/public/';
            if ($request->hasFile('image')) {
                $thumbnail = $request->file('image');
                $thumbnailName = date('YmdHis') . uniqid() . "." . $thumbnail->getClientOriginalExtension();
                $thumbnail->storeAs('files/', $thumbnailName, 'public');
                $data->image = "$var/files/$thumbnailName";
            }else{
                unset($data->image);
            }  
            $data->save();
            return redirect()->back()->with('popup_success','PriestProfile added succesfully.');
    }

    public function view_priest_profile($id)
    {
        $user = Auth::user();
        $data = PriestProfile::where('id',$id)->first();
        return view('admin.priest.view',compact('user','data'));
    }

       public function update_priest_profile(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = PriestProfile::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
             $data->email = $request->email; 
            $var = 'storage/app/public/';
            if ($request->hasFile('image')) {
                $thumbnail = $request->file('image');
                $thumbnailName = date('YmdHis') . uniqid() . "." . $thumbnail->getClientOriginalExtension();
                $thumbnail->storeAs('files/', $thumbnailName, 'public');
                $data->image = "$var/files/$thumbnailName";
            }else{
                unset($data->image);
            }  
            $data->save();
            return redirect()->back()->with('popup_success','PriestProfile updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

      public function delete_priest_profile($id)
    {
      // Retrieve the Product record by ID
        $product = PriestProfile::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'PriestProfile Deleted Successfully');
    }
}
