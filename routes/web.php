<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcountController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/adminDashboard', function(){
            return view('dashboard.adminDashboard');
            })->name('adminDashboard');

        Route::get('/addAcount', [AcountController::class, 'create'])->name('createAcount');
        Route::post('/addAcount', [AcountController::class, 'store'])->name('addAcount');
        // Route::prefix('manageAcount')->as('acount.')->group(function () {
        //     Route::get('/', [AcountController::class, 'index'])->name('index');
        //     Route::get('/{user}/edit', [AcountController::class, 'edit'])->name('edit');
        //     Route::put('/{user}', [AcountController::class, 'update'])->name('update');
        //     Route::delete('/{user}', [AcountController::class, 'destroy'])->name('destroy');
        // });
        Route::get('/manageAcount', [AcountController::class, 'index'])->name('manageAcount');
        Route::get('/manageAcount/{user}/edit', [AcountController::class, 'edit'])->name('acount.edit');
        Route::put('/manageAcount/{user}', [AcountController::class, 'update'])->name('acount.update');
        Route::delete('/manageAcount/{user}', [AcountController::class, 'destroy'])->name('acount.destroy');
    });
    Route::group(['middleware' => ['user']], function () {
        Route::get('/userDashboard', function(){
            return view('dashboard.userDashboard');
        })->name('userDashboard');
    });

    // Rute-rute yang hanya bisa diakses oleh admin di sini
});

