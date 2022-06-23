<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\FirstController;

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

Route::get('/test1', function () {
    return 'welcome';
});

//Route Parameters

Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/show-string/{id?}', function () {
    return 'welcome';
}) ->name ('b');

//Route Name

///// Controllers ///////
//Route::get('/first','FirstController@showString');
Route::get('hello', 'FirstController@getIndex');

//Route::get('index', [FirstController::class, 'getIndex']);
/////////////////////////////////////////////////////////////////////////

Route::get('/landing', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
