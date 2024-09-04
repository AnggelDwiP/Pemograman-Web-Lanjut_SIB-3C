<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

//Praktikum 1
//1
// Route::get('/hello', function () {
//     return 'Hello World';
// });

//2
// Route::get('/world', function () {
//     return 'World';
// });

// //3
// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// //4
// Route::get('/about', function () {
//     return 'Anggel Dwi Pramita (2241760019)';
// });

// //5
// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya '.$name;
// });

// //6
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// //7
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// //8
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama Saya '.$name;
// });

// //9
// Route::get('/user/{name?}', function ($name='Anggel') {
//     return 'Nama Saya '.$name;
// });

//Praktikum 2
// //1
// Route::get('/hello', [WelcomeController::class,'hello'] );

// //2
// Route::get('/index', [PageController::class,'index'] );
// //3
// Route::get('/about', [PageController::class,'about'] );
// //4
// Route::get('/articles/{id}', [PageController::class,'articles'] );

// //5
// Route::get('/index', [HomeController::class,'index'] );
// //6
// Route::get('/about', [AboutController::class,'about'] );
// //7
// Route::get('/articles/{id}', [ArticleController::class,'articles'] );

//8
Route::resource('photos', PhotoController::class); 
//9
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 

Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' ]); 


//Praktikum 3
//1