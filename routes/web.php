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
use Illuminate\Http\Request;

Route::get('/', function () { 
    return view('home');
});

//stripe
Route::post ( '/', function (Request $request) {
	\Stripe\Stripe::setApiKey ( 'base64:XiuYG0uPYhGxR34WFMs1JSNw+MGP9nn0hZzotIzikBM=' );
	try {
		\Stripe\Charge::create ( array (
				"amount" => 300 * 100,
				"currency" => "usd",
				"source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
				"description" => "Test payment." 
		) );
		Session::flash ( 'success-message', 'Payment done successfully !' );
		return Redirect::back ();
	} catch ( \Exception $e ) {
		Session::flash ( 'fail-message', "Error! Please Try again." );
		return Redirect::back ();
	}
} );


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeOld', 'HomeController@homeOld')->name('homeOld');

Route::get('/logout', 'HomeController@logout')->name('logout');

Route::group(['middleware'=>'admin'],function (){
Route::get('/adminHome', 'AdminAuth\LoginController@getAdminHome')->name('getAdminHome');

});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@getAdminLogin')->name('getAdminlogin');
  Route::post('/login', 'AdminAuth\LoginController@postAdminLogin')->name('postAdminLogin');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  
  Route::get('/register', 'AdminAuth\RegisterController@getAdminRegister')->name('getAdminRegister');
  Route::post('/postAdminRegister', 'AdminAuth\RegisterController@postAdminRegister')->name('postAdminRegister');
  

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


// Authentication Routes...
Route::get('userLogin', 'Auth\LoginController@getUserLogin')->name('getUserLogin');
Route::post('userLogin', 'Auth\LoginController@postUserLogin')->name('postUserLogin');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('userRegister', 'Auth\RegisterController@getUserRegister')->name('getUserRegister');
Route::post('userRegister', 'Auth\RegisterController@postUserRegister')->name('postUserRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/weeks', 'WeekController@getWeeks')->name('getWeeks')->middleware('auth');
Route::get('/week/{wid}', 'WeekController@getWeek')->name('getSpecificWeek')->middleware('auth');

Route::post('/uploadImage', 'WeekController@uploadImage')->name('uploadImage');
Route::post('/uploadVideo', 'WeekController@uploadVideo')->name('uploadVideo');
Route::post('/uploadAudio', 'WeekController@uploadAudio')->name('uploadAudio');
Route::post('/uploadDocument', 'WeekController@uploadDocument')->name('uploadDocument');

Route::get('/getDocument/{wid}', 'WeekController@getDocument')->name('getDocument');

Route::get('/subscribe', 'UserController@subscribe')->name('postSubscribe');
Route::get('/subCheck', 'UserController@subCheck')->name('subCheck');

Route::get('/editWeeks', 'AdminController@getEditWeeks')->name('getEditWeeks');

Route::get('/editExperts', 'AdminController@getEditExperts')->name('getEditExperts');

Route::get('/editPartners', 'AdminController@getEditPartners')->name('getEditPartners');
