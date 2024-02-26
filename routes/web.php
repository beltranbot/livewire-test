<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ListPosts;
use App\Livewire\ShowPost;
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

Route::get('/posts', ListPosts::class);
Route::get('/create-post', CreatePost::class);
Route::get('/posts/{id}', ShowPost::class);

Route::get('/todo-list', TodoList::class);
