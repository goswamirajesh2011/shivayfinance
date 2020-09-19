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

/*Route::get('/', function () {
    //return view('welcome');
    return view('index');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
		'namespace'=>'Admin',
		'prefix' => 'admin', //It is added in url
		'as' => 'admin.', //It is added in route
		'middleware' => ['auth']
	], function(){
		Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
		Route::resource('slider', 'SliderController');
		Route::resource('loan', 'LoanController');
		Route::resource('partner', 'PartnerController');
		Route::resource('page', 'PageController');
		Route::post('page/slugExist/{slug?}', 'PageController@slugExist')->name('page.slugExist');
});

Route::group([
		'namespace'=>'Front',
		'as'=>'front.',
	], function(){
		Route::get('/', 'FrontController@index')->name('index');
		Route::get('page/{slug?}', 'PageController@show')->name('page');
		Route::get('applyloan/{loanid}', 'FrontController@applyloan')->name('applyloan');
		Route::post('storeloan', 'FrontController@storeloan')->name('storeloan');
		Route::get('contact', 'ContactController@contact')->name('contact');
		Route::post('sentcontact', 'ContactController@sentcontact')->name('sentcontact');
});