<?php

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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SchedulingController;
use App\Models\Scheduling;

Route::get('/', function(){
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/conta', function () {
        return view('dashboard');
    })->name('conta');
});
Route::get('/agendamento', function () {
    return view('agendamento');
})->name('ag');
Route::get('/meusAgendamentos', [SchedulingController::class, 'index']);
Route::post('/agendar', [SchedulingController::class,'store']);
