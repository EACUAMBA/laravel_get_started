<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PersonController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('person.exits')->group(function (){
    Route::get('/pessoa/nova', [PersonController::class, 'create'])->name('person.create');
    Route::post('/pessoa/salvar', [PersonController::class, 'store'])->name('person.store');
});


Route::get('/pessoa', [PersonController::class, 'index'])->name('person.index');

Route::middleware('auth')->group(function (){

    Route::get('pessoa/{person}/editar', [PersonController::class, 'edit'])->name('person.edit');
    Route::put('/pessoa/{person}', [PersonController::class, 'update'])->name('person.update');

    Route::delete('/pessoa/{person}', [PersonController::class, 'destroy'])->name('person.destroy');
});


Route::get('/permissao', [PermissionController::class, 'index'])->name('permission.index');

Route::get('/permissao/nova', [PermissionController::class, 'create'])->name('permission.create');
Route::post('/permissao/salvar', [PermissionController::class, 'store'])->name('permission.store');

Route::get('/permissao/{permission}/editar', [PermissionController::class, 'edit'])->name('permission.edit');
Route::put('/permissao/{permission}/salvar', [PermissionController::class, 'update'])->name('permission.update');

Route::put('/permissao/{permission}/apagado', [PermissionController::class, 'destroy'])->name('permission.destroy');

require __DIR__ . '/auth.php';
