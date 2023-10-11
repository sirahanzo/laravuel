<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('device-info',[HomeController::class,'info'])->name('device-info');
Route::post('save-network',[SettingController::class, 'saveNetwork'])->name('save-network');
Route::post('save-site-info',[SettingController::class,'saveSiteInfo'])->name('save-site-info');

Route::get('test',function (){
    return view('test');
});
