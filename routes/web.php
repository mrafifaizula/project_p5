<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JurusanController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
    Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
    Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
    Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
    Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
    Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['prefix' => 'admin', 'middleware ' => ['auth']], function () {
    Route::resource('eskul', EskulController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('informasi', InformasiController::class);
    Route::resource('industri', IndustriController::class);
    Route::resource('contact', ContactController::class);
});

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// panggil eskul
Route::get('/user', [IndexController::class, 'index']);

Route::get('index', function () {

    return view('index');
});
