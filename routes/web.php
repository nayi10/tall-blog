<?php

use App\Http\Livewire\CategoryPosts;
use App\Http\Livewire\Dashboard\FeaturedImageUpload;
use App\Http\Livewire\Dashboard\NewPost;
use App\Http\Livewire\Detail;
use App\Http\Livewire\ShowPosts;
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

Route::get('/', ShowPosts::class)->name('home');

Route::get('categories/{category}', CategoryPosts::class)->name('category');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('post/add', NewPost::class)->name('new-post');

    Route::get('post/upload/{id}', FeaturedImageUpload::class)->name('upload-featured-image');

    Route::get('post/edit/{id}', function ($id) {
        return view('dashboard');
    })->name('edit-post');
});

Route::get('{slug}', Detail::class)->name('post-detail');
