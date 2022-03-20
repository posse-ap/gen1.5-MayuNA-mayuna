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

// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample pageyぴょ.
//     </p></body></html>';
// });

// Route::get('hello/{msg?}', function ($msg='no message.') {
//    $html = <<<EOF
//    <html>
//    <head>
//    <title>Hello</title>
//    <style>
//    body {font-size:16pt; color:#999; }
//    h1{ font-size:100pt; text-align:right; color:#eeee;
//    margin:-40px 0px -50px 0px; }
//    </style>
//    </head>
//    <body>
//      <h1>Hello</h1>
//      <p>{$msg}</p>
//      <p>これはサンプルページ</p>
//    </body>
//    </html>
//    EOF;

//    return $html;

// });

// Route::get('hello/{id?}/{pass?}','HelloController@index');

// Route::get('hello', 'HelloController@index');
// Route::get('hello/other','HelloController@other');

Route::get('/quiz', 'CrazyController@index');

Route::get('/quiz/{place_id}', 'CrazyController@quiz')->name('quiz');

// Route::get('/login', 'CrazyController@login');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/quizadd', 'HomeController@postIndex');
Route::post('/add', 'HomeController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/edit', 'CrazyController@edit');

Route::get('/all', 'CrazyController@all');

Route::post('/edit', 'CrazyController@add');

Route::delete('edit/destroy/{id}', 'CrazyController@destroy');

Route::get('/edit/{id}', 'CrazyController@editTitle');

Route::patch('edit/update/{id}', 'CrazyController@update');




//choiceぞーん

Route::get('/edit/choice/{place_id}', 'CrazyController@editchoice')->name('editchoice');

Route::delete('edit/choice/destroy/{choice_id}', 'CrazyController@choicedestroy');

Route::patch('edit/choice/update/{choice_id}', 'CrazyController@choiceupdate');

Route::get('edit/choice/each/{choice_id}', 'CrazyController@editEachChoice');

// Route::group(['prefix' => 'choice'], function () {
//     Route::get('new', 'CrazyController@new_index'); //入力
//     Route::patch('new','CrazyController@new_confirm'); //確認
//     Route::post('new', 'CrazyController@new_finish'); //完了
//   });




Route::post('/edit/choice/{place_id}', 'CrazyController@choiceadd');

Route::post('edit/img/{question_id}', 'CrazyController@store')->name('question_id');

Route::get('edit/choice/add/{question_id}', 'CrazyController@addChoice');

Route::post('edit/question/{place_id}', 'CrazyController@questionadd')->name('questionadd');

