<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return redirect('dashboard');
});

Route::middleware('auth')->group(function(){
    // Dashboard
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    // Cateogry
    Route::group(['name' => 'category', 'prefix' => 'category'], function(){
        Route::get('', [CategoryController::class, 'index'])->name('category');
    });


});



require __DIR__.'/auth.php';
