<?php




use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



/*Auth Routes*/
Route::get('/entrar', [AuthController::class, 'authform'])->middleware('guest')->name('auth.login');
Route::post('/entrar', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/sair', [AuthController::class, 'logout'])->middleware('auth')->name('auth.logout');
