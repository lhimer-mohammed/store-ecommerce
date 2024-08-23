<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\LoginController;

Route::get('testLayout', function () {
    return view('layouts.admin');
});

// مجموعة للمسارات التي تحتاج مصادقة للمسؤولين
Route::group(['middleware' => 'auth:admins'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// مجموعة للمسارات المتعلقة بتسجيل الدخول
Route::group(['middleware' => 'guest:admins'], function(){
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'postlogin'])->name('postlogin');
});
