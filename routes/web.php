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

// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <p>This is sample page.</p>
// </body>
// </html>
// EOF;
//
// Route::get('hello', function() use ($html) {
//     return $html;
// });

// ルートパラメータの利用

// Route::get('/hello/{msg}', function($msg) {
//     return <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <p>This is sample page.</p>
// <p>${msg}</p>
// </body>
// </html>
// EOF;
// });

// Controller の利用

// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::get('hello', function () {
//     return view('hello.index');
// });
// Route::get('hello', 'App\Http\Controllers\HelloController@indexWithQueryString');
// Route::get('hello', 'App\Http\Controllers\HelloController@index')
//     ->middleware('hello'); // グローバルミドルウェアに登録されているのでこれはなくてもいい。グループミドルウェアの例
//
//     ->middleware(\App\Http\Middleware\HelloMiddleware::class);
Route::get('hello', 'App\Http\Controllers\UseDBController@index');
Route::get('person', 'App\Http\Controllers\PersonController@index');
Route::get('person/find', 'App\Http\Controllers\PersonController@find');
Route::post('person/find', 'App\Http\Controllers\PersonController@search');
Route::get('person/add', 'App\Http\Controllers\PersonController@add');
Route::post('person/add', 'App\Http\Controllers\PersonController@create');
Route::get('person/edit', 'App\Http\Controllers\PersonController@edit');
Route::post('person/edit', 'App\Http\Controllers\PersonController@update');
Route::get('person/del', 'App\Http\Controllers\PersonController@delete');
Route::post('person/del', 'App\Http\Controllers\PersonController@remove');
// Route::post('hello', 'App\Http\Controllers\HelloController@post');
Route::get('hello/show', 'App\Http\Controllers\UseDBController@show');
Route::get('hello/other', 'App\Http\Controllers\HelloController@other');
Route::get('hello/rest', 'App\Http\Controllers\HelloController@rest');
// Route::get('/hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@indexWithRouteParams');
Route::get('single', 'App\Http\Controllers\SingleActionController');
Route::get('reqres', 'App\Http\Controllers\UseRequestResponseController@index');

Route::get('board', 'App\Http\Controllers\BoardController@index');
Route::get('board/add', 'App\Http\Controllers\BoardController@add');
Route::post('board/add', 'App\Http\Controllers\BoardController@create');

Route::resource('rest', 'App\Http\Controllers\RestappController');

Route::get('hello/session', 'App\Http\Controllers\HelloController@ses_get');
Route::post('hello/session', 'App\Http\Controllers\HelloController@ses_put');
