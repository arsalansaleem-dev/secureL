<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LearnerAuthController;
use App\Http\Controllers\Learner\LearnerController;
use App\Http\Controllers\Auth\InstructorAuthController;
use App\Http\Controllers\Instructor\InstructorController;


Route::get('/phpinfo', function () {
    phpinfo();
});



// Authentication and Profile Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Admin Routes (Protected by 'auth' only)
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    // Admin Dashboard
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource Routes for Users, Roles, and Permissions
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

});


Route::get('/', function () {
    return view('home');
});



Route::prefix('learner')->group(function () {
    Route::get('/login', [LearnerAuthController::class, 'showLoginForm'])->name('learner.login');
    Route::post('/login', [LearnerAuthController::class, 'login']);

    Route::get('/register', [LearnerAuthController::class, 'showRegisterForm'])->name('learner.register');
    Route::post('/register', [LearnerAuthController::class, 'register']);

    Route::middleware(['auth:learner', 'learner'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.learner.dashboard');
        })->name('dashboard');
        
        Route::get('/preferences', [LearnerController::class, 'preferences'])->name('learner.preferences');
        Route::put('/preferences', [LearnerController::class, 'updatePreferences'])->name('learner.preferences.update');

        Route::get('/personal-details', [LearnerController::class, 'showPersonalDetails'])->name('learner.personal.details');
        Route::put('/personal-details', [LearnerController::class, 'storePersonalDetails'])->name('learner.personal.store');
    });
});


Route::prefix('instructor')->group(function () {
    // Instructor Login & Registration
    Route::get('/login', [InstructorAuthController::class, 'showLoginForm'])->name('instructor.login');
    Route::post('/login', [InstructorAuthController::class, 'login']);

    Route::get('/register', [InstructorAuthController::class, 'showRegisterForm'])->name('instructor.register');
    Route::post('/register', [InstructorAuthController::class, 'register']);

    // Protected Routes for Authenticated Instructors
    Route::middleware(['auth:instructor', 'instructor'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.instructor.dashboard');
        })->name('instructor.dashboard');

        Route::get('/preferences', [InstructorController::class, 'preferences'])->name('instructor.preferences');
        Route::put('/preferences', [InstructorController::class, 'updatePreferences'])->name('instructor.preferences.update');

        Route::get('/personal-details', [InstructorController::class, 'showPersonalDetails'])->name('instructor.personal.details');
        Route::put('/personal-details', [InstructorController::class, 'storePersonalDetails'])->name('instructor.personal.store');
    });
});


require __DIR__.'/auth.php';
