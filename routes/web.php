<?php

use App\Http\Controllers\PostContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/posts',[PostContoller::class, 'index'])->name('posts.index');
// this is the route for the index page

Route::get('/posts/create',[PostContoller::class, 'create'])->name('posts.create');
// this is the route for the create page

Route::post('/posts',[PostContoller::class, 'store'])->name('posts.store');
// this is the route for the store page

Route ::get('/posts/{id}',[PostContoller::class, 'show'])->name('posts.show');
// this is the route for the show page

Route::get('/posts/{id}/edit',[PostContoller::class, 'edit'])->name('posts.edit');
// this is the route for the edit page

Route::put('/posts/{id}',[PostContoller::class, 'update'])->name('posts.update');
// this is the route for the update page

Route::delete('/posts/{id}',[PostContoller::class, 'destroy'])->name('posts.destroy');
// this is the route for the destroy page






