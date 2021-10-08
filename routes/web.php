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

use App\Http\Livewire\Post;
Route::get('post',Post::class)->name('post');
use App\Http\Livewire\User;
Route::get('user',User::class)->name('user');
use App\Http\Livewire\Home;
Route::get('home/{name?}',Home::class)->name('home');

use App\Http\Livewire\Form;
Route::get('form',Form::class)->name('form');
use App\Http\Livewire\Action;
Route::get('action',Action::class)->name('action');
