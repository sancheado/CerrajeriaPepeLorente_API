<?php

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
    return view('identificacion');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/menu', function () {
    return view('menu');
});
// Route::get('/menu/usuario/{id}', [UserController::class, 'show']);
Route::post('/menu', function () {
    return view('menu');
});




Route::get('/cliente', function () {
    return view('cliente.index');
});
Route::get('/trabajo', function () {
    return view('trabajo');
});
Route::get('/trabajador', function () {
    return view('trabajador');
});
Route::get('/facturacion', function () {
    return view('facturacion');
});
Route::get('/presupuesto', function () {
    return view('presupuesto');
});
Route::get('/albaran', function () {
    return view('albaran');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
