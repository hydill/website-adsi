<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//closure

    Route::get('/cctv', 'App\Http\Controllers\cctvController@cctv_page');
    Route::get('/portal', 'App\Http\Controllers\portalController@portal_page');
    Route::get('/forum', 'App\Http\Controllers\forumController@forum_page');
    Route::get('/callcenter', 'App\Http\Controllers\calcenController@calcen_page');
    Route::get('/register', 'App\Http\Controllers\registerController@regis_page');
    Route::post('/register/cctv', 'App\Http\Controllers\loginController@store');
    Route::get('/callcenter', 'App\Http\Controllers\calcenController@calcen_page');
    Route::get('/login', 'App\Http\Controllers\loginController@login_page');
    Route::post('/login/cctv', 'App\Http\Controllers\loginController@login');
    Route::get('/cctv/masuk1', 'App\Http\Controllers\loginController@cctv_masuk1');
    Route::get('/cctv/masuk2', 'App\Http\Controllers\loginController@cctv_masuk2');
    Route::get('/cctv/masuk3', 'App\Http\Controllers\loginController@cctv_masuk3');


//method

//parameter
Route::get('/profil/{username}', function ($username) {
    return $username;
});

//naming
