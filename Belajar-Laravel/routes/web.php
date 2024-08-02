<?php

use App\Livewire\User;
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
Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('users', \App\Livewire\Users\Index::class)->name('users');
Route::get('users/create', \App\Livewire\Users\Create::class)->name('users.create');
// Route::put('users/edit/{id}', \App\Http\Livewire\Users\Edit::class)->name('users.edit');
Route::get('users/{user}', \App\Livewire\Users\Show::class)->name('users.show');

// Route::livewire('/', 'post.index')->name('post.index');
// Route::livewire('/create', 'post.create')->name('post.create');
// Route::livewire('users/edit/{id}', 'users.edit')->name('users.edit');