<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Obituary;
use App\Models\ParishPriest;
use App\Models\ReteriedPriest;


class DiocesanController extends Controller
{
    public function obituary()
    {
        $user = Auth::user();
        $data = Obituary::orderby('created_at','desc')->get();
        return view('admin.diocesan.obituary.list',compact('user','data'));
    }

    public function add_obituary()
    {
         $user = Auth::user();
        return view('admin.diocesan.obituary.add',compact('user'));
    }

       public function save_obituary(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'email' => 'required',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new Obituary();
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
            return redirect()->back()->with('popup_success','Obituary added succesfully.');
    }

    public function view_obituary($id)
    {
        $user = Auth::user();
        $data = Obituary::where('id',$id)->first();
        return view('admin.diocesan.obituary.view',compact('user','data'));
    }

    
    public function update_obituary(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = Obituary::where('id',$id)->first();
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
            return redirect()->back()->with('popup_success','Obituary updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

      public function delete_obituary($id)
    {
      // Retrieve the Product record by ID
        $product = Obituary::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'Obituary Deleted Successfully');
    }

    //second part
    public function parish_priest()
    {
        $user = Auth::user();
        $data = ParishPriest::orderby('created_at','desc')->get();
        return view('admin.diocesan.parish_priest.list',compact('user','data'));
    }

    public function add_parish_priest()
    {
         $user = Auth::user();
        return view('admin.diocesan.parish_priest.add',compact('user'));
    }

       public function save_parish_priest(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'email' => 'required',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new ParishPriest();
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
            return redirect()->back()->with('popup_success','ParishPriest added succesfully.');
    }

    public function view_parish_priest($id)
    {
        $user = Auth::user();
        $data = ParishPriest::where('id',$id)->first();
        return view('admin.diocesan.parish_priest.view',compact('user','data'));
    }
    
       public function update_parish_priest(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = ParishPriest::where('id',$id)->first();
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
            return redirect()->back()->with('popup_success','ParishPriest updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

      public function delete_parish_priest($id)
    {
      // Retrieve the Product record by ID
        $product = ParishPriest::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'ParishPriest Deleted Successfully');
    }

    //third part
     public function reteried_priest()
    {
        $user = Auth::user();
        $data = ReteriedPriest::orderby('created_at','desc')->get();
        return view('admin.diocesan.reteried_priest.list',compact('user','data'));
    }

    public function add_reteried_priest()
    {
         $user = Auth::user();
        return view('admin.diocesan.reteried_priest.add',compact('user'));
    }

       public function save_reteried_priest(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'email' => 'required',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new ReteriedPriest();
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
            return redirect()->back()->with('popup_success','ReteriedPriest added succesfully.');
    }

    public function view_reteried_priest($id)
    {
        $user = Auth::user();
        $data = ReteriedPriest::where('id',$id)->first();
        return view('admin.diocesan.reteried_priest.view',compact('user','data'));
    }
    
       public function update_reteried_priest(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = ReteriedPriest::where('id',$id)->first();
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
            return redirect()->back()->with('popup_success','ReteriedPriest updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

      public function delete_reteried_priest($id)
    {
      // Retrieve the Product record by ID
        $product = ReteriedPriest::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'ParishPriest Deleted Successfully');
    }

  
}
