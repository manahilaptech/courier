<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// =========================
// Public Pages
// =========================
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/booking', [PageController::class, 'booking'])->name('booking');
Route::get('/track', [PageController::class, 'track'])->name('track');
Route::get('/admin', [PageController::class, 'admin'])->name('admin');

// =========================
// Authentication Routes
// =========================


// Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.post');








// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



// =========================
// Dashboard Routes
// =========================
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');






// contact page

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



// BOOKING PAGE-------------
Route::get('/booking', [BookingController::class, 'showForm'])->name('booking.form');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');


Route::get('/booking', [BookingController::class, 'create'])->name('booking');

Route::get('/booking/form', [BookingController::class, 'create'])->name('booking.form');
Route::post('/booking/form', [BookingController::class, 'store'])->name('booking.store');



// admin controller--------------------------
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// usercontroller-----------------------
Route::get('/user/dashboard', [UserController::class, 'dashboard'])
    ->name('user.dashboard')
    ->middleware('auth');