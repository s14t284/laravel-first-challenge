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
Route::get('hello', 'App\Http\Controllers\HelloController@indexWithQueryString');
Route::get('hello/{id?}', 'App\Http\Controllers\HelloController@index');
Route::get('hello/other', 'App\Http\Controllers\HelloController@other');
Route::get('/hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@indexWithRouteParams');
Route::get('single', 'App\Http\Controllers\SingleActionController');
Route::get('reqres', 'App\Http\Controllers\UseRequestResponseController@index');
