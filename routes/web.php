<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlanController;

use function Pest\Laravel\get;

                                                //el nombre del metodo
Route::get('/crear-admin', [AuthController::class, 'crearAdmin']);
Route::get('/', [AuthController:: class, 'index'])-> name('login');

Route::post('/salir', [AuthController::class, 'salir'])->name('salir');
Route::post('/logear', [AuthController:: class, 'logear'])-> name('logear');


Route::get('/home', [DashboardController:: class, 'index'])-> name('home');


//Empresas
Route::prefix('empresas')->group(function(){
    Route::get('/' ,[CompanyController::class, 'index'])->name('empresas');
});

Route::prefix('planes')->group(function(){
    Route::get('/' ,[PlanController::class, 'index'])->name('planes');
});

Route::prefix('usuarios')->group(function(){
    Route::get('/' ,[CompanyUserController::class, 'index'])->name('usuarios');
});