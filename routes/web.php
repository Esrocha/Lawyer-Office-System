<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LawsuitController;
use App\Http\Controllers\LawyerController;

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

/**
 * Lawsuits Routes
 */
Route::get('/processos', [LawsuitController::class, 'index'])->name('lawsuits.index');
Route::get('/processo/{id}', [LawsuitController::class, 'show'])->name('lawsuits.show');
Route::get('/incluir-processo', [LawsuitController::class, 'create'])->name('lawsuits.create');
Route::post('/incluir-processo', [LawsuitController::class, 'store'])->name('lawsuits.store');
Route::get('/editar/{id}', [LawsuitController::class, 'edit'])->name('lawsuits.edit');
//Route::get('/client-lawsuit', [LawsuitController::class, 'clientLawsuit']);

/**
 * Lawyers Routes
 */
Route::get('/advogados', [LawyerController::class, 'index'])->name('lawyers.index');
Route::get('/incluir-advogado', [LawyerController::class, 'create'])->name('lawyers.create');
Route::post('/incluir-advogado', [LawyerController::class, 'store'])->name('lawyers.store');


/**
 * Clients Routes
 */
Route::get('/clientes', [ClientController::class, 'index'])->name('clients.index');
Route::get('/incluir-cliente', [ClientController::class, 'create'])->name('clients.create');
Route::post('/incluir-cliente', [ClientController::class, 'store'])->name('clients.store');
Route::get('/cliente/{id}', [ClientController::class, 'show'])->name('clients.show');




Route::get('/', function () {
    return view('welcome');
})->name('lawsuits.home');
