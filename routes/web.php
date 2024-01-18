<?php

use App\Http\Controllers\patients;
use App\Http\Controllers\treatment;
use App\Http\Controllers\patientsQueue;
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

Route::get('/', function () {

    return view('index');
});

Route::get('/patients', [patients::class,'showall']);
Route::get('/edit/{id}', [patients::class,'edit']);
Route::get('/delete/{id}', [patients::class,'destroy']);
Route::get('/getappointment', [patients::class, 'store']);
Route::get('/addpatient', [patients::class, 'store']);
Route::get('/doctortreatment', [treatment::class,'showForm'])->name('show.form');
Route::post('/doctortreatment', [treatment::class,'submitForm'])->name('submit.doctortreatment');
Route::get('/patientsqueue', [patientsQueue::class,'index']);

