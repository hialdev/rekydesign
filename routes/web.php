<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Route::get('/clear-view', function() {
    $exitCode = Artisan::call('view:cache');
    return 'DONE Clear View Cache'; //Return anything
});

Route::get('/',[IndexController::class,'index'])->name('home');

Route::get('service',[ServiceController::class,'index'])->name('service');
Route::get('service/{slug}',[ServiceController::class,'show'])->name('service.show');

Route::get('portofolio',[PortofolioController::class,'index'])->name('portofolio');
Route::get('portofolio/{slug}',[PortofolioController::class,'show'])->name('portofolio.show');

Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact',[ContactController::class,'send'])->name('contact.send');


Route::group(['prefix' => 'santuy'], function () {
    Voyager::routes();
});
