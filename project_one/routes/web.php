<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\DoctorController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/majors',[MajorController::class, 'index']);

Route::delete('/majors/{id}',[MajorController::class, 'edit'])->name('majors.edit');
Route::delete('/majors/{id}',[MajorController::class, 'destroy'])->name('majors.delete'); 


Route::get('/doctors/create',[DoctorController::class, 'create']);
Route::post('/doctors/insert',[DoctorController::class, 'insert'])->name('doctor.insert');