<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Frontend\FrontendNewsController;

Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/category/{slug}', [FrontendNewsController::class, 'categoryNews'])->name('category.news');
Route::get('/news/{title}', [FrontendNewsController::class, 'show'])->name('news.show');
Route::get('/search', [FrontendNewsController::class, 'search'])->name('news.search');



Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');
    Route::get('/admin-profile', [DashboardController::class, 'admin_profile'] )->name('admin.profile');
    Route::post('/admin-profile/update', [DashboardController::class, 'update_admin_profile'])->name('admin.profile.update');
    Route::post('profile/change-password', [DashboardController::class, 'change_password'])->name('admin.profile.changePassword');
    Route::get('/log-out', [DashboardController::class, 'logout'])->name('admin.logout');
    // Route::get('/settings', [DashboardController::class, 'settings'])->name('admin.settings');

    // news routes
    Route::get('/all-news', [NewsController::class, 'all_news'] )->name('news.all');
    Route::get('/add-news', [NewsController::class, 'add_news'] )->name('news.add');
    Route::post('/store-news', [NewsController::class, 'store_news'] )->name('news.store');
    Route::get('/delete-news/{id}', [NewsController::class, 'delete_news'])->name('news.delete');
    Route::patch('/update-news/{id}', [NewsController::class, 'update_news'])->name('news.update');
    
});
