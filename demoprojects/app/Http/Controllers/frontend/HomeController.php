<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Event;
use App\Models\ParishPriest;
use App\Models\About;
use App\Models\History;
use App\Models\Vocation;
use App\Models\VocationTable1;
use App\Models\VocationTable2;
use App\Models\Regulation;
use App\Models\RegulationTable1;
use App\Models\RegulationTable2;
use App\Models\PiousAssociation;
use App\Models\BishopProfile;
use App\Models\BishopDetails;
use App\Models\FABC;
use App\Models\CBCI;
use App\Models\CCBI;
use App\Models\TNBC;
use App\Models\BishopEvent;
class HomeController extends Controller
{
    public function index()
    {
        $logo = Logo::find(1);
        $banner = Banner::orderby('created_at','desc')->get();
        $event = Event::orderby('created_at','desc')->take(3)->get();
        $parishpriest = ParishPriest::orderby('created_at','desc')->take(4)->get();
        return view('frontend.index',compact('logo','banner','event','parishpriest'));
    }

    public function about()
    {
        $logo = Logo::find(1);
        $about = About::find(1);
        $parishpriest = ParishPriest::orderby('created_at','desc')->take(4)->get();
        return view('frontend.diocese.about',compact('logo','parishpriest','about'));
    }

     public function history()
    {
        $logo = Logo::find(1);
        $history = History::find(1);
        return view('frontend.diocese.history',compact('logo','history'));
    }

      public function vocation()
    {
        $logo = Logo::find(1);
        $vocation = Vocation::find(1);
        $table1 = VocationTable1::orderby('created_at','desc')->get();
        $table2 = VocationTable2::orderby('created_at','desc')->get();

        return view('frontend.diocese.vocation',compact('logo','vocation','table1','table2'));
    }

    public function regulation()
    {
        $logo = Logo::find(1);
        $regulation = Regulation::find(1);
         $table1 = RegulationTable1::orderby('created_at','desc')->get();
        $table2 = RegulationTable2::orderby('created_at','desc')->get();

        return view('frontend.diocese.regulation',compact('logo','regulation','table1','table2'));
    }
    public function pious_association()
    {
        $logo = Logo::find(1);
        $pious = PiousAssociation::find(1);
        return view('frontend.diocese.pious_association',compact('logo','pious'));
    }

    public function bishop_profile()
    {
        $logo = Logo::find(1);
        $bishop = BishopProfile::find(1);
        $table1 = BishopDetails::orderby('created_at','desc')->get();
        return view('frontend.diocese.bishop',compact('logo','bishop','table1'));
    }

     public function bishop_engagement()
    {
        $logo = Logo::find(1);
        $bishop = BishopEvent::all();
        return view('frontend.diocese.bishop_engagement',compact('logo','bishop'));
    }

     public function fabc()
    {
        $logo = Logo::find(1);
        $table1 = FABC::orderby('created_at','desc')->get();
        return view('frontend.diocese.fabc',compact('logo','table1'));
    }

     public function cbci()
    {
        $logo = Logo::find(1);
        $table1 = CBCI::orderby('created_at','desc')->get();
        return view('frontend.diocese.cbci',compact('logo','table1'));
    }

     public function ccbi()
    {
        $logo = Logo::find(1);
        $table1 = CCBI::orderby('created_at','desc')->get();
        return view('frontend.diocese.ccbi',compact('logo','table1'));
    }

     public function tnbc()
    {
        $logo = Logo::find(1);
        $table1 = TNBC::orderby('created_at','desc')->get();
        return view('frontend.diocese.tnbc',compact('logo','table1'));
    }

    public function events()
    {
        $logo = Logo::find(1);
        $event = Event::orderby('created_at','desc')->get();
        return view('frontend.event',compact('logo','event'));
    }

    public function event_details($id)
    {
          $logo = Logo::find(1);
        $event = Event::where('id',$id)->first();
        return view('frontend.event_details',compact('logo','event'));
    }

     public function contact()
    {
          $logo = Logo::find(1);
        return view('frontend.contact',compact('logo'));
    }
}
