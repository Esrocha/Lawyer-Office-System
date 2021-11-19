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
Route::get('/incluir-processo', [LawsuitController::class, 'store'])->name('lawsuits.store');
Route::get('/editar/{id}', [LawsuitController::class, 'edit'])->name('lawsuits.edit');
//Route::get('/client-lawsuit', [LawsuitController::class, 'clientLawsuit']);

/**
 * Lawyers Routes
 */
Route::get('/incluir-advogado', [LawyerController::class, 'store'])->name('lawyer.store');

/**
 * Clients Routes
 */
Route::get('/incluir-cliente', [ClientController::class, 'store'])->name('client.store');



Route::get('/', function () {
    return view('welcome');
});
