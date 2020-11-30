<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PdfController;

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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/questions', function () {
        return view('questions');
    });
    
    Route::get('mail/send', [MailController::class, 'send']);

    Route::resource('questions', QuestionController::class)->only(['index', 'store']);    
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [ApplicantController::class, 'index'])->name('home');
    Route::resource('applicants', ApplicantController::class)->only(['show']);
    Route::resource('excel', ExcelController::class)->only(['index']);
    Route::resource('pdf', PdfController::class)->only(['show']);
});
