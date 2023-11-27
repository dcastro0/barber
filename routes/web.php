<?php

use App\Http\Controllers\BarberController;
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
use App\Http\Kernel;
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
    })->name('conta')->middleware('auth');
});
Route::get('/agendamento', function () {
    return view('agendamento');
})->name('ag')->middleware('auth');
Route::get('/meusAgendamentos', [SchedulingController::class, 'index'])->name('myAg')->middleware('auth');
Route::post('/agendar', [SchedulingController::class,'store'])->middleware('auth');
Route::delete('/deletar/{id}', [SchedulingController::class,'destroy'])->name('del')->middleware('auth');
Route::middleware(['checkUserRole'])->group(function () {
    Route::get('/gerenciadorBarbeiro', [SchedulingController::class,'barber'])->name('gerenciar')->middleware('auth');
});
Route::put('/editar/{id}', [SchedulingController::class,'update'])->name('atualizar.dado')->middleware('auth');