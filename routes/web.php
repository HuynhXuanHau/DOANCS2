<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AuthController::class, 'showLoginAdminForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin_login');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::post('/logout',  [AuthController::class, 'logout'])->name('user.logout');
Route::post('/logout',  [AuthController::class, 'logout'])->name('logout');
// Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::post('/register', [AuthController::class, 'register']);


// routes/web.php
use App\Http\Controllers\UserController;
Route::get('/home', [UserController::class, 'home'])->name('home');


use App\Http\Controllers\AdminController;
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
Route::post('/admin/home', [AdminController::class, 'home'])->name('admin.home.post');
Route::get('/admin/home/pending', [AdminController::class, 'pendingList'])->name('admin.home.pending');

Route::get('/admin/home/buspending', [AdminController::class, 'buspendingList'])->name('admin.home.buspending');
Route::get('/admin/home/busapproved', [AdminController::class, 'busapprovedList'])->name('admin.home.busapproved');


Route::get('/admin/home/approved', [AdminController::class, 'approvedList'])->name('admin.home.approved');
Route::get('/admin/home/interview', [AdminController::class, 'interviewList'])->name('admin.home.interview');
Route::post('/admin/cv/update', [AdminController::class, 'updateCV'])->name('cv.update');

// Route::get('/admin/cv{user_id}', action: [AdminController::class, 'showCV'])->name('admin.cv.show');



use App\Http\Controllers\ProfileController;
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::get('/createCv', [ProfileController::class, 'createCV'])->name('createCV');
Route::post('/profile/store', [ProfileController::class, 'storeProfile'])->name('storeProfile');
Route::get('/admin/profile/{user_id}', [ProfileController::class, 'showProfileForAD'])->name('showProfileForAD');
Route::get('/admin/profilebus/{id}', [ProfileController::class, 'showProfileBUSForAD'])->name('showProfileBUSForAD');
Route::get('/business/profile/{user_id}', [ProfileController::class, 'showProfileForBus'])->name('showProfileForBus');

// routes/web.php
// Route
// Route::get('/profile/{user_id}', [ProfileController::class, 'showProfileForAD'])->name('showCV');
// 



// routes/web.php
use App\Http\Controllers\JobController;
Route::get('/jobs/create', [JobController::class, 'create']) ->name('jobs.create');
Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store');

use App\Http\Controllers\BusinessController;
Route::post('/business/login', [BusinessController::class, 'login'])->name('business.login');
Route::get('/business/login', [BusinessController::class, 'showLoginForm'])->name('business.login');

Route::post('/business/logout',  [BusinessController::class, 'logout'])->name('logout');
Route::get('/business/home', [BusinessController::class, 'home'])->name('business.home');
Route::post('/business/home', [BusinessController::class, 'homeBusiness'])->name('business.home.post');
Route::get('/business/createJob', [BusinessController::class, 'createJobforBUS'])->name('createJobforBusiness');

Route::get('/business/home/pending', [BusinessController::class, 'pendingList'])->name('business.home.pending');
Route::get('/business/home/approved', [BusinessController::class, 'approvedList'])->name('business.home.approved');
Route::get('/business/home/interview', [BusinessController::class, 'interviewList'])->name('business.home.interview');
Route::post('/business/cv/update', [BusinessController::class, 'updateCV'])->name('buscv.update');


Route::get('/business/register', [BusinessController::class, 'showRegisterForm'])->name('business.register');
Route::post('/business/register', [BusinessController::class, 'businessRegister'])->name('business.register');


Route::get('/business/create', [BusinessController::class, 'create'])->name('business.create');
Route::post('/business/store', [BusinessController::class, 'store'])->name('business.store');
Route::get('/home-business', [BusinessController::class, 'homeBusiness'])->name('homeBusiness');


// Route::get('/business/view', [BusinessController::class,'view'])->name('business.view');


use App\Http\Controllers\ApplyJobController;
Route::post('/apply-job/approve', [ApplyJobController::class, 'approve'])->name('applyJob.approve');
Route::post('/apply-job/reject', [ApplyJobController::class, 'reject'])->name('applyJob.reject');

use App\Http\Controllers\ApplyBusinessController;
Route::post('/apply-job/approvebus', [ApplyBusinessController::class, 'approve'])->name('applyBUS.approve');
Route::post('/apply-job/rejectbus', [ApplyBusinessController::class, 'reject'])->name('applyBUS.reject');



Route::get('/error', function () {
    return view('error'); // Tạo view 'error.blade.php'
})->name('errorPage');
