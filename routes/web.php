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

// Route::get('/', function () {
//     return view('home.index',[]);
// })->name('home.index'); 

// Route::get('/contact', function () {
//     return view('home.contact',[]);
// })->name('home.contact');


Route::view('/', 'home.index')->name('home.index'); 
Route::view('/contact', 'home.contact')->name('home.contact');

Route::get('/posts/{id}',function($id){
    $posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'is_new'=>true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new'=>false
    ]
];

    abort_if(!isset($posts[$id]),404);
    return view('post.show', ['post' => $posts[$id]]);
});








// Route::get('/post/{id}',function($id){
//     return 'Blog post' .$id;
// })->name('post.show');

// Route::get('/recent-posts/{days_ago?}', function($daysAgo = 28){
//     return 'Post from ' .$daysAgo. ' days ago.';
// })->name('post.recent.index');