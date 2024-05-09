<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OpportunityController;

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
//about start
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/outcomes', [FrontController::class, 'outcomes'])->name('outcomes');
Route::get('/capacity_development', [FrontController::class, 'c_development'])->name('c_development');
//about ends
//projects start
Route::get('/activities', [ProjectController::class, 'activities'])->name('activities');
Route::get('/achievements', [ProjectController::class, 'achievements'])->name('achievements');
Route::get('/impacts', [ProjectController::class, 'impacts'])->name('impacts');
Route::get('/workshops_training', [ProjectController::class, 'workshops_training'])->name('workshops_training');
//projects ends
Route::get('/news', [FrontController::class, 'news'])->name('news');
//opportunities start
Route::get('/opportunities', [OpportunityController::class, 'opportunities'])->name('opportunities');
Route::get('/scholarship', [OpportunityController::class, 'scholarship'])->name('scholarship');
//opportunity ends 
Route::get('/contacts', [FrontController::class, 'contact'])->name('contact');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');


