<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\FormEditor\FormEditorController;
use App\Http\Controllers\Module\MembersController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthenticatedSessionController::class, 'create']);

/** System Routes */
Route::get('/dashboard', function () {return view('pages.dashboard');})->middleware(['auth', 'verified', 'preventBackHistory'])->name('system.dashboard');

/** Members Routes */
Route::controller(MembersController::class)->middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::get('/members/', function () {return view('pages.members.dashboard');})->name('MembersController.members');
    Route::get('/members/view', function () {return view('pages.members.view');})->name('MembersController.members.view');
    Route::get('/members/add', function () {return view('pages.members.add');})->name('MembersController.members.add');
    Route::post('/members/create', 'store')->name('MembersController.store');
});

/** Form Editor Routes */
Route::controller(FormEditorController::class)->middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::get('settings/form-editor', 'index')->name('FormEditorController.index');
});

Route::middleware(['guest', 'preventBackHistory'])->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register_view');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('auth_register');
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login_view');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('auth_login');
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::get('auth/verify/email', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('auth/verify/email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::get('auth/verify/password/confirm', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::put('auth/verify/password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('auth/verify/email/notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    Route::post('auth/verify/password/confirm', [ConfirmablePasswordController::class, 'store']);
    Route::get('auth/logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth_logout');
});

Route::controller(ProfileController::class)->middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::get('user/profile', 'index')->name('UserController.index');
});

Route::get('generate', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});
