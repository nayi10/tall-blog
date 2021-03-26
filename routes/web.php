<?php

use App\Http\Livewire\CategoryPosts;
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

Route::get('{slug}', function ($slug) {
    return view('welcome');
})->name('post-detail');

Route::get('categories/{category}', CategoryPosts::class)->name('category');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:sanctum'], function () {
	Route::get('/', function () {
    	return view('dashboard');
    })->name('dashboard');

    Route::get('post/add', function () {
    	return view('dashboard');
    });

    Route::get('category/add', function () {
    	return view('dashboard');
    });
});
