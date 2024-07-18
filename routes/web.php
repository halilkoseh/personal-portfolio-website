<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




use App\Http\Controllers\UsernameController;

Route::get('/username', [UsernameController::class, 'showUsername']);


use App\Http\Controllers\WelcomeController;

Route::get('/tr', [WelcomeController::class, 'index']);
Route::get('/en', [WelcomeController::class, 'index1']);
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/ar', [WelcomeController::class, 'index2']);



use Illuminate\Support\Facades\Response;

Route::get('/download-cv', function () {
    $filePath = public_path('HKcv.pdf');
    return Response::download($filePath);
});



Route::get('/download-cv1', function () {
    $filePath = public_path('hkEN.pdf');
    return Response::download($filePath);
});



use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
