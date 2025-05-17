<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\History;
use App\Models\PiousAssociation;
use App\Models\Regulation;
use App\Models\RegulationTable1;
use App\Models\RegulationTable2;
use App\Models\Vocation;
use App\Models\VocationTable1;
use App\Models\VocationTable2;
use Illuminate\Support\Facades\Auth;

class DioceseController extends Controller
{
    public function about()
    {
        $user = Auth::user();
        $about = About::find(1);
        return view('admin.diocese.about',compact('user','about'));
    }

    public function update_about(Request $request,$id)
    {
        $request->validate([
           'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $data = About::where('id',$id)->first();
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
            return redirect()->back()->with('popup_success','About updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

      public function history()
    {
        $user = Auth::user();
        $history = History::find(1);
        return view('admin.diocese.history',compact('user','history'));
    }

      public function update_history(Request $request,$id)
    {
        $data = History::where('id',$id)->first();
        if($data){
             $data->description = $request->description;
            $data->save();
            return redirect()->back()->with('popup_success','History updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

      public function pious_association()
    {
        $user = Auth::user();
        $pious = PiousAssociation::find(1);
        return view('admin.diocese.pious_association',compact('user','pious'));
    }

      public function update_pious(Request $request,$id)
    {
        $data = PiousAssociation::where('id',$id)->first();
        if($data){
            $data->description = $request->description;
            $data->save();
            return redirect()->back()->with('popup_success','PiousAssociation updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function vocation()
    {
        $user = Auth::user();
        $vocation = Vocation::find(1);
        $vocationtable1 = VocationTable1::orderby('created_at','desc')->get();
        $vocationtable2 = VocationTable2::orderby('created_at','desc')->get();
        return view('admin.diocese.vocation',compact('user','vocation','vocationtable1','vocationtable2'));
    }

       public function update_vocation(Request $request,$id)
    {
        $data = Vocation::where('id',$id)->first();
        if($data){
            $data->description1 = $request->description1;
            $data->description2 = $request->description2;
            $data->save();
            return redirect()->back()->with('popup_success','Vocations updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function voaction_table1()
    {
        $user = Auth::user();
        return view('admin.diocese.vocation_table1.add',compact('user'));
    }

    public function add_voactiontable1(Request $request)
    {
        $request->validate([
            "name" => "required",
            "year" => "required",
            "seminary" => "required",
        ]);
        $data = new VocationTable1();
        $data->name = $request->name;
        $data->year = $request->year;
        $data->seminary = $request->seminary;
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','VocationsTable1 added succesfully.');
    }

      public function view_table1($id)
    {
        $user = Auth::user();
        $data = VocationTable1::where('id',$id)->first();
        return view('admin.diocese.vocation_table1.view',compact('user','data'));
    }

     public function update_voactiontable1(Request $request,$id)
    {
        $data = VocationTable1::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
            $data->year = $request->year;
            $data->seminary = $request->seminary;
            $data->save();
            return redirect()->back()->with('popup_success','VocationsTable1 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

     public function voaction_table2()
    {
        $user = Auth::user();
        return view('admin.diocese.vocation_table2.add',compact('user'));
    }

     public function add_voactiontable2(Request $request)
    {
        $request->validate([
            "name" => "required",
            "year" => "required",
            "seminary" => "required",
        ]);
        $data = new VocationTable2();
        $data->name = $request->name;
        $data->year = $request->year;
        $data->seminary = $request->seminary;
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','VocationsTable2 added succesfully.');
    }

    public function view_table2($id)
    {
        $user = Auth::user();
        $data = VocationTable2::where('id',$id)->first();
        return view('admin.diocese.vocation_table2.view',compact('user','data'));
    }

     public function update_voactiontable2(Request $request,$id)
    {
        $data = VocationTable2::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
            $data->year = $request->year;
            $data->seminary = $request->seminary;
            $data->save();
            return redirect()->back()->with('popup_success','VocationsTable2 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_table1($id)
    {
        $data = VocationTable1::where('id',$id)->delete();
        return redirect()->back()->with('popup_success','VocationsTable1 data deleted succesfully.');
    }

     public function delete_table2($id)
    {
        $data = VocationTable2::where('id',$id)->delete();
        return redirect()->back()->with('popup_success','VocationsTable2 data deleted succesfully.');
    }


      public function regulation()
    {
        $user = Auth::user();
        $regulation = Regulation::find(1);
        $regulationtable1 = RegulationTable1::orderby('created_at','desc')->get();
        $regulationtable2 = RegulationTable2::orderby('created_at','desc')->get();
        return view('admin.diocese.regulation',compact('user','regulation','regulationtable1','regulationtable2'));
    }

     public function update_regulation(Request $request,$id)
    {
        $data = Regulation::where('id',$id)->first();
        if($data){
            $data->description1 = $request->description1;
            $data->description2 = $request->description2;
            $data->description3 = $request->description3;
            $data->save();
            return redirect()->back()->with('popup_success','Regulation updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

     public function regulation_table1()
    {
        $user = Auth::user();
        return view('admin.diocese.regulation_table1.add',compact('user'));
    }

    public function add_regulationtable1(Request $request)
    {
        $request->validate([
            "name" => "required",
            "parish" => "required",
            "address" => "required",
        ]);
        $data = new RegulationTable1();
        $data->name = $request->name;
        $data->parish = $request->parish;
        $data->address = $request->address;
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','RegulationTable1 added succesfully.');
    }

      public function view_regulationtable1($id)
    {
        $user = Auth::user();
        $data = RegulationTable1::where('id',$id)->first();
        return view('admin.diocese.regulation_table1.view',compact('user','data'));
    }

     public function update_regulationtable1(Request $request,$id)
    {
        $data = RegulationTable1::where('id',$id)->first();
        if($data){
             $data->name = $request->name;
        $data->parish = $request->parish;
        $data->address = $request->address;
            $data->save();
            return redirect()->back()->with('popup_success','RegulationTable1 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

     public function regulation_table2()
    {
        $user = Auth::user();
        return view('admin.diocese.regulation_table2.add',compact('user'));
    }

     public function add_regulationtable2(Request $request)
    {
       $request->validate([
            "name" => "required",
            "parish" => "required",
            "address" => "required",
        ]);
         $data = new RegulationTable2();
        $data->name = $request->name;
        $data->parish = $request->parish;
        $data->address = $request->address;
        $data->created_at = now();
        $data->save();
        return redirect()->back()->with('popup_success','RegulationTable2 added succesfully.');
    }

    public function view_regulationtable2($id)
    {
        $user = Auth::user();
        $data = RegulationTable2::where('id',$id)->first();
        return view('admin.diocese.regulation_table2.view',compact('user','data'));
    }

     public function update_regulationtable2(Request $request,$id)
    {
        $data = RegulationTable2::where('id',$id)->first();
        if($data){
            $data->name = $request->name;
        $data->parish = $request->parish;
        $data->address = $request->address;
            $data->save();
            return redirect()->back()->with('popup_success','RegulationTable2 updated succesfully.');
        }else{
            return redirect()->back()->with('popup_error','Data not found.');
        }
    }

    public function delete_regulationtable1($id)
    {
        $data = RegulationTable1::where('id',$id)->delete();
        return redirect()->back()->with('popup_success','RegulationTable1 data deleted succesfully.');
    }

     public function delete_regulationtable2($id)
    {
        $data = RegulationTable2::where('id',$id)->delete();
        return redirect()->back()->with('popup_success','RegulationTable2 data deleted succesfully.');
    }

}
