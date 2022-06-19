<?php

use App\Http\Controllers\CollectorController;
use App\Http\Controllers\LandingPageController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/dashboard', function () {
////    return view('dashboard');
////})->middleware(['auth'])->name('dashboard');
///

Route::get('/',[landingPageController::class,'getAllForHome'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('collectors',CollectorController::class);

    // crude way to use reuse landingPageController whether if the user is authenticated or not.
    // research about accessing the same view/controller with or without authentication
    Route::get('/dashboard',[landingPageController::class,'getAllForDashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
