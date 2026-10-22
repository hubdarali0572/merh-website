<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// frontend routes

Route::get('/clearCache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('optimize:clear');
    return 'Configuration cache cleared and re-cached successfully.';
});


Route::get('/admin', function () {
    return redirect()->route('login');
});

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about-us');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact-us');
Route::get('/solutions', [FrontendController::class, 'project'])->name('solutions');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-of-service', [FrontendController::class, 'termsOfService'])->name('terms.of.service');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/detailPage/{slug}', [FrontendController::class, 'detailPage'])->name('frontend.show');

Route::resource('studentContact', StudentContactController::class)->except(['index']);
Route::get('/contacts/{id?}', [StudentContactController::class, 'index'])->name('studentContact.index');
// Admin Dashboard Routes

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard Route
    Route::resource('dashboard', DashboardController::class);
    // User Route
    Route::resource('users', UserController::class);
    // Blog Route
    Route::resource('smartai-blog', BlogController::class);

    //  Role Route
    Route::resource('roles', RoleController::class);
    Route::get('/assign-role', [RoleController::class, 'showAssignRole'])->name('show.assign.role.form');
    Route::post('/assign-role', [RoleController::class, 'assignRole'])->name('assign.role');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Fallback Route – serves app-ads.txt content for any unmatched URL
Route::fallback(function () {
    return response(file_get_contents(public_path('app-ads.txt')), 200)
        ->header('Content-Type', 'text/plain');
});