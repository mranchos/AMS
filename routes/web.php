<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/macro/create', 'RegulacionController@create')->name('macro')->middleware('auth');
Route::post('/macro/store', 'RegulacionController@store' )->name('macro')->middleware('auth');
Route::delete('/macro/destroy/{id}', 'RegulacionController@destroy')->name('macro')->middleware('auth');

Route::get('/requi/{id}', 'RequisitoController@index_all')->name('requi')->middleware('auth');
Route::get('/requi/create/{id}', 'RequisitoController@create')->name('requi')->middleware('auth');
Route::post('/requi/create/store', 'RequisitoController@store' )->name('requi')->middleware('auth');
Route::get('/requi/destroy/{id}', 'RequisitoController@destroy')->name('requi')->middleware('auth');
Route::get('requi/cone/regu/requi/create/{id}', 'ConexionController@create')->name('cone')->middleware('auth');
Route::post('requi/cone/regu/requi/create/store', 'ConexionController@store' )->name('cone')->middleware('auth');

Route::get('/enti/create', 'EntidadController@create')->name('enti')->middleware('auth');
Route::post('/enti/store', 'EntidadController@store' )->name('enti')->middleware('auth');
Route::get('/enti/destroy/{id}', 'EntidadController@destroy')->name('enti')->middleware('auth');

Route::get('/perso/{id}', 'PersonaController@index_all')->name('perso')->middleware('auth');
Route::get('/perso/create/{id}', 'PersonaController@create')->name('perso')->middleware('auth');
Route::post('/perso/create/store', 'PersonaController@store' )->name('perso')->middleware('auth');
Route::get('/perso/destroy/{id}', 'PersonaController@destroy')->name('perso')->middleware('auth');


Route::get('/cone/regu/{id}', 'ConexionController@index_requi')->name('cone')->middleware('auth');
Route::get('/cone/regu/requi/{id}', 'ConexionController@index')->name('cone')->middleware('auth');
Route::get('/cone/regu/requi/create/{id}', 'ConexionController@create')->name('cone')->middleware('auth');
Route::post('/cone/regu/requi/create/store', 'ConexionController@store' )->name('cone')->middleware('auth');
Route::get('/cone/regu/requi/destroy/{id}', 'ConexionController@destroy')->name('cone')->middleware('auth');


Route::get('/eva/create', 'EvaluacionController@create')->name('eva')->middleware('auth');
Route::get('/eva/destroy/{id}', 'EvaluacionController@destroy')->name('eva')->middleware('auth');
Route::post('/eva/store', 'EvaluacionController@store' )->name('eva')->middleware('auth');
Route::get('/eva/ejecucion/{id}', 'EvaluacionController@ejecucion' )->name('eva')->middleware('auth');
Route::post('/eva/ejecucion/send', 'EvaluacionController@send' )->name('eva')->middleware('auth');

Route::get('/indi/{id}', 'IndicadorController@show')->name('indi')->middleware('auth');

Route::get('/ctr/destroy/{id}', 'ControlController@destroy')->name('ctr')->middleware('auth');
Route::get('/ctr/create', 'ControlController@create')->name('ctr')->middleware('auth');
Route::post('/ctr/store', 'ControlController@store' )->name('ctr')->middleware('auth');

Route::get('/acc/{id}', 'AccionController@create')->name('acc')->middleware('auth');
Route::post('/acc/store', 'AccionController@store' )->name('acc')->middleware('auth');
Route::get('/show/{id}', 'AccionController@show')->name('acc')->middleware('auth');
Route::get('/show/finish/{id}', 'AccionController@finish')->name('acc')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

//	Route::get('macro', function () {
//		return view('pages.macro');
//	})->name('macro');

	Route::get('macro','RegulacionController@index')->name('macro');
	Route::get('requi','RequisitoController@index_blank')->name('requi');
	Route::get('enti','EntidadController@index')->name('enti');
	Route::get('perso','PersonaController@index')->name('perso');
	Route::get('ctr','ControlController@index')->name('ctr');
	Route::get('cone','ConexionController@index_regu')->name('cone');
	Route::get('eva','EvaluacionController@index')->name('eva');
	Route::get('indi','IndicadorController@index')->name('indi');
	Route::get('acc','AccionController@index')->name('acc');

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

