<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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
})->name('main.index');

//Route::get('/posts', 'PostController@index')->name('posts.index');
//Route::get('/posts/create', 'PostController@create')->name('posts.create');

//Route::resource('posts', PostController::class);
//Route::resource('about', AboutController::class);
//Route::resource('contacts', ContactController::class);
Route::resources([
    'posts' => PostController::class,
    'about' => AboutController::class,
    'contacts' => ContactController::class
]);


