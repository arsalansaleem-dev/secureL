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

        
         // ✅ New Instructor Pages
        Route::get('/calendar', [InstructorController::class, 'calendar'])->name('instructor.calendar');
        Route::get('/learners', [InstructorController::class, 'learners'])->name('instructor.learners');
        Route::get('/reports', [InstructorController::class, 'reports'])->name('instructor.reports');
        Route::get('/feedback', [InstructorController::class, 'feedback'])->name('instructor.feedback');
        Route::get('/support', [InstructorController::class, 'support'])->name('instructor.support');
        Route::get('/contact', [InstructorController::class, 'contact'])->name('instructor.contact');


        Route::get('/personal-details', [InstructorController::class, 'showPersonalDetails'])->name('instructor.personal.details');
        Route::put('/personal-details', [InstructorController::class, 'storePersonalDetails'])->name('instructor.personal.store');

        Route::get('/profile-vehicle', [InstructorController::class, 'showProfileVehicle'])->name('instructor.profile.vehicle');
        Route::put('/profile-vehicle', [InstructorController::class, 'storeProfileVehicle'])->name('instructor.profile.vehicle.store');

        Route::get('/availability', [InstructorController::class, 'showAvailability'])->name('instructor.availability');
        Route::put('/availability', [InstructorController::class, 'storeAvailability'])->name('instructor.availability.store');

        Route::get('/pricing', [InstructorController::class, 'showPricing'])->name('instructor.pricing');
        Route::put('/pricing', [InstructorController::class, 'storePricing'])->name('instructor.pricing.store');

        Route::get('/verifications', [InstructorController::class, 'showVerifications'])->name('instructor.verifications');
        Route::put('/verifications', [InstructorController::class, 'storeVerifications'])->name('instructor.verifications.store');

        Route::get('/banking', [InstructorController::class, 'showBanking'])->name('instructor.banking');
        Route::put('/banking', [InstructorController::class, 'storeBanking'])->name('instructor.banking.store');

    });
});


require __DIR__.'/auth.php';
