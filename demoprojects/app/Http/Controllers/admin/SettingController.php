<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Privacy;
use App\Models\Terms;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Event;



class SettingController extends Controller
{
     public function privacy()
    {
        $user = Auth::user();
        $data = Privacy::find(1);
        return view('admin.setting.privacy',compact('user','data'));
    }

     public function update_privacy(Request $request,$id)
    {
        $data = Privacy::where('id',$id)->first();
        if($data){
             $data->description = $request->description; 
            $data->save();
            return redirect()->back()->with('popup_success','Privacy updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

     public function terms()
    {
        $user = Auth::user();
        $data = Terms::find(1);
        return view('admin.setting.terms',compact('user','data'));
    }

     public function update_terms(Request $request,$id)
    {
        $data = Terms::where('id',$id)->first();
        if($data){
             $data->description = $request->description; 
            $data->save();
            return redirect()->back()->with('popup_success','Terms updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

     public function logo()
    {
        $user = Auth::user();
        $data = Logo::find(1);
        return view('admin.setting.logo.list',compact('user','data'));
    }

      public function view_logo($id)
    {
        $user = Auth::user();
        $data = Logo::find($id);
        return view('admin.setting.logo.view',compact('user','data'));
    }

      public function update_logo(Request $request,$id)
    {
         $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = Logo::where('id',$id)->first();
        if($data){
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
            return redirect()->back()->with('popup_success','Logo updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

       public function banner()
    {
        $user = Auth::user();
        $data = Banner::orderby('created_at','desc')->get();
        return view('admin.setting.banner.list',compact('user','data'));
    }

        public function add_banner()
    {
        $user = Auth::user();
        return view('admin.setting.banner.add',compact('user'));
    }

       public function save_banner(Request $request)
    {
         $request->validate([
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
           'title' => 'required'
        ]);
        $data = new Banner();
            $data->title = $request->title;
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
            return redirect()->back()->with('popup_success','Banner added succesfully.');
    }


      public function view_banner($id)
    {
        $user = Auth::user();
        $data = Banner::find($id);
        return view('admin.setting.banner.view',compact('user','data'));
    }

      public function update_banner(Request $request,$id)
    {
         $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = Banner::where('id',$id)->first();
        if($data){
            $data->title = $request->title;
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
            return redirect()->back()->with('popup_success','Banner updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_banner($id)
    {
      // Retrieve the Product record by ID
        $product = Banner::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'Banner Deleted Successfully');
    }

         public function event()
    {
        $user = Auth::user();
        $data = Event::orderby('created_at','desc')->get();
        return view('admin.setting.event.list',compact('user','data'));
    }

        public function add_event()
    {
        $user = Auth::user();
        return view('admin.setting.event.add',compact('user'));
    }

       public function save_event(Request $request)
    {
         $request->validate([
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
           'title' => 'required',
           'short_description' => 'required',
           'description' => 'required'

        ]);
        $data = new Event();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->short_description = $request->short_description;
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
            return redirect()->back()->with('popup_success','Event added succesfully.');
    }


      public function view_event($id)
    {
        $user = Auth::user();
        $data = Event::find($id);
        return view('admin.setting.event.view',compact('user','data'));
    }

      public function update_event(Request $request,$id)
    {
         $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = Event::where('id',$id)->first();
        if($data){
            $data->title = $request->title;
            $data->description = $request->description;
            $data->short_description = $request->short_description;
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
            return redirect()->back()->with('popup_success','Event updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_event($id)
    {
      // Retrieve the Product record by ID
        $product = Event::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'Event Deleted Successfully');
    }



}
