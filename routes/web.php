<?php

use App\Http\Controllers\AppController;
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

// Home Page
Route::get('/', [AppController::class, "index"])->name('index');

// Auth Pages
Route::prefix('auth')->name('auth.')->group( function () {
    Route::match(['get', 'post'], '/login', [AppController::class, "login"])->name('login');
    Route::match(['get', 'post'], '/signup', [AppController::class, "signup"])->name('signup');
    Route::get('/forget-password', [AppController::class, "forgetPassword"])->name('forget-password');
});

// Side Pages
Route::get('/features', [AppController::class, "features"])->name('features');
Route::get('/how-it-works', [AppController::class, "howItWorks"])->name('how-it-works');
Route::get('/for-teams', [AppController::class, "forTeams"])->name('for-teams');
Route::get('/integrations', [AppController::class, "integrations"])->name('integrations');
Route::get('/templates', [AppController::class, "templates"])->name('templates');
Route::get('/getting-started', [AppController::class, "gettingStarted"])->name('getting-started');
Route::get('/help-center', [AppController::class, "helpCenter"])->name('help-center');
Route::get('/pricing', [AppController::class, "pricing"])->name('pricing');

// Company Pages
Route::get('/about-us', [AppController::class, "about"])->name('about-us');
Route::get('/career', [AppController::class, "career"])->name('career');
Route::get('/contact-us', [AppController::class, "contact"])->name('contact-us');

// Other Pages
Route::get('/security', [AppController::class, "security"])->name('security');
Route::get('/privacy', [AppController::class, "privacy"])->name('privacy');
Route::get('/terms', [AppController::class, "terms"])->name('terms');
