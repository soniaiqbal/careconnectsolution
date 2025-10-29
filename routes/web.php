<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('departments', [DepartmentController::class, 'index'])->name('departments');
Route::get('doctor', [DoctorController::class, 'index'])->name('doctor');