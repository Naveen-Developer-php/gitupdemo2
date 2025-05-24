<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DioceseController;
use App\Http\Controllers\admin\ConferenceController;
use App\Http\Controllers\admin\ParishController;
use App\Http\Controllers\admin\PriestController;
use App\Http\Controllers\admin\BishopController;
use App\Http\Controllers\admin\DiocesanController;
use App\Http\Controllers\admin\CommitteController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\ExtraController;
use App\Http\Controllers\admin\SchoolController;
use App\Http\Controllers\admin\CollegeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AuthController::class)->group(function (){
    Route::get('/admin','admin')->name('admin');
    Route::post('/save-account','save_account')->name('save_account');
    Route::get('/admin-logout','logout_admin')->name('logout_admin');
    Route::post('/login','login')->name('login');
});

Route::middleware(['web', 'auth:sanctum'])->group(function () {
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/dashboard','dashboard')->name('dashboard');
    });
    Route::controller(AuthController::class)->group(function (){
        Route::get('/password-change','password_change')->name('password_change');
        Route::post('/update-password','update_password')->name('update_password');
    });
      Route::controller(DioceseController::class)->group(function (){
        Route::get('/about','about')->name('about');
        Route::get('/history','history')->name('history');
        Route::get('/pious-association','pious_association')->name('pious_association');
        Route::post('/update-about/{id}','update_about')->name('update_about');
        Route::post('/update-history/{id}','update_history')->name('update_history');
        Route::post('/update-pious-association/{id}','update_pious')->name('update_pious');
        Route::get('/vocation','vocation')->name('vocation');
        Route::get('/regulation','regulation')->name('regulation');
        Route::post('/update-vocation/{id}','update_vocation')->name('update_vocation');
        Route::post('/update-regulation/{id}','update_regulation')->name('update_regulation');

        // vocation tables 
        Route::get('/voaction-table1','voaction_table1')->name('voaction_table1');
        Route::get('/voaction-table2','voaction_table2')->name('voaction_table2');
        Route::post('/add-vocation-table1','add_voactiontable1')->name('add_voactiontable1');
        Route::post('/add-vocation-table2','add_voactiontable2')->name('add_voactiontable2');
        Route::get('/view-vocation-table1/{id}','view_table1')->name('view_table1');
        Route::get('/view-vocation-table2/{id}','view_table2')->name('view_table2');
        Route::post('/update-vocation-table1/{id}','update_voactiontable1')->name('update_voactiontable1');
        Route::post('/update-vocation-table2/{id}','update_voactiontable2')->name('update_voactiontable2');
        Route::get('/delete-vocation-table1/{id}','delete_table1')->name('delete_table1');
        Route::get('/delete-vocation-table2/{id}','delete_table2')->name('delete_table2');

        //regulation table parts
          Route::get('/regulation-table1','regulation_table1')->name('regulation_table1');
        Route::get('/regulation-table2','regulation_table2')->name('regulation_table2');
        Route::post('/add-regulation-table1','add_regulationtable1')->name('add_regulationtable1');
        Route::post('/add-regulation-table2','add_regulationtable2')->name('add_regulationtable2');
        Route::get('/view-regulation-table1/{id}','view_regulationtable1')->name('view_regulationtable1');
        Route::get('/view-regulation-table2/{id}','view_regulationtable2')->name('view_regulationtable2');
        Route::post('/update-regulation-table1/{id}','update_regulationtable1')->name('update_regulationtable1');
        Route::post('/update-regulation-table2/{id}','update_regulationtable2')->name('update_regulationtable2');
        Route::get('/delete-regulation-table1/{id}','delete_regulationtable1')->name('delete_regulationtable1');
        Route::get('/delete-regulation-table2/{id}','delete_regulationtable2')->name('delete_regulationtable2');
    });
      Route::controller(ConferenceController::class)->group(function (){
        Route::get('/fabc','fabc')->name('fabc');
        Route::get('/add-fabc','add_fabc')->name('add_fabc');
        Route::post('/save-fabc','save_fabc')->name('save_fabc');
        Route::get('/delete-fabc/{id}','delete_fabc')->name('delete_fabc');
        Route::get('/view-fabc/{id}','view_fabc')->name('view_fabc');
        Route::post('/update-fabc/{id}','update_fabc')->name('update_fabc');

        Route::get('/cbci','cbci')->name('cbci');
        Route::get('/add-cbci','add_cbci')->name('add_cbci');
        Route::post('/save-cbci','save_cbci')->name('save_cbci');
        Route::get('/delete-cbci/{id}','delete_cbci')->name('delete_cbci');
        Route::get('/view-cbci/{id}','view_cbci')->name('view_cbci');
        Route::post('/update-cbci/{id}','update_cbci')->name('update_cbci');

        Route::get('/ccbi','ccbi')->name('ccbi');
        Route::get('/add-ccbi','add_ccbi')->name('add_ccbi');
        Route::post('/save-ccbi','save_ccbi')->name('save_ccbi');
        Route::get('/delete-ccbi/{id}','delete_ccbi')->name('delete_ccbi');
        Route::get('/view-ccbi/{id}','view_ccbi')->name('view_ccbi');
        Route::post('/update-ccbi/{id}','update_ccbi')->name('update_ccbi');

        Route::get('/tnbc','tnbc')->name('tnbc');
        Route::get('/add-tnbc','add_tnbc')->name('add_tnbc');
        Route::post('/save-tnbc','save_tnbc')->name('save_tnbc');
        Route::get('/delete-tnbc/{id}','delete_tnbc')->name('delete_tnbc');
        Route::get('/view-tnbc/{id}','view_tnbc')->name('view_tnbc');
        Route::post('/update-tnbc/{id}','update_tnbc')->name('update_tnbc');
    });
      Route::controller(ParishController::class)->group(function (){
       
        Route::get('/vicariates','vicariates')->name('vicariates');
        Route::get('/add-vicariates','add_vicariates')->name('add_vicariates');
        Route::post('/save-vicariates','save_vicariates')->name('save_vicariates');
        Route::get('/view-vicariates/{id}','view_vicariates')->name('view_vicariates');
        Route::post('/update-vicariates/{id}','update_vicariates')->name('update_vicariates');
        Route::get('/delete-vicariates/{id}','delete_vicariates')->name('delete_vicariates');

        Route::get('/parish','parish')->name('parish');
        Route::get('/add-parish','add_parish')->name('add_parish');
        Route::post('/save-parish','save_parish')->name('save_parish');
        Route::get('/view-parish/{id}','view_parish')->name('view_parish');
        Route::post('/update-parish/{id}','update_parish')->name('update_parish');
        Route::get('/delete-parish/{id}','delete_parish')->name('delete_parish');

        Route::get('/parish-statistis','parishstatistis')->name('parishstatistis');
        Route::get('/add-parishstatistis','add_parishstatistis')->name('add_parishstatistis');
        Route::post('/save-parishstatistis','save_parishstatistis')->name('save_parishstatistis');
        Route::get('/view-parishstatistis/{id}','view_parishstatistis')->name('view_parishstatistis');
        Route::post('/update-parishstatistis/{id}','update_parishstatistis')->name('update_parishstatistis');
        Route::get('/delete-parishstatistis/{id}','delete_parishstatistis')->name('delete_parishstatistis');

        Route::get('/shrine','shrine')->name('shrine');
        Route::get('/add-shrine','add_shrine')->name('add_shrine');
        Route::post('/save-shrine','save_shrine')->name('save_shrine');
        Route::get('/view-shrine/{id}','view_shrine')->name('view_shrine');
        Route::post('/update-shrine/{id}','update_shrine')->name('update_shrine');
        Route::get('/delete-shrine/{id}','delete_shrine')->name('delete_shrine');

        Route::get('/area','area')->name('area');
        Route::get('/add-area','add_area')->name('add_area');
        Route::post('/save-area','save_area')->name('save_area');
        Route::get('/view-area/{id}','view_area')->name('view_area');
        Route::post('/update-area/{id}','update_area')->name('update_area');
        Route::get('/delete-area/{id}','delete_area')->name('delete_area');

    });
      Route::controller(PriestController::class)->group(function (){
        Route::get('/priest-profile','priest_profile')->name('priest_profile');
        Route::get('/add-priest-profile','add_priest_profile')->name('add_priest_profile');
        Route::get('/view-priest-profile/{id}','view_priest_profile')->name('view_priest_profile');
        Route::post('/save-priest-profile','save_priest_profile')->name('save_priest_profile');
        Route::post('/update-priest-profile/{id}','update_priest_profile')->name('update_priest_profile');
        Route::get('/delete-priest-profile/{id}','delete_priest_profile')->name('delete_priest_profile');
    });
      Route::controller(BishopController::class)->group(function (){
        Route::get('/bishop-profile','bishop_profile')->name('bishop_profile');
        Route::post('/update-bishop-profile/{id}','update_bishop_profile')->name('update_bishop_profile');
        Route::get('/add-bishop-details','add_bishop_details')->name('add_bishop_details');
        Route::post('/save-bishop-details','save_bishop_details')->name('save_bishop_details');
        Route::get('/view-bishop-details/{id}','view_bishop_details')->name('view_bishop_details');
        Route::post('/update-bishop-details/{id}','update_bishop_details')->name('update_bishop_details');
        Route::get('/delete-bishop-details/{id}','delete_bishop_details')->name('delete_bishop_details');
    });
     Route::controller(DiocesanController::class)->group(function (){
        Route::get('/obituary','obituary')->name('obituary');
        Route::get('/add-obituary','add_obituary')->name('add_obituary');
        Route::post('/save-obituary','save_obituary')->name('save_obituary');
        Route::get('/view-obituary/{id}','view_obituary')->name('view_obituary');
        Route::post('/update-obituary/{id}','update_obituary')->name('update_obituary');
        Route::get('/delete-obituary/{id}','delete_obituary')->name('delete_obituary');

        Route::get('/parishpriest','parish_priest')->name('parish_priest');
        Route::get('/add-parishpriest','add_parish_priest')->name('add_parish_priest');
        Route::post('/save-parishpriest','save_parish_priest')->name('save_parish_priest');
        Route::get('/view-parishpriest/{id}','view_parish_priest')->name('view_parish_priest');
        Route::post('/update-parishpriest/{id}','update_parish_priest')->name('update_parish_priest');
        Route::get('/delete-parishpriest/{id}','delete_parish_priest')->name('delete_parish_priest');

        Route::get('/reteriedpriest','reteried_priest')->name('reteried_priest');
        Route::get('/add-reteriedpriest','add_reteried_priest')->name('add_reteried_priest');
        Route::post('/save-reteriedpriest','save_reteried_priest')->name('save_reteried_priest');
        Route::get('/view-reteriedpriest/{id}','view_reteried_priest')->name('view_reteried_priest');
        Route::post('/update-reteriedpriest/{id}','update_reteried_priest')->name('update_reteried_priest');
        Route::get('/delete-reteriedpriest/{id}','delete_reteried_priest')->name('delete_reteried_priest');
    });
      Route::controller(CommitteController::class)->group(function (){
        Route::get('/diocesan-curia','diocesan_curia')->name('diocesan_curia');
        Route::post('/update-diocesan-curia/{id}','update_diocesan_curia')->name('update_diocesan_curia');

        Route::get('/college-consulators','college_consulators')->name('college_consulators');
        Route::get('/add-college-consulators','add_college_consulators')->name('add_college_consulators');
        Route::post('/save-college-consulators','save_college_consulators')->name('save_college_consulators');
        Route::get('/view-college-consulators/{id}','view_college_consulators')->name('view_college_consulators');
        Route::post('/update-college-consulators/{id}','update_college_consulators')->name('update_college_consulators');
        Route::get('/delete-college-consulators/{id}','delete_college_consulators')->name('delete_college_consulators');

        Route::get('/finance-committe','finance_committe')->name('finance_committe');

        Route::get('/add-finance-committe-table1','add_finance_committe_table1')->name('add_finance_committe_table1');
        Route::post('/save-finance-committe-table1','save_finance_committe_table1')->name('save_finance_committe_table1');
        Route::post('/update-finance-committe-table1/{id}','update_finance_committe_table1')->name('update_finance_committe_table1');
        Route::get('/view-finance-committe-table1/{id}','view_finance_committe_table1')->name('view_finance_committe_table1');
        Route::get('/delete-finance-committe-table1/{id}','delete_finance_committe_table1')->name('delete_finance_committe_table1');

        Route::get('/add-finance-committe-table2','add_finance_committe_table2')->name('add_finance_committe_table2');
        Route::post('/save-finance-committe-table2','save_finance_committe_table2')->name('save_finance_committe_table2');
        Route::post('/update-finance-committe-table2/{id}','update_finance_committe_table2')->name('update_finance_committe_table2');
        Route::get('/view-finance-committe-table2/{id}','view_finance_committe_table2')->name('view_finance_committe_table2');
        Route::get('/delete-finance-committe-table2/{id}','delete_finance_committe_table2')->name('delete_finance_committe_table2');

        Route::get('/add-finance-committe-table3','add_finance_committe_table3')->name('add_finance_committe_table3');
        Route::post('/save-finance-committe-table3','save_finance_committe_table3')->name('save_finance_committe_table3');
        Route::post('/update-finance-committe-table3/{id}','update_finance_committe_table3')->name('update_finance_committe_table3');
        Route::get('/view-finance-committe-table3/{id}','view_finance_committe_table3')->name('view_finance_committe_table3');
        Route::get('/delete-finance-committe-table3/{id}','delete_finance_committe_table3')->name('delete_finance_committe_table3');
    });
     Route::controller(SettingController::class)->group(function (){
        Route::get('/privacy','privacy')->name('privacy');
        Route::post('/update-privacy/{id}','update_privacy')->name('update_privacy');

        Route::get('/terms','terms')->name('terms');
        Route::post('/update-terms/{id}','update_terms')->name('update_terms');

        Route::get('/logo','logo')->name('logo');
        Route::get('/view-logo/{id}','view_logo')->name('view_logo');
        Route::post('/update-logo/{id}','update_logo')->name('update_logo');

        Route::get('/banner','banner')->name('banner');
        Route::get('/add-banner','add_banner')->name('add_banner');
        Route::post('/save-banner','save_banner')->name('save_banner');
        Route::get('/view-banner/{id}','view_banner')->name('view_banner');
        Route::post('/update-banner/{id}','update_banner')->name('update_banner');
        Route::get('/delete-banner/{id}','delete_banner')->name('delete_banner');

        Route::get('/event','event')->name('event');
        Route::get('/add-event','add_event')->name('add_event');
        Route::post('/save-event','save_event')->name('save_event');
        Route::post('/update-event/{id}','update_event')->name('update_event');
        Route::get('/view-event/{id}','view_event')->name('view_event');
        Route::get('/delete-event/{id}','delete_event')->name('delete_event');
    });
      Route::controller(ExtraController::class)->group(function (){
        Route::get('/educational-committe','educational_committe')->name('educational_committe');

        Route::get('/add-educational-committe-table1','add_educational_committe_table1')->name('add_educational_committe_table1');
        Route::post('/save-educational-committe-table1','save_educational_committe_table1')->name('save_educational_committe_table1');
        Route::post('/update-educational-committe-table1/{id}','update_educational_committe_table1')->name('update_educational_committe_table1');
        Route::get('/view-educational-committe-table1/{id}','view_educational_committe_table1')->name('view_educational_committe_table1');
        Route::get('/delete-educational-committe-table1/{id}','delete_educational_committe_table1')->name('delete_educational_committe_table1');

        Route::get('/add-educational-committe-table2','add_educational_committe_table2')->name('add_educational_committe_table2');
        Route::post('/save-educational-committe-table2','save_educational_committe_table2')->name('save_educational_committe_table2');
        Route::post('/update-educational-committe-table2/{id}','update_educational_committe_table2')->name('update_educational_committe_table2');
        Route::get('/view-educational-committe-table2/{id}','view_educational_committe_table2')->name('view_educational_committe_table2');
        Route::get('/delete-educational-committe-table2/{id}','delete_educational_committe_table2')->name('delete_educational_committe_table2');

        Route::get('/add-educational-committe-table3','add_educational_committe_table3')->name('add_educational_committe_table3');
        Route::post('/save-educational-committe-table3','save_educational_committe_table3')->name('save_educational_committe_table3');
        Route::post('/update-educational-committe-table3/{id}','update_educational_committe_table3')->name('update_educational_committe_table3');
        Route::get('/view-educational-committe-table3/{id}','view_educational_committe_table3')->name('view_educational_committe_table3');
        Route::get('/delete-educational-committe-table3/{id}','delete_educational_committe_table3')->name('delete_educational_committe_table3');

        Route::get('/diocesan-society','diocesan_society')->name('diocesan_society');
        Route::get('/add-diocesan-society','add_diocesan_society')->name('add_diocesan_society');
        Route::post('/save-diocesan-society','save_diocesan_society')->name('save_diocesan_society');
        Route::post('/update-diocesan-society/{id}','update_diocesan_society')->name('update_diocesan_society');
        Route::get('/view-diocesan-society/{id}','view_diocesan_society')->name('view_diocesan_society');
        Route::get('/delete-diocesan-society/{id}','delete_diocesan_society')->name('delete_diocesan_society');

        Route::get('/pastoral-commission','pastoral_commission')->name('pastoral_commission');
        Route::get('/add-pastoral-commission','add_pastoral_commission')->name('add_pastoral_commission');
        Route::post('/save-pastoral-commission','save_pastoral_commission')->name('save_pastoral_commission');
        Route::post('/update-pastoral-commission/{id}','update_pastoral_commission')->name('update_pastoral_commission');
        Route::get('/view-pastoral-commission/{id}','view_pastoral_commission')->name('view_pastoral_commission');
        Route::get('/delete-pastoral-commission/{id}','delete_pastoral_commission')->name('delete_pastoral_commission');

        Route::get('/social-service','social_service')->name('social_service');
        Route::post('/update-social-service/{id}','update_social_service')->name('update_social_service');
    });
     Route::controller(SchoolController::class)->group(function (){
        Route::get('/diocesan-school','diocesan_school')->name('diocesan_school');
        Route::get('/add-diocesan-school','add_diocesan_school')->name('add_diocesan_school');
        Route::post('/update-diocesan-school/{id}','update_diocesan_school')->name('update_diocesan_school');
        Route::post('/save-diocesan-school','save_diocesan_school')->name('save_diocesan_school');
        Route::get('/view-diocesan-school/{id}','view_diocesan_school')->name('view_diocesan_school');
        Route::get('/delete-diocesan-school/{id}','delete_diocesan_school')->name('delete_diocesan_school');

        Route::get('/religious-school','religious_school')->name('religious_school');
        Route::get('/add-religious-school','add_religious_school')->name('add_religious_school');
        Route::post('/save-religious-school','save_religious_school')->name('save_religious_school');
        Route::post('/update-religious-school/{id}','update_religious_school')->name('update_religious_school');
        Route::get('/view-religious-school/{id}','view_religious_school')->name('view_religious_school');
        Route::get('/delete-religious-school/{id}','delete_religious_school')->name('delete_religious_school');

        Route::get('/add-primary-school','add_primary_school')->name('add_primary_school');
        Route::post('/update-primary-school/{id}','update_primary_school')->name('update_primary_school');
        Route::post('/save-primary-school','save_primary_school')->name('save_primary_school');
        Route::get('/view-primary-school/{id}','view_primary_school')->name('view_primary_school');
        Route::get('/delete-primary-school/{id}','delete_primary_school')->name('delete_primary_school');
    });
     Route::controller(CollegeController::class)->group(function (){
        Route::get('/diocesan-college','diocesan_college')->name('diocesan_college');
        Route::get('/add-diocesan-college','add_diocesan_college')->name('add_diocesan_college');
        Route::post('/update-diocesan-college/{id}','update_diocesan_college')->name('update_diocesan_college');
        Route::post('/save-diocesan-college','save_diocesan_college')->name('save_diocesan_college');
        Route::get('/view-diocesan-college/{id}','view_diocesan_college')->name('view_diocesan_college');
        Route::get('/delete-diocesan-college/{id}','delete_diocesan_college')->name('delete_diocesan_college');

        Route::get('/religious-college','religious_college')->name('religious_college');
        Route::get('/add-religious-college','add_religious_college')->name('add_religious_college');
        Route::post('/save-religious-college','save_religious_college')->name('save_religious_college');
        Route::post('/update-religious-college/{id}','update_religious_college')->name('update_religious_college');
        Route::get('/view-religious-college/{id}','view_religious_college')->name('view_religious_college');
        Route::get('/delete-religious-college/{id}','delete_religious_college')->name('delete_religious_college');
    });
});

Route::get('clearcache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "All Cache Cleared!";
});
