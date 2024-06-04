<?php

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

use App\Http\Controllers\EmployeeController;




Route::get('employees', [app\Http\employeemanagement::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('employee/{id}/edit', [App\Http\Controllers\employeemanagement::class, 'edit'])->name('employee.edit');
    Route::patch('employee/{id}', [App\Http\Controllers\employeemanagement::class, 'update'])->name('employee.update');
    Route::delete('employee/{id}', [App\Http\Controllers\employeemanagement::class, 'destroy'])->name('employee.destroy');
    Route::get('/employee', [\App\Http\Controllers\employeemanagement::class, 'index'])->name('employee.index');
    Route::post('/employee', [\App\Http\Controllers\employeemanagement::class, 'store'])->name('employee.store');
    Route::get('/about', [\App\Http\Controllers\employeemanagement::class, 'index'])->name('about');
    
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
