<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Auth\LoginController;

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
Route::redirect('/', '/en');
// Route::get('gueglogin', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('gueglogin', [LoginController::class, 'login']);
// Auth::routes();

Route::group(['prefix' => '{language}', 'middleware' => ['switchlang']], function(){
    Route::get('/', [FrontController::class, 'index'])->name('index');
});

Route::post('/sendmessage', [FrontController::class, 'store'])->name('storeMessage');






// Authentication Routes...
// Route::get('gueglogin', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('logout',[LoginController::class, 'logout'])->name('logout');
// Route::get('/guegdash', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/switch/{lang}', [FrontController::class, 'switchLang'])->name('switch');

// Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');



