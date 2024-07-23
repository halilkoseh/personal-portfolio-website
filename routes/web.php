<?php

use Illuminate\Support\Facades\Route;




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



// routes/web.php

Route::get('/merve', function () {
    return view('hayatiminanlami');
});
