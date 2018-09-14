<?php

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

Route::group(array('domain' => '{subdomain}.dippinno.hr:8000'), function () {

    Route::get('/', function ($subdomain) {
        dd($subdomain);
    });
});
// index zone
Route::view('/', 'index')->name('index');
Route::view('/register', 'register')->name('register');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');


// API
Route::post('/api/apiCheckCompanyExist.is', [
    'as' => 'api.apiCheckCompanyExist',
    'uses' => 'ApiController@apiCheckCompanyExist']);
