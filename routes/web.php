<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'HomeController@index')->name('/');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('callback/{provider}', 'FacebookLoginController@runCallback');
Route::get('auth/{provider}', 'FacebookLoginController@redirectFacebook');
//only when logged in
Route::group(['middleware' => ['auth']], function() {

    Route::get('payment','PayPalController@payment')->name('payment');;
    Route::get('cancel','PayPalController@cancel')->name('payment.cancel');
    Route::get('payment/success','PayPalController@sucess')->name('payment.success');
    Route::get('instagram/{request}', 'InstagramController@getInstagramPublicFeed')->name('instagram');
});



