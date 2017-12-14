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
      return redirect('home');
});

//stripe
Route::post ( '/', function (Request $request) {
	\Stripe\Stripe::setApiKey ( 'base64:XiuYG0uPYhGxR34WFMs1JSNw+MGP9nn0hZzotIzikBM=' );
	try {
		\Stripe\Charge::create ( array (
				"amount" => $request->input('hiddenammount')* 100,
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

Route::group(['middleware'=>'admin', 'prefix'=>'admin'],function (){

Route::get('/adminHome', 'AdminAuth\LoginController@getAdminHome')->name('getAdminHome');

 Route::get('/editExperts', 'AdminController@getEditExperts')->name('getEditExperts');
 Route::get('/editPartners', 'AdminController@getEditPartners')->name('getEditPartners');
 Route::get('/editWeeks', 'AdminController@getEditWeeks')->name('getEditWeeks');
 Route::get('/editWeek/{wid}', 'AdminController@getEditWeek')->name('getEditWeek');
 Route::get('/generateAccount', 'AdminController@getGenerateAccount')->name('getGenerateAccount');
 Route::get('/editSubscriptions', 'AdminController@getEditSubscriptions')->name('getEditSubscriptions');

Route::post('/postGenerateAccount', 'AdminController@postGenerateAccount')->name('postGenerateAccount');
Route::post('/postEditSubscriptions', 'AdminController@postEditSubscriptions')->name('postEditSubscriptions');


Route::post('/expertEdit', 'AdminController@expertEdit')->name('expertEdit');
Route::post('/partnerEdit', 'AdminController@partnerEdit')->name('partnerEdit');
Route::get('/deleteExpert/{eid}', 'AdminController@deleteExpert')->name('deleteExpert');
Route::get('/deletePartner/{pid}', 'AdminController@deletePartner')->name('deletePartner');
Route::get('/addExpert', 'AdminController@addExpert')->name('addExpert');
Route::get('/addPartner', 'AdminController@addPartner')->name('addPartner');

Route::get('/changePassword', 'AdminController@getAdminChangePassword')->name('getAdminChangePassword');
Route::post('/postChangePassword', 'AdminController@postAdminChangePassword')->name('postAdminChangePassword');
Route::post('/editWeek', 'AdminController@postEditWeek')->name('postEditWeek');

});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@getAdminLogin')->name('getAdminlogin');
  Route::post('/login', 'AdminAuth\LoginController@postAdminLogin')->name('postAdminLogin');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  
  Route::get('/register', 'AdminAuth\RegisterController@getAdminRegister')->name('getAdminRegister');
  Route::get('/confirmUser/{token}', 'HomeController@confirmUser')->name('confirmUser');
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

Route::get('/changePassword', 'UserController@getChangePassword')->name('getChangePassword');
Route::post('/postChangePassword', 'UserController@postChangePassword')->name('postChangePassword');
Route::post('/sendContactMail', 'HomeController@sendContactMail')->name('sendContactMail');


// Registration Routes...
Route::get('userRegister', 'Auth\RegisterController@getUserRegister')->name('getUserRegister');
Route::post('userRegister', 'Auth\RegisterController@postUserRegister')->name('postUserRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/weeks', 'WeekController@getWeeks')->name('getWeeks')->middleware('auth');

Route::get('/subscriptions' , 'SubscriptionController@getSubcriptions')->name('getSubscriptions');

// Route::get('/mycampus', 'WeekController@getMyCampus')->name('getMyCampus')->middleware('auth');

Route::group(['middleware'=>['auth','subscription']],function (){
Route::get('/mycampus', 'WeekController@getMyCampus')->name('getMyCampus');
Route::get('/week/{wid}', 'WeekController@getWeek')->name('getSpecificWeek')->middleware('weekcheck');

});
route::post('/submitSubscription', 'SubscriptionController@submitSubscription')->name('submitSubscription');
route::post('/submitDonation', 'SubscriptionController@submitDonation')->name('submitDonation');



Route::post('/uploadImage', 'WeekController@uploadImage')->name('uploadImage');
Route::post('/uploadVideo', 'WeekController@uploadVideo')->name('uploadVideo');
Route::post('/uploadAudio', 'WeekController@uploadAudio')->name('uploadAudio');
Route::post('/uploadDocument', 'WeekController@uploadDocument')->name('uploadDocument');
Route::post('/embededVideo', 'WeekController@embededVideo')->name('embededVideo');

Route::get('/getDocument/{wid}', 'WeekController@getDocument')->name('getDocument');

Route::get('/subscribe', 'UserController@subscribe')->name('postSubscribe');
Route::get('/subCheck', 'UserController@subCheck')->name('subCheck');
Route::get('/weekCheck', 'UserController@weekCheck')->name('weekCheck');



