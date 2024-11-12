
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

use App\Http\Controllers\ContactController;
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/teacher', function () {
    return view('teacher');
});

Route::get('/vehicle', function () {
    return view('vehicle');
});


Route::get('/admission', function() {
    return view('admission');
});

use App\Http\Controllers\AdmissionController;

Route::post('/admission', [AdmissionController::class, 'store'])->name('admission.store');

