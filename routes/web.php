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
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testjoin', function () {
    $a = User::all();
    foreach($a as $m){
        echo $m->messages[Auth::id()]->message;
    };
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mess/{ourid}', 'HomeController@getMess');
Route::post('/mess', 'HomeController@sendMess');