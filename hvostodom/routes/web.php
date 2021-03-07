<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/find', [\App\Http\Controllers\PetController::class, 'find'])->name('find');
Route::get('/stories', [\App\Http\Controllers\StoriesController::class, 'showStories'])->name('stories');
Route::get('/stories/{story_alias}', [\App\Http\Controllers\StoriesController::class, 'storyDetails'])->name('storyDetails');
Route::get('/{pet_alias}', [\App\Http\Controllers\PetController::class, 'showPet'])->name('showPet');
Route::get('/stories/{pet_alias}', [\App\Http\Controllers\PetController::class, 'showPet'])->name('showPet');

