<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\DiocesanSchool;
use App\Models\PrimarySchool;
use App\Models\ReligiousSchool;

class SchoolController extends Controller
{
    public function diocesan_school()
    {
        $user = Auth::user();
        $table2 = DiocesanSchool::orderby('created_at','desc')->get();
        $table1 = PrimarySchool::orderby('created_at','desc')->get();

        return view('admin.school.diocesan_school.list',compact('user','table1','table2'));
    }

    public function add_diocesan_school()
    {
         $user = Auth::user();
        return view('admin.school.diocesan_school.add',compact('user'));
    }

    public function save_diocesan_school(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parish' => 'required',
            'address' => 'required',
        ]);
        $data = new DiocesanSchool();
             $data->name = $request->name;
             $data->parish = $request->parish;
             $data->address = $request->address;   
            $data->save();
            return redirect()->back()->with('popup_success','MiddleSchool added succesfully.');
    }

    public function view_diocesan_school($id)
    {
        $user = Auth::user();
        $data = DiocesanSchool::where('id',$id)->first();
        return view('admin.school.diocesan_school.view',compact('user','data'));
    }

    
    public function update_diocesan_school(Request $request,$id)
    {
        $data = DiocesanSchool::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->parish = $request->parish;
             $data->address = $request->address;   
            $data->save();
            return redirect()->back()->with('popup_success','MiddleSchool updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_diocesan_school($id)
    {
      // Retrieve the Product record by ID
        $product = DiocesanSchool::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'MiddleSchool Deleted Successfully');
    }

    //next part
     public function religious_school()
    {
        $user = Auth::user();
        $table2 = ReligiousSchool::orderby('created_at','desc')->get();
        $table1 = PrimarySchool::orderby('created_at','desc')->get();

        return view('admin.school.religious_school.list',compact('user','table1','table2'));
    }

    public function add_religious_school()
    {
         $user = Auth::user();
        return view('admin.school.religious_school.add',compact('user'));
    }

    public function save_religious_school(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parish' => 'required',
            'address' => 'required',
        ]);
        $data = new ReligiousSchool();
             $data->name = $request->name;
             $data->parish = $request->parish;
             $data->address = $request->address;   
            $data->save();
            return redirect()->back()->with('popup_success','MiddleSchool added succesfully.');
    }

    public function view_religious_school($id)
    {
        $user = Auth::user();
        $data = ReligiousSchool::where('id',$id)->first();
        return view('admin.school.religious_school.view',compact('user','data'));
    }

    
    public function update_religious_school(Request $request,$id)
    {
        $data = ReligiousSchool::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->parish = $request->parish;
             $data->address = $request->address;   
            $data->save();
            return redirect()->back()->with('popup_success','MiddleSchool updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_religious_school($id)
    {
      // Retrieve the Product record by ID
        $product = ReligiousSchool::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'MiddleSchool Deleted Successfully');
    }

    //next part
     public function add_primary_school()
    {
         $user = Auth::user();
        return view('admin.school.primary_school.add',compact('user'));
    }

    public function save_primary_school(Request $request)
    {
        $request->validate([
            'school' => 'required',
            'diocese_count' => 'required',
            'religious_count' => 'required',
            'total' => 'required',

        ]);
        $data = new PrimarySchool();
             $data->school = $request->school;
             $data->diocese_count = $request->diocese_count;
             $data->religious_count	 = $request->religious_count;   
             $data->total	 = $request->total;   
            $data->save();
            return redirect()->back()->with('popup_success','PrimarySchool added succesfully.');
    }

    public function view_primary_school($id)
    {
        $user = Auth::user();
        $data = PrimarySchool::where('id',$id)->first();
        return view('admin.school.primary_school.view',compact('user','data'));
    }

    
    public function update_primary_school(Request $request,$id)
    {
        $data = PrimarySchool::where('id',$id)->first();
        if($data){
             $data->school = $request->school;
             $data->diocese_count = $request->diocese_count;
             $data->religious_count	 = $request->religious_count;   
             $data->total	 = $request->total;     
            $data->save();
            return redirect()->back()->with('popup_success','PrimarySchool updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_primary_school($id)
    {
      // Retrieve the Product record by ID
        $product = PrimarySchool::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'PrimarySchool Deleted Successfully');
    }

}
