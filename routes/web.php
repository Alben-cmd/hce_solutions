<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Admin\DashboardController;

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

//news
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/scholarship_awardees', [NewsController::class, 'scholarshipAwardees'])->name('scholarshipAwardees');
Route::get('/orientation', [NewsController::class, 'orientation'])->name('orientation');
//opportunities start
Route::get('/opportunities', [OpportunityController::class, 'opportunities'])->name('opportunities');
Route::get('/scholarship', [OpportunityController::class, 'scholarship'])->name('scholarship');
Route::get('/trainee_mobility', [OpportunityController::class, 'trainee'])->name('trainee');
//opportunity ends 
Route::get('/contacts', [FrontController::class, 'contact'])->name('contact');
Route::post('/contacts', [FrontController::class, 'contactmail'])->name('contact.store');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () 
{
    Route::get('/', [DashboardController::class, 'dasboard'])->name('dasboard');
});