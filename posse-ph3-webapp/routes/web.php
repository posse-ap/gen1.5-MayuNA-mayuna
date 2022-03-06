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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'home'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/webapp', 'WebappController@webapp')->name('webapp_home');
});

//webapp

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/testmail', function () {
    Mail::to('test@example.com')->send(new TestMail);
    return 'メール送信完了';
});
