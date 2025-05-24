<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\CollegeConsulators;
use App\Models\DiocesanCuria;
use App\Models\FinanceCommitte;
use App\Models\FinanceCommitte1;
use App\Models\FinanceCommitte2;

class CommitteController extends Controller
{
    public function diocesan_curia()
    {
        $user = Auth::user();
        $data = DiocesanCuria::find(1);
        return view('admin.committe.diocesan_curia',compact('user','data'));
    }

     public function update_diocesan_curia(Request $request,$id)
    {
        $data = DiocesanCuria::where('id',$id)->first();
        if($data){
             $data->description = $request->description; 
            $data->save();
            return redirect()->back()->with('popup_success','DiocesanCuria updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    //next part 
    public function college_consulators()
    {
        $user = Auth::user();
        $data = CollegeConsulators::orderby('created_at','desc')->get();
        return view('admin.committe.college_consulators.list',compact('user','data'));
    }

    public function add_college_consulators()
    {
         $user = Auth::user();
        return view('admin.committe.college_consulators.add',compact('user'));
    }

    public function save_college_consulators(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new CollegeConsulators();
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','CollegeConsulators added succesfully.');
    }

    public function view_college_consulators($id)
    {
        $user = Auth::user();
        $data = CollegeConsulators::where('id',$id)->first();
        return view('admin.committe.college_consulators.view',compact('user','data'));
    }

    
    public function update_college_consulators(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = CollegeConsulators::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','CollegeConsulators updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_college_consulators($id)
    {
      // Retrieve the Product record by ID
        $product = CollegeConsulators::findOrFail($id);
 
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

    //next part 
    public function finance_committe()
    {
        $user = Auth::user();
        $table1 = FinanceCommitte::orderby('created_at','desc')->get();
        $table2 = FinanceCommitte1::orderby('created_at','desc')->get();
        $table3 = FinanceCommitte2::orderby('created_at','desc')->get();
        return view('admin.committe.finance_committe.list',compact('user','table1','table2','table3'));
    }

    public function add_finance_committe_table1()
    {
         $user = Auth::user();
        return view('admin.committe.finance_committe.table1.add',compact('user'));
    }

    public function save_finance_committe_table1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new FinanceCommitte();
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','FinanceCommitte Table1 added succesfully.');
    }

    public function view_finance_committe_table1($id)
    {
        $user = Auth::user();
        $data = FinanceCommitte::where('id',$id)->first();
        return view('admin.committe.finance_committe.table1.view',compact('user','data'));
    }

    
    public function update_finance_committe_table1(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = FinanceCommitte::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','FinanceCommitte table1 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_finance_committe_table1($id)
    {
      // Retrieve the Product record by ID
        $product = FinanceCommitte::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'FinanceCommitte table1 Deleted Successfully');
    }

    //next part 
   
    public function add_finance_committe_table2()
    {
         $user = Auth::user();
        return view('admin.committe.finance_committe.table2.add',compact('user'));
    }

    public function save_finance_committe_table2(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new FinanceCommitte1();
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','FinanceCommitte Table2 added succesfully.');
    }

    public function view_finance_committe_table2($id)
    {
        $user = Auth::user();
        $data = FinanceCommitte1::where('id',$id)->first();
        return view('admin.committe.finance_committe.table2.view',compact('user','data'));
    }

    
    public function update_finance_committe_table2(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = FinanceCommitte1::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','FinanceCommitte table2 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_finance_committe_table2($id)
    {
      // Retrieve the Product record by ID
        $product = FinanceCommitte1::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'FinanceCommitte table2 Deleted Successfully');
    }

    //next part
    public function add_finance_committe_table3()
    {
         $user = Auth::user();
        return view('admin.committe.finance_committe.table3.add',compact('user'));
    }

    public function save_finance_committe_table3(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new FinanceCommitte2();
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','FinanceCommitte Table3 added succesfully.');
    }

    public function view_finance_committe_table3($id)
    {
        $user = Auth::user();
        $data = FinanceCommitte2::where('id',$id)->first();
        return view('admin.committe.finance_committe.table3.view',compact('user','data'));
    }

    
    public function update_finance_committe_table3(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = FinanceCommitte2::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->position = $request->position;   
             $data->address = $request->address;   
             $data->phone = $request->phone;   
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
            return redirect()->back()->with('popup_success','FinanceCommitte table3 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_finance_committe_table3($id)
    {
      // Retrieve the Product record by ID
        $product = FinanceCommitte2::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'FinanceCommitte table3 Deleted Successfully');
    }
}
