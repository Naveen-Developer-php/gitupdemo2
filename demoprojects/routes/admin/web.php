<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DioceseController;
use App\Http\Controllers\admin\ConferenceController;
use App\Http\Controllers\admin\ParishController;





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
});

Route::get('clearcache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "All Cache Cleared!";
});
