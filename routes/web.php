<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

use App\Http\Controllers\Admin\ProgrameController;
//use App\Http\Controllers\Admin\CallToActionController;
use App\Http\Controllers\Admin\TrainingClassController;
use App\Http\Controllers\Admin\ClassScheduleController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\Admin\SiteSettingController;

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

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::post('/contactus', [FrontendController::class, 'contact_us_submit'])->name('frontend.contactus');

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

	Route::get('dashboard', function () {

		return view('backend.dashboard');

	})->name('admin.dashboard');

	Route::get('/programes', [ProgrameController::class, 'index'])->name('programes.index');

	Route::resource('programes',	   ProgrameController::class);
	Route::resource('trainingclasses', TrainingClassController::class);
	Route::resource('classschedules',  ClassScheduleController::class);
	Route::resource('trainers',	   	   TrainerController::class);
	Route::resource('sitesettings',	   SiteSettingController::class);

	Route::get('/logout',    [ProgrameController::class, 'logout'])->name('admin.logout');




});