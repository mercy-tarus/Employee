<?php

use App\Http\Controllers\EmployeeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[EmployeeController::class, 'index'])->name('index');
Route::get('/create',[EmployeeController::class, 'create'])->name('create');
Route::post('/create/store',[EmployeeController::class, 'store'])->name('employee.store');
Route::post('/create/update/{id}',[EmployeeController::class, 'update'])->name('employee.update');
Route::get('/edit/{id}',[EmployeeController::class, 'edit'])->name('employee.edit');
Route::get('/destroy/{id}',[EmployeeController::class, 'destroy'])->name('employee.delete');
