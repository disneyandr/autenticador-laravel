<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\Page404Controller;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PrincipalController::class,'index'])->name('site.index');
Route::get('/login', [AuthController::class,'login'])->name('site.login');
Route::get('/logout', [AuthController::class,'logout'])->name('site.logout');
Route::post('/login', [AuthController::class,'authenticate'])->name('site.login_');

Route::prefix('/app')->group(function(){
    Route::get('/dash', [DashController::class,'index'])->name('app.dash.dash');
    // Route::get('/dash', [DashController::class,'logout'])->name('app.dash.logout');
});

Route::fallback([Page404Controller::class, 'index'])->name('site.404');
