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

/* Routes for admin*/
Route::group([
	'namespace' => 'Admin',
	'prefix' => 'admin',
	'as' => 'admin.'
], function(){
	Route::get('login', 'AdminController@login')->name('login');
	Route::post('auth', 'AdminController@adminAuth')->name('auth');
	//Route::get('register', 'AdminController@register')->name('register');
	Route::post('store', 'AdminController@store')->name('store');
	Route::post('logout', 'AdminController@logout')->name('logout');
	/* Routes for authenticated admin*/
	Route::group([
		'middleware' => ['auth:admin']
	], function(){
		Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
		Route::resource('slider', 'SliderController');
		Route::resource('loan', 'LoanController');
		Route::resource('partner', 'PartnerController');
		Route::resource('page', 'PageController');
		Route::post('page/slugExist/{slug?}', 'PageController@slugExist')->name('page.slugExist');
		Route::get('settings', 'AdminController@settings')->name('settings');
		Route::get('settings/edit', 'AdminController@settings_edit')->name('settings.edit');
		Route::put('settings/store', 'AdminController@settings_store')->name('settings.store');
		Route::get('user/loan/requests', 'AdminController@user_loan_requests')->name('user.loan.requests');
	});
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