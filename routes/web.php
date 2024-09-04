<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//1
Route::get('/hello', function () {
    return 'Hello World';
});

//2
Route::get('/world', function () {
    return 'World';
});

//3
Route::get('/', function () {
    return 'Selamat Datang';
});

//4
Route::get('/about', function () {
    return 'Anggel Dwi Pramita (2241760019)';
});

//5
Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
});

//6
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

//7
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});