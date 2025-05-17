<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\CBCI;
use App\Models\CCBI;
use App\Models\FABC;
use App\Models\TNBC;

class ConferenceController extends Controller
{
    public function fabc()
    {
        $user = Auth::user();
        $data = FABC::orderby('created_at','desc')->get();
        return view('admin.conference.fabc.list',compact('user','data'));
    }

    public function add_fabc()
    {
        $user = Auth::user();
        return view('admin.conference.fabc.add',compact('user'));
    }

    public function save_fabc(Request $request)
    {
        $request->validate([
            "position" => "required",
             "tagline" => "required",
              "fax" => "required",
               "image" => "required|image|mimes:jpeg,png,jpg|max:1024",
                "website" => "required",
                 "phone" => "required|max:10",
                  "email" => "required|email",
                  "address" => "required",

        ]);
        $data = new FABC();
        $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','FABC added succesfully.');    
    }

     public function view_fabc($id)
    {
        $user = Auth::user();
        $data = FABC::where('id',$id)->first();
        return view('admin.conference.fabc.view',compact('user','data'));
    }

     public function update_fabc(Request $request,$id)
    {
        $request->validate([
               "image" => "nullable|image|mimes:jpeg,png,jpg|max:1024",
                "phone" => "nullable|max:10",
        ]);
        $data = FABC::where('id',$id)->first();
        if($data){
             $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
            return redirect()->back()->with('popup_success','FABC updated succesfully.');    
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_fabc($id)
    {
         // Retrieve the Product record by ID
        $product = FABC::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'FABC Deleted Successfully');
    }

    //next part 
     public function cbci()
    {
        $user = Auth::user();
        $data = CBCI::orderby('created_at','desc')->get();
        return view('admin.conference.cbci.list',compact('user','data'));
    }

    public function add_cbci()
    {
        $user = Auth::user();
        return view('admin.conference.cbci.add',compact('user'));
    }

    public function save_cbci(Request $request)
    {
        $request->validate([
            "position" => "required",
             "tagline" => "required",
              "fax" => "required",
               "image" => "required|image|mimes:jpeg,png,jpg|max:1024",
                "website" => "required",
                 "phone" => "required|max:10",
                  "email" => "required|email",
                  "address" => "required",

        ]);
        $data = new CBCI();
        $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','CBCI added succesfully.');    
    }

     public function view_cbci($id)
    {
        $user = Auth::user();
        $data = CBCI::where('id',$id)->first();
        return view('admin.conference.cbci.view',compact('user','data'));
    }

     public function update_cbci(Request $request,$id)
    {
        $request->validate([
               "image" => "nullable|image|mimes:jpeg,png,jpg|max:1024",
                "phone" => "nullable|max:10",
        ]);
        $data = CBCI::where('id',$id)->first();
        if($data){
             $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
            return redirect()->back()->with('popup_success','CBCI updated succesfully.');    
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_cbci($id)
    {
         // Retrieve the Product record by ID
        $product = CBCI::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'CBCI Deleted Successfully');
    }


    //next part 
      public function ccbi()
    {
        $user = Auth::user();
        $data = CCBI::orderby('created_at','desc')->get();
        return view('admin.conference.ccbi.list',compact('user','data'));
    }

    public function add_ccbi()
    {
        $user = Auth::user();
        return view('admin.conference.ccbi.add',compact('user'));
    }

    public function save_ccbi(Request $request)
    {
        $request->validate([
            "position" => "required",
             "tagline" => "required",
              "fax" => "required",
               "image" => "required|image|mimes:jpeg,png,jpg|max:1024",
                "website" => "required",
                 "phone" => "required|max:10",
                  "email" => "required|email",
                  "address" => "required",

        ]);
        $data = new CCBI();
        $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','CCBI added succesfully.');    
    }

     public function view_ccbi($id)
    {
        $user = Auth::user();
        $data = CCBI::where('id',$id)->first();
        return view('admin.conference.ccbi.view',compact('user','data'));
    }

     public function update_ccbi(Request $request,$id)
    {
        $request->validate([
               "image" => "nullable|image|mimes:jpeg,png,jpg|max:1024",
                "phone" => "nullable|max:10",
        ]);
        $data = CCBI::where('id',$id)->first();
        if($data){
             $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
            return redirect()->back()->with('popup_success','CCBI updated succesfully.');    
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_ccbi($id)
    {
         // Retrieve the Product record by ID
        $product = CCBI::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'CBCI Deleted Successfully');
    }

    //next part
      public function tnbc()
    {
        $user = Auth::user();
        $data = TNBC::orderby('created_at','desc')->get();
        return view('admin.conference.tnbc.list',compact('user','data'));
    }

    public function add_tnbc()
    {
        $user = Auth::user();
        return view('admin.conference.tnbc.add',compact('user'));
    }

    public function save_tnbc(Request $request)
    {
        $request->validate([
            "position" => "required",
             "tagline" => "required",
              "fax" => "required",
               "image" => "required|image|mimes:jpeg,png,jpg|max:1024",
                "website" => "required",
                 "phone" => "required|max:10",
                  "email" => "required|email",
                  "address" => "required",

        ]);
        $data = new TNBC();
        $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','TNBC added succesfully.');    
    }

     public function view_tnbc($id)
    {
        $user = Auth::user();
        $data = TNBC::where('id',$id)->first();
        return view('admin.conference.tnbc.view',compact('user','data'));
    }

     public function update_tnbc(Request $request,$id)
    {
        $request->validate([
               "image" => "nullable|image|mimes:jpeg,png,jpg|max:1024",
                "phone" => "nullable|max:10",
        ]);
        $data = TNBC::where('id',$id)->first();
        if($data){
             $data->position = $request->position;
        $data->tagline = $request->tagline;
        $data->address = $request->address;
        $data->fax = $request->fax;
        $data->website = $request->website;
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
            return redirect()->back()->with('popup_success','TNBC updated succesfully.');    
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_tnbc($id)
    {
         // Retrieve the Product record by ID
        $product = TNBC::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'TNBC Deleted Successfully');
    }
}
