<?php

use App\Http\Controllers\Common\AppointmentController;
use App\Http\Controllers\Common\DiagnosisController;
use App\Http\Controllers\Common\PatientController;
use App\Http\Controllers\Common\PaymentController;
use App\Http\Controllers\Common\PrescriptionController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('patients', PatientController::class);
        Route::resource('appointments', AppointmentController::class);
        Route::resource('payments', PaymentController::class);
        Route::resource('diagnoses', DiagnosisController::class);
        Route::resource('prescriptions', PrescriptionController::class);
    }
);
