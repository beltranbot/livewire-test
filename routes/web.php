<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ListPosts;
use App\Livewire\ShowPost;
use App\Livewire\UpdatePost;
use App\Livewire\TodoList;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::prefix('/posts')->group(function () {
    Route::get('/', ListPosts::class);
    Route::get('/create', CreatePost::class);
    Route::get('/{post}/edit', UpdatePost::class);
    Route::get('/{id}', ShowPost::class);
});

Route::get('/todo-list', TodoList::class);
