<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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


Route::post('/auth/check', [MainController::class,'check'])->name('auth.check');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/', [MainController::class,'login'])->name('login');
    Route::get('/auth/logout', [DashboardController::class,'logout'])->name('auth.logout');
    Route::get('/admin/dashboard', [DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/addproduct', [DashboardController::class,'add'])->name('admin.add');
    Route::get('/admin/editproduct/{id}', [DashboardController::class,'edit'])->name('admin.edit');
    Route::post('/admin/saveEditProduct/', [DashboardController::class,'saveEditProduct'])->name('admin.saveEditProduct');
    Route::get('/admin/updateproduct', [DashboardController::class,'update'])->name('admin.update');
    Route::get('/admin/viewproduct', [DashboardController::class,'view'])->name('admin.view');
    Route::post('/admin/add', [DashboardController::class, 'addProduct'])->name('admin.addProduct');
    Route::get('/admin/delete/{id}', [DashboardController::class, 'destroy'])->name('admin.destroy');
});
