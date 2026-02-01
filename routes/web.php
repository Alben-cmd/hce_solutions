<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ActivityController;



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
Route::get('/partnership', [FrontController::class, 'partnership'])->name('partnership');
//about ends
//projects start
Route::get('/activities', [ProjectController::class, 'activities'])->name('activities');
Route::get('/impacts', [ProjectController::class, 'impacts'])->name('impacts');
Route::get('/workshops_training', [ProjectController::class, 'workshops_training'])->name('workshops_training');
//projects ends

//Achievements
Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');
Route::get('/achievements/brussels', [AchievementController::class, 'brussels'])->name('brussels');
Route::get('/achievements/futminna', [AchievementController::class, 'futminna'])->name('futminna');
Route::get('/achievements/abomey_calavi', [AchievementController::class, 'abomey_calavi'])->name('abomey_calavi');
//Mobiltiy training 
Route::get('/achievements/mat_water', [AchievementController::class, 'mat_water'])->name('mat_water');
Route::get('/achievements/valec_nig', [AchievementController::class, 'valec_nig'])->name('valec_nig');
//EcoDry
Route::get('/achievements/Eco_dry', [AchievementController::class, 'EcoDry'])->name('EcoDry');



//news
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/scholarship_awardees', [NewsController::class, 'scholarshipAwardees'])->name('scholarshipAwardees');
Route::get('/news/orientation', [NewsController::class, 'orientation'])->name('orientation');

// Activities
Route::get('/activities', [ActivityController::class, 'index'])->name('activities');
Route::get('/activities/umu', [ActivityController::class, 'umu'])->name('activities.umu');
Route::get('/activities/uoz', [ActivityController::class, 'uoz'])->name('activities.uoz');
//opportunities start
Route::get('/opportunities', [OpportunityController::class, 'opportunities'])->name('opportunities');
Route::get('/scholarship', [OpportunityController::class, 'scholarship'])->name('scholarship');
Route::get('/trainee_mobility', [OpportunityController::class, 'trainee'])->name('trainee');
//opportunity ends 
Route::get('/contacts', [FrontController::class, 'contact'])->name('contact');
Route::post('/contacts', [FrontController::class, 'contactmail'])->name('contact.store');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');