<?php

use Illuminate\Support\Facades\Route;
use Snowfire\Beautymail\Beautymail;

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
Route::get('/mail/welcome/{typeId}', 'MailController@welcome')->where(['typeId' => '[0-9]+']);
Route::get('/mail/test', 'MailController@test');