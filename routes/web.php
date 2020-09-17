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

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/post/{id}', function ($id) {
//    return view('post')->with('id',$id);
//});

//Route::get('/post/{slug?}', function ($slug=null) {
//    echo 'optional '.$slug;
//})->where('slug', '[A-Za-z]+');

Route::match(['get', 'post'], '/category', function () {
    echo 'get method used in category';
});

Route::redirect('/here', '/contact',301);
//
//Route::get('post/profile/{id}', function ($id) {
//    return view('post');})->name('profile');

Route::prefix('admin')->group(function () {
    Route::get('post', function () {
        echo 'post';
    });
     Route::get('profile', function () {
         echo 'profile';
     });

});
