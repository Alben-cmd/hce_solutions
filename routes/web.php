<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/outcomes', [FrontController::class, 'outcomes'])->name('outcomes');
//projects start
Route::get('/activities', [ProjectController::class, 'activities'])->name('activities');
Route::get('/achievements', [ProjectController::class, 'achievements'])->name('achievements');
Route::get('/impacts', [ProjectController::class, 'impacts'])->name('impacts');
Route::get('/workshops_training', [ProjectController::class, 'workshops_training'])->name('workshops_training');
//projects ends
Route::get('/news', [FrontController::class, 'news'])->name('news');

