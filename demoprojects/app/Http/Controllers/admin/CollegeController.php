<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\DiocesanCollege;
use App\Models\ReligiousCollege;
use App\Models\HomeAge;
use App\Models\Hospital;


class CollegeController extends Controller
{
      public function diocesan_college()
    {
        $user = Auth::user();
        $table1 = DiocesanCollege::orderby('created_at','desc')->get();
        return view('admin.college.diocesan_college.list',compact('user','table1'));
    }

    public function add_diocesan_college()
    {
         $user = Auth::user();
        return view('admin.college.diocesan_college.add',compact('user'));
    }

    public function save_diocesan_college(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = new DiocesanCollege();
             $data->name = $request->name;
             $data->parish = $request->parish ?? "";
             $data->address = $request->address ?? "";   
            $data->save();
            return redirect()->back()->with('popup_success','DiocesanCollege added succesfully.');
    }

    public function view_diocesan_college($id)
    {
        $user = Auth::user();
        $data = DiocesanCollege::where('id',$id)->first();
        return view('admin.college.diocesan_college.view',compact('user','data'));
    }

    
    public function update_diocesan_college(Request $request,$id)
    {
        $data = DiocesanCollege::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
            $data->parish = $request->parish ?? "";
             $data->address = $request->address ?? "";   
            $data->save();
            return redirect()->back()->with('popup_success','DiocesanCollege updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_diocesan_college($id)
    {
      // Retrieve the Product record by ID
        $product = DiocesanCollege::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'DiocesanCollege Deleted Successfully');
    }

    //next part
     public function religious_college()
    {
        $user = Auth::user();
        $table1 = ReligiousCollege::orderby('created_at','desc')->get();
        return view('admin.college.religious_college.list',compact('user','table1'));
    }

    public function add_religious_college()
    {
         $user = Auth::user();
        return view('admin.college.religious_college.add',compact('user'));
    }

    public function save_religious_college(Request $request)
    {
        $request->validate([
            'name' => 'required',
         
        ]);
        $data = new ReligiousCollege();
             $data->name = $request->name;
           $data->parish = $request->parish ?? "";
             $data->address = $request->address ?? "";   
            $data->save();
            return redirect()->back()->with('popup_success','ReligiousCollege added succesfully.');
    }

    public function view_religious_college($id)
    {
        $user = Auth::user();
        $data = ReligiousCollege::where('id',$id)->first();
        return view('admin.college.religious_college.view',compact('user','data'));
    }

    
    public function update_religious_college(Request $request,$id)
    {
        $data = ReligiousCollege::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
           $data->parish = $request->parish ?? "";
             $data->address = $request->address ?? "";   
            $data->save();
            return redirect()->back()->with('popup_success','ReligiousCollege updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_religious_college($id)
    {
      // Retrieve the Product record by ID
        $product = ReligiousCollege::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'ReligiousCollege Deleted Successfully');
    }

    //next part
       public function home_age()
    {
        $user = Auth::user();
        $table1 = HomeAge::orderby('created_at','desc')->get();
        return view('admin.college.home_age.list',compact('user','table1'));
    }

    public function add_home_age()
    {
         $user = Auth::user();
        return view('admin.college.home_age.add',compact('user'));
    }

    public function save_home_age(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = new HomeAge();
             $data->name = $request->name;
             $data->management = $request->management ?? "";
             $data->address = $request->address ?? "";   
            $data->save();
            return redirect()->back()->with('popup_success','HomeAge added succesfully.');
    }

    public function view_home_age($id)
    {
        $user = Auth::user();
        $data = HomeAge::where('id',$id)->first();
        return view('admin.college.home_age.view',compact('user','data'));
    }

    
    public function update_home_age(Request $request,$id)
    {
        $data = HomeAge::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->management = $request->management ?? "";
             $data->address = $request->address ?? "";  
            $data->save();
            return redirect()->back()->with('popup_success','HomeAge updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_home_age($id)
    {
      // Retrieve the Product record by ID
        $product = HomeAge::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'HomeAge Deleted Successfully');
    }

     //next part
       public function hospital()
    {
        $user = Auth::user();
        $table1 = Hospital::orderby('created_at','desc')->get();
        return view('admin.college.hospital.list',compact('user','table1'));
    }

    public function add_hospital()
    {
         $user = Auth::user();
        return view('admin.college.hospital.add',compact('user'));
    }

    public function save_hospital(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = new Hospital();
             $data->name = $request->name;
             $data->parish = $request->parish ?? "";
             $data->address = $request->address ?? "";   
            $data->save();
            return redirect()->back()->with('popup_success','Hospital added succesfully.');
    }

    public function view_hospital($id)
    {
        $user = Auth::user();
        $data = Hospital::where('id',$id)->first();
        return view('admin.college.hospital.view',compact('user','data'));
    }

    
    public function update_hospital(Request $request,$id)
    {
        $data = Hospital::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
            $data->parish = $request->parish ?? "";
             $data->address = $request->address ?? "";   
            $data->save();
            return redirect()->back()->with('popup_success','Hospital updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_hospital($id)
    {
      // Retrieve the Product record by ID
        $product = Hospital::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'Hospital Deleted Successfully');
    }



}
