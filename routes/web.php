<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

Route::group(['namespace' => 'Post'], function () {
    Route::get('posts', 'IndexController')->name('posts.index');
    Route::get('posts/create', 'CreateController')->name('posts.create');
    Route::post('posts', 'StoreController')->name('posts.store');
    Route::get('posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('posts/{post}', 'UpdateController')->name('posts.update');
    Route::get('posts/{post}', 'ShowController')->name('posts.show');
    Route::delete('posts/{post}', 'DestroyController')->name('posts.destroy');
});

//Route::resources([
//    'about' => AboutController::class,
//    'contacts' => ContactController::class
//]);
Route::get('contacts', 'ContactController@index')->name('contacts.index');
Route::get('about', 'AboutController@index')->name('about.index');


