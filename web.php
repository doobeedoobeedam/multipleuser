<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return redirect('blog');
// });

// Route::resource('blog', BlogController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin', function () { 
    return view('admin'); 
})->middleware('checkRole:admin');

Route::get('author', function () { 
    return view('author'); 
})->middleware(['checkRole:admin,author']);

Route::get('reader', function () { 
    return view('reader'); 
})->middleware(['checkRole:admin,reader']);



// Route::get('author','AuthorController@index')->name('author')->middleware(['checkRole:admin,author']);












// Route::get('/', [PostController::class, 'index']);



// Route::get('/about', function () {
//     return view('about', [
//         "name" => "Kusuma Wecitra",
//         "email" => "citrac491@gmail.com",
//         "image" => "https://tse4.mm.bing.net/th?id=OIP.Oz9DM9IoS1FS0tmgH7T1iQHaHa&pid=Api&P=0&w=300&h=300"
//     ]);
// });

// Route::get('/posts', function () {
//     return view('posts', [
//         "posts" => Blog::all()
//     ]);
// });

// Route::get('posts/{slug}', function ($slug){
//     return view('post', [
//         "post" => Blog::find($slug)
//     ]);
// });
