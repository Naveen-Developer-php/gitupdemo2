<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\AreaChurchmission;
use App\Models\Parish;
use App\Models\ParishStatistis;
use App\Models\Shrine;
use App\Models\Vicariates;


class ParishController extends Controller
{
    public function vicariates()
    {
        $user = Auth::user();
        $data = Vicariates::orderby('created_at','desc')->get();
        return view('admin.parish.vicariates.list',compact('user','data'));
    }

     public function add_vicariates()
    {
        $user = Auth::user();
        return view('admin.parish.vicariates.add',compact('user'));
    }

    public function save_vicariates(Request $request)
    {
        $request->validate([
            "vicariates" => "required",
            "no_of_parish" => "required",
        ]);

        $data = new Vicariates();
        $data->vicariates = $request->vicariates;
        $data->no_of_parish = $request->no_of_parish;
        $data->save();
        return redirect()->back()->with('popup_success','Vicariates added succesfully.');
    }

     public function view_vicariates($id)
    {
        $user = Auth::user();
          $data = Vicariates::where('id',$id)->first();
        return view('admin.parish.vicariates.view',compact('user','data'));
    }

     public function update_vicariates(Request $request,$id)
    {
       
      $data = Vicariates::where('id',$id)->first();
      if($data){
        $data->vicariates = $request->vicariates;
        $data->no_of_parish = $request->no_of_parish;
        $data->save();
        return redirect()->back()->with('popup_success','Vicariates updated succesfully.');
      }else{
         return redirect()->back()->with('popup_error','data not found.');
      }
    }

     public function delete_vicariates($id)
    {
        $data = Vicariates::where('id',$id)->delete();
         return redirect()->back()->with('popup_success','Vicariates deleted succesfully.');
    }

    //next part
      public function parish()
    {
        $user = Auth::user();
        $data = Parish::orderby('created_at','desc')->get();
        return view('admin.parish.parish.list',compact('user','data'));
    }

     public function add_parish()
    {
        $user = Auth::user();
        return view('admin.parish.parish.add',compact('user'));
    }

    public function save_parish(Request $request)
    {
        $request->validate([
            "address" => "required",
            "phone" => "required|max:10",
            "parish" => "required",

        ]);

        $data = new Parish();
        $data->parish = $request->parish;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
        return redirect()->back()->with('popup_success','parish added succesfully.');
    }

     public function view_parish($id)
    {
        $user = Auth::user();
          $data = Parish::where('id',$id)->first();
        return view('admin.parish.parish.view',compact('user','data'));
    }

     public function update_parish(Request $request,$id)
    {
        $request->validate([
           "phone" => "nullable|max:10",
        ]);

      $data = Parish::where('id',$id)->first();
      if($data){
        $data->parish = $request->parish;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
        return redirect()->back()->with('popup_success','Parish updated succesfully.');
      }else{
         return redirect()->back()->with('popup_error','data not found.');
      }
    }

     public function delete_parish($id)
    {
        $data = Parish::where('id',$id)->delete();
         return redirect()->back()->with('popup_success','Parish deleted succesfully.');
    }

    //next part
      public function parishstatistis()
    {
        $user = Auth::user();
        $data = ParishStatistis::orderby('created_at','desc')->get();
        return view('admin.parish.parishstatistis.list',compact('user','data'));
    }

     public function add_parishstatistis()
    {
        $user = Auth::user();
        return view('admin.parish.parishstatistis.add',compact('user'));
    }

    public function save_parishstatistis(Request $request)
    {
        $request->validate([
            "name" => "required",
            "family" => "required",
            "female" => "required",
              "male" => "required",
            "total_population" => "required",
            "substation" => "required",
        ]);

        $data = new ParishStatistis();
        $data->name = $request->name;
        $data->family = $request->family;
        $data->female = $request->female;
          $data->male = $request->male;
        $data->total_population = $request->total_population;
        $data->substation = $request->substation;
        $data->save();
        return redirect()->back()->with('popup_success','parishstatistis added succesfully.');
    }

     public function view_parishstatistis($id)
    {
        $user = Auth::user();
          $data = ParishStatistis::where('id',$id)->first();
        return view('admin.parish.parishstatistis.view',compact('user','data'));
    }

     public function update_parishstatistis(Request $request,$id)
    {
      $data = ParishStatistis::where('id',$id)->first();
      if($data){
         $data->name = $request->name;
        $data->family = $request->family;
        $data->female = $request->female;
          $data->male = $request->male;
        $data->total_population = $request->total_population;
        $data->substation = $request->substation;
        $data->save();
        return redirect()->back()->with('popup_success','Parishstatistis updated succesfully.');
      }else{
         return redirect()->back()->with('popup_error','data not found.');
      }
    }

     public function delete_parishstatistis($id)
    {
        $data = ParishStatistis::where('id',$id)->delete();
         return redirect()->back()->with('popup_success','Parishstatistis deleted succesfully.');
    }

    //next part
       public function shrine()
    {
        $user = Auth::user();
        $data = Shrine::orderby('created_at','desc')->get();
        return view('admin.parish.shrine.list',compact('user','data'));
    }

     public function add_shrine()
    {
        $user = Auth::user();
        return view('admin.parish.shrine.add',compact('user'));
    }

    public function save_shrine(Request $request)
    {
        $request->validate([
            "name" => "required",
            "position" => "required",
            "phone" => "required|max:10",
              "tel" => "required",
        ]);

        $data = new Shrine();
        $data->name = $request->name;
        $data->position = $request->position;
        $data->phone = $request->phone;
          $data->tel = $request->tel;
        $data->save();
        return redirect()->back()->with('popup_success','Shrine added succesfully.');
    }

     public function view_shrine($id)
    {
        $user = Auth::user();
          $data = Shrine::where('id',$id)->first();
        return view('admin.parish.shrine.view',compact('user','data'));
    }

     public function update_shrine(Request $request,$id)
    {
        $request->validate([
            "phone" => "nullable|max:10",
        ]);
      $data = Shrine::where('id',$id)->first();
      if($data){
          $data->name = $request->name;
        $data->position = $request->position;
        $data->phone = $request->phone;
          $data->tel = $request->tel;
        $data->save();
        return redirect()->back()->with('popup_success','Shrine updated succesfully.');
      }else{
         return redirect()->back()->with('popup_error','data not found.');
      }
    }

     public function delete_shrine($id)
    {
        $data = Shrine::where('id',$id)->delete();
         return redirect()->back()->with('popup_success','Shrine deleted succesfully.');
    }

    //next part
          public function area()
    {
        $user = Auth::user();
        $data = AreaChurchmission::orderby('created_at','desc')->get();
        return view('admin.parish.area.list',compact('user','data'));
    }

     public function add_area()
    {
        $user = Auth::user();
        return view('admin.parish.area.add',compact('user'));
    }

    public function save_area(Request $request)
    {
        $request->validate([
            "population" => "required",
            "count" => "required",
        ]);

        $data = new AreaChurchmission();
        $data->population = $request->population;
        $data->count = $request->count;
        $data->save();
        return redirect()->back()->with('popup_success','AreaChurchmission added succesfully.');
    }

     public function view_area($id)
    {
        $user = Auth::user();
          $data = AreaChurchmission::where('id',$id)->first();
        return view('admin.parish.area.view',compact('user','data'));
    }

     public function update_area(Request $request,$id)
    {
       
      $data = AreaChurchmission::where('id',$id)->first();
      if($data){
           $data->population = $request->population;
        $data->count = $request->count;
        $data->save();
        return redirect()->back()->with('popup_success','AreaChurchmission updated succesfully.');
      }else{
         return redirect()->back()->with('popup_error','data not found.');
      }
    }

     public function delete_area($id)
    {
        $data = AreaChurchmission::where('id',$id)->delete();
         return redirect()->back()->with('popup_success','AreaChurchmission deleted succesfully.');
    }
}
