<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\DiocesanCollege;
use App\Models\ReligiousCollege;

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
            'parish' => 'required',
            'address' => 'required',
        ]);
        $data = new DiocesanCollege();
             $data->name = $request->name;
             $data->parish = $request->parish;
             $data->address = $request->address;   
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
             $data->parish = $request->parish;
             $data->address = $request->address;   
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
            'parish' => 'required',
            'address' => 'required',
        ]);
        $data = new ReligiousCollege();
             $data->name = $request->name;
             $data->parish = $request->parish;
             $data->address = $request->address;   
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
             $data->parish = $request->parish;
             $data->address = $request->address;   
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
}
