<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\CollegeConsulators;
use App\Models\DiocesanCuria;
use App\Models\DiocesanSociety;
use App\Models\EducationalCommitte;
use App\Models\EducationalCommitte1;
use App\Models\EducationalCommitte2;
use App\Models\FinanceCommitte;
use App\Models\FinanceCommitte1;
use App\Models\FinanceCommitte2;
use App\Models\PastoralCommission;
use App\Models\SocialService;

class AdministrationController extends Controller
{
    public function diocesan_curia()
    {
        $logo = Logo::find(1);
        $table1 = DiocesanCuria::find(1);
        return view('frontend.administration.diocesan_curia',compact('logo','table1'));
    }

    public function college_consulators()
    {
        $logo = Logo::find(1);
        $table1 = CollegeConsulators::orderby('created_at','desc')->get();
        return view('frontend.administration.college_consulators',compact('logo','table1'));
    }
        
    public function finance_committe()
    {
        $logo = Logo::find(1);
          $table1 = FinanceCommitte::orderby('created_at','desc')->get();
          $table2 = FinanceCommitte1::orderby('created_at','desc')->get();
          $table3 = FinanceCommitte2::orderby('created_at','desc')->get();
        return view('frontend.administration.finance_committe',compact('logo','table1','table2','table3'));
    }

    public function diocesan_senate()
    {
        $logo = Logo::find(1);
        return view('frontend.administration.diocesan_senate',compact('logo'));
    }

    public function project_commitee()
    {
        $logo = Logo::find(1);
        return view('frontend.administration.project_commitee',compact('logo'));
    }
    
    public function formation_council()
    {
        $logo = Logo::find(1);
        return view('frontend.administration.formation_council',compact('logo'));
    }
           
    public function educational_committee()
    {
        $logo = Logo::find(1);
          $table1 = EducationalCommitte::orderby('created_at','desc')->get();
          $table2 = EducationalCommitte1::orderby('created_at','desc')->get();
          $table3 = EducationalCommitte2::orderby('created_at','desc')->get();
        return view('frontend.administration.educational_committee',compact('logo','table1','table2','table3'));
    }

    public function pastoral_commissions()
    {
        $logo = Logo::find(1);
        $table1 = PastoralCommission::orderby('created_at','desc')->get();
        return view('frontend.administration.pastoral_commissions',compact('logo','table1'));
    }

    public function diocesan_society()
    {
        $logo = Logo::find(1);
        $table1 = DiocesanSociety::orderby('created_at','desc')->get();
        return view('frontend.administration.diocesan_society',compact('logo','table1'));
    }
    
    public function social_service()
    {
        $logo = Logo::find(1);
        $table1 = SocialService::find(1);
        return view('frontend.administration.social_service',compact('logo','table1'));
    }
       
    public function catholic_centre()
    {
        $logo = Logo::find(1);
        return view('frontend.administration.catholic_centre',compact('logo'));
    }

      public function transfer_list()
    {
        $logo = Logo::find(1);
        return view('frontend.administration.transfer_list',compact('logo'));
    }
}
