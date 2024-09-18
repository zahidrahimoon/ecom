<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// Route for the homepage
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

// Admin login
Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login.post');

// Driver login
Route::get('/driver/login', [AuthController::class, 'showDriverLoginForm'])->name('driver.login');
Route::post('/driver/login', [AuthController::class, 'driverLogin'])->name('driver.login.post');
