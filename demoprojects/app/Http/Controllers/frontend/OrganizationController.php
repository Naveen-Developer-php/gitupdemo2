<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\DiocesanCollege;
use App\Models\DiocesanSchool;
use App\Models\PrimarySchool;
use App\Models\ReligiousCollege;
use App\Models\ReligiousSchool;
use App\Models\HomeAge;
use App\Models\Hospital;


class OrganizationController extends Controller
{
    public function diocesan_college()
    {
        $logo = Logo::find(1);
        $table1 = DiocesanCollege::orderby('created_at','desc')->get();
        return view('frontend.organization.diocesan_college',compact('logo','table1'));
    }

     public function religious_college()
    {
        $logo = Logo::find(1);
        $table1 = ReligiousCollege::orderby('created_at','desc')->get();
        return view('frontend.organization.religious_college',compact('logo','table1'));
    }

      public function diocesan_school()
    {
        $logo = Logo::find(1);
        $table1 = PrimarySchool::orderby('created_at','desc')->get();
        $table2 = DiocesanSchool::orderby('created_at','desc')->get();
        return view('frontend.organization.diocesan_school',compact('logo','table1','table2'));
    }

     public function religious_school()
    {
        $logo = Logo::find(1);
        $table1 = PrimarySchool::orderby('created_at','desc')->get();
        $table2 = ReligiousSchool::orderby('created_at','desc')->get();
        return view('frontend.organization.religious_school',compact('logo','table1','table2'));
    }

       public function hospital()
    {
        $logo = Logo::find(1);
        $table1 = Hospital::orderby('created_at','desc')->get();
        return view('frontend.organization.hospital',compact('logo','table1'));
    }

        public function home_age()
    {
        $logo = Logo::find(1);
        $table1 = HomeAge::orderby('created_at','desc')->get();
        return view('frontend.organization.home_age',compact('logo','table1'));
    }

     public function orphanages()
    {
        $logo = Logo::find(1);
        return view('frontend.organization.orphanages',compact('logo'));
    }

}
