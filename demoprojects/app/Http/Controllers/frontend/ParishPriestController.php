<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Parish;
use App\Models\ParishPriest;
use App\Models\ParishStatistis;
use App\Models\Vicariates;
use App\Models\Obituary;
use App\Models\AreaChurchmission;
use App\Models\Shrine;
use App\Models\ReteriedPriest;

class ParishPriestController extends Controller
{
    public function vicariate()
    {
        $logo = Logo::find(1);
        $table1 = Vicariates::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.vicariate',compact('logo','table1'));
    }

    public function shrine()
    {
        $logo = Logo::find(1);
        $table1 = Shrine::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.shrine',compact('logo','table1'));
    }

     public function parish_statistis()
    {
        $logo = Logo::find(1);
        $table1 = ParishStatistis::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.parish_statistcs',compact('logo','table1'));
    }

     public function parish()
    {
        $logo = Logo::find(1);
        $table1 = Parish::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.parish',compact('logo','table1'));
    }

     public function area()
    {
        $logo = Logo::find(1);
        $table1 = AreaChurchmission::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.area',compact('logo','table1'));
    }

      public function retired_priest()
    {
        $logo = Logo::find(1);
        $table1 = ReteriedPriest::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.Retired_priest',compact('logo','table1'));
    }

      public function obituary()
    {
        $logo = Logo::find(1);
        $table1 = Obituary::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.obituary',compact('logo','table1'));
    }

    public function parish_priest()
    {
        $logo = Logo::find(1);
        $table1 = ParishPriest::orderby('created_at','desc')->get();
        return view('frontend.parish_priest.parishpriest',compact('logo','table1'));
    }

    public function religious_priest()
    {
        $logo = Logo::find(1);
        return view('frontend.parish_priest.religious.priest',compact('logo'));
    }
    
    public function religious_sister()
    {
        $logo = Logo::find(1);
        return view('frontend.parish_priest.religious.sister',compact('logo'));
    }
    
    public function religious_brother()
    {
        $logo = Logo::find(1);
        return view('frontend.parish_priest.religious.brother',compact('logo'));
    }
    
    public function religious_congregation()
    {
        $logo = Logo::find(1);
        return view('frontend.parish_priest.religious.congregation',compact('logo'));
    }

   
}
