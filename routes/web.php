<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidentController;
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

Route::resource('residents', ResidentController::class);
// Route::post('residents/search', [ResidentController::class, 'search'])->name('residents.search');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
