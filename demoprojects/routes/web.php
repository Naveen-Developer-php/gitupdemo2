<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ParishPriestController;
use App\Http\Controllers\frontend\AdministrationController;
use App\Http\Controllers\frontend\OrganizationController;


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
  Route::controller(HomeController::class)->group(function (){
        Route::get('/','index')->name('index');
    });
Route::prefix('front')->controller(HomeController::class)->group(function () {
    Route::get('/about', 'about')->name('front.about');
    Route::get('/contact', 'contact')->name('front.contact');
    Route::get('/events', 'events')->name('front.events');
    Route::get('/event-details/{id}', 'event_details')->name('front.event_details');
    Route::get('/history', 'history')->name('front.history');
    Route::get('/vocation', 'vocation')->name('front.vocation');
    Route::get('/regulation', 'regulation')->name('front.regulation');
    Route::get('/pious-association', 'pious_association')->name('front.pious_association');
    Route::get('/bishop-profile', 'bishop_profile')->name('front.bishop_profile');
    Route::get('/bishop-engagement', 'bishop_engagement')->name('front.bishop_engagement');

    Route::get('/fabc', 'fabc')->name('front.fabc');
    Route::get('/cbci', 'cbci')->name('front.cbci');
    Route::get('/ccbi', 'ccbi')->name('front.ccbi');
    Route::get('/tnbc', 'tnbc')->name('front.tnbc');
});
Route::prefix('front')->controller(ParishPriestController::class)->group(function () {
    Route::get('/vicariate', 'vicariate')->name('front.vicariate');
    Route::get('/parish-statistis', 'parish_statistis')->name('front.parish_statistis');
    Route::get('/parish', 'parish')->name('front.parish');
    Route::get('/shrine', 'shrine')->name('front.shrine');
    Route::get('/area', 'area')->name('front.area');
    Route::get('/obituary', 'obituary')->name('front.obituary');
    Route::get('/retired-priest', 'retired_priest')->name('front.retired_priest');
    Route::get('/parish-priest', 'parish_priest')->name('front.parish_priest');
    Route::get('/religious-priest', 'religious_priest')->name('front.religious_priest');
    Route::get('/religious-sister', 'religious_sister')->name('front.religious_sister');
    Route::get('/religious-brother', 'religious_brother')->name('front.religious_brother');
    Route::get('/religious-congregation', 'religious_congregation')->name('front.religious_congregation');
});
Route::prefix('front')->controller(AdministrationController::class)->group(function () {
    Route::get('/diocesan-curia', 'diocesan_curia')->name('front.diocesan_curia');
    Route::get('/college-consulators', 'college_consulators')->name('front.college_consulators');
    Route::get('/finance-committe', 'finance_committe')->name('front.finance_committe');
    Route::get('/diocesan-senate', 'diocesan_senate')->name('front.diocesan_senate');
    Route::get('/educational-committee', 'educational_committee')->name('front.educational_committee');
    Route::get('/formation-council', 'formation_council')->name('front.formation_council');
    Route::get('/project-commitee', 'project_commitee')->name('front.project_commitee');
    Route::get('/pastoral-commissions', 'pastoral_commissions')->name('front.pastoral_commissions');
    Route::get('/diocesan-society', 'diocesan_society')->name('front.diocesan_society');
    Route::get('/social-service', 'social_service')->name('front.social_service');
    Route::get('/catholic-centre', 'catholic_centre')->name('front.catholic_centre');
    Route::get('/transfer-list', 'transfer_list')->name('front.transfer_list');
});
Route::prefix('front')->controller(OrganizationController::class)->group(function () {
    Route::get('/diocesan-college', 'diocesan_college')->name('front.diocesan_college');
    Route::get('/religious-college', 'religious_college')->name('front.religious_college');
     Route::get('/diocesan-school', 'diocesan_school')->name('front.diocesan_school');
    Route::get('/religious-school', 'religious_school')->name('front.religious_school');
    Route::get('/hospital', 'hospital')->name('front.hospital');
    Route::get('/home_age', 'home_age')->name('front.home_age');
    Route::get('/orphanages', 'orphanages')->name('front.orphanages');


});
