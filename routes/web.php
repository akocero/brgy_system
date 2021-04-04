<?php

use App\Http\Controllers\BlotterController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseholdController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\ResolutionController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/main', function () {
    return view('admin_lte.starter');
});

Route::resource('residents', ResidentController::class)->except('destroy');
Route::resource('businesses', BusinessController::class)->except('destroy');
Route::resource('blotters', BlotterController::class)->except('destroy');
Route::resource('resolutions', ResolutionController::class)->except('destroy');
Route::view('residents/print/view', 'residents.view_print');
Route::apiResource('households', HouseholdController::class)->except('destroy');
Route::apiResource('officials', OfficialController::class)->except('destroy');
// Route::get('households', [HouseholdController::class, 'index'])->name('households.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
