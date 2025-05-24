<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\EducationalCommitte;
use App\Models\EducationalCommitte1;
use App\Models\EducationalCommitte2;
use App\Models\SocialService;
use App\Models\DiocesanSociety;
use App\Models\PastoralCommission;

class ExtraController extends Controller
{
      public function educational_committe()
    {
        $user = Auth::user();
        $table1 = EducationalCommitte::orderby('created_at','desc')->get();
        $table2 =EducationalCommitte1::orderby('created_at','desc')->get();
        $table3 = EducationalCommitte2::orderby('created_at','desc')->get();
        return view('admin.extra.educational_committe.list',compact('user','table1','table2','table3'));
    }

    public function add_educational_committe_table1()
    {
         $user = Auth::user();
        return view('admin.extra.educational_committe.table1.add',compact('user'));
    }

    public function save_educational_committe_table1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new EducationalCommitte();
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
            return redirect()->back()->with('popup_success','EducationalCommitte Table1 added succesfully.');
    }

    public function view_educational_committe_table1($id)
    {
        $user = Auth::user();
        $data = EducationalCommitte::where('id',$id)->first();
        return view('admin.extra.educational_committe.table1.view',compact('user','data'));
    }

    
    public function update_educational_committe_table1(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = EducationalCommitte::where('id',$id)->first();
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
            return redirect()->back()->with('popup_success','EducationalCommitte table1 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_educational_committe_table1($id)
    {
      // Retrieve the Product record by ID
        $product = EducationalCommitte::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'educationalCommitte table1 Deleted Successfully');
    }

    //next part 
   
    public function add_educational_committe_table2()
    {
         $user = Auth::user();
        return view('admin.extra.educational_committe.table2.add',compact('user'));
    }

    public function save_educational_committe_table2(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new EducationalCommitte1();
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
            return redirect()->back()->with('popup_success','EducationalCommitte Table2 added succesfully.');
    }

    public function view_educational_committe_table2($id)
    {
        $user = Auth::user();
        $data = EducationalCommitte1::where('id',$id)->first();
        return view('admin.extra.educational_committe.table2.view',compact('user','data'));
    }

    
    public function update_educational_committe_table2(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = EducationalCommitte1::where('id',$id)->first();
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
            return redirect()->back()->with('popup_success','EducationalCommitte table2 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_educational_committe_table2($id)
    {
      // Retrieve the Product record by ID
        $product = EducationalCommitte1::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'EducationalCommitte table2 Deleted Successfully');
    }

    //next part
    public function add_educational_committe_table3()
    {
         $user = Auth::user();
        return view('admin.extra.educational_committe.table3.add',compact('user'));
    }

    public function save_educational_committe_table3(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = new EducationalCommitte2();
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
            return redirect()->back()->with('popup_success','EducationalCommitte Table3 added succesfully.');
    }

    public function view_educational_committe_table3($id)
    {
        $user = Auth::user();
        $data = EducationalCommitte2::where('id',$id)->first();
        return view('admin.extra.educational_committe.table3.view',compact('user','data'));
    }

    
    public function update_educational_committe_table3(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'phone' => 'nullable|max:10',
        ]);
        $data = EducationalCommitte2::where('id',$id)->first();
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
            return redirect()->back()->with('popup_success','EducationalCommitte table3 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_educational_committe_table3($id)
    {
      // Retrieve the Product record by ID
        $product = EducationalCommitte2::findOrFail($id);
 
        // Get the image file paths
        $mainImagePath = $product->image;

        // Delete the main image file from storage
        if ($mainImagePath && Storage::disk('public')->exists(str_replace('storage/app/public/', '', $mainImagePath))) {
            Storage::disk('public')->delete(str_replace('storage/app/public/', '', $mainImagePath));
        }
        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('popup_success', 'EducationalCommitte table3 Deleted Successfully');
    }

    //next part
       public function diocesan_society()
    {
        $user = Auth::user();
        $table1 = DiocesanSociety::orderby('created_at','desc')->get();
        return view('admin.extra.diocesan_society.list',compact('user','table1'));
    }

    public function add_diocesan_society()
    {
         $user = Auth::user();
        return view('admin.extra.diocesan_society.add',compact('user'));
    }

    public function save_diocesan_society(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
        $data = new DiocesanSociety();
             $data->name = $request->name;
             $data->address = $request->address;   
            $data->save();
            return redirect()->back()->with('popup_success','DiocesanSociety added succesfully.');
    }

    public function view_diocesan_society($id)
    {
        $user = Auth::user();
        $data = DiocesanSociety::where('id',$id)->first();
        return view('admin.extra.diocesan_society.view',compact('user','data'));
    }

    
    public function update_diocesan_society(Request $request,$id)
    {
        $data = DiocesanSociety::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->address = $request->address;   
            $data->save();
            return redirect()->back()->with('popup_success','DiocesanSociety updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_diocesan_society($id)
    {
      // Retrieve the Product record by ID
        $product = DiocesanSociety::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'DiocesanSociety Deleted Successfully');
    }

    //next part
          public function pastoral_commission()
    {
        $user = Auth::user();
        $table1 = PastoralCommission::orderby('created_at','desc')->get();
        return view('admin.extra.pastoral_commission.list',compact('user','table1'));
    }

    public function add_pastoral_commission()
    {
         $user = Auth::user();
        return view('admin.extra.pastoral_commission.add',compact('user'));
    }

    public function save_pastoral_commission(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);
        $data = new PastoralCommission();
             $data->name = $request->name;
             $data->position = $request->position;   
            $data->save();
            return redirect()->back()->with('popup_success','PastoralCommission added succesfully.');
    }

    public function view_pastoral_commission($id)
    {
        $user = Auth::user();
        $data = PastoralCommission::where('id',$id)->first();
        return view('admin.extra.pastoral_commission.view',compact('user','data'));
    }

    
    public function update_pastoral_commission(Request $request,$id)
    {
        $data = PastoralCommission::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
             $data->position = $request->position;   
            $data->save();
            return redirect()->back()->with('popup_success','PastoralCommission updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_pastoral_commission($id)
    {
      // Retrieve the Product record by ID
        $product = PastoralCommission::where('id',$id)->delete();
        return redirect()->back()->with('popup_success', 'PastoralCommission Deleted Successfully');
    }

    //next part
      public function social_service()
    {
        $user = Auth::user();
        $data = SocialService::find(1);
        return view('admin.extra.social_service',compact('user','data'));
    }

     public function update_social_service(Request $request,$id)
    {
        $data = SocialService::where('id',$id)->first();
        if($data){
             $data->dexcription = $request->description; 
            $data->save();
            return redirect()->back()->with('popup_success','SocialService updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }


}
