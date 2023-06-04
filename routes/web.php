<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/appointments', function(){
//     return view("appointments");
// });

Route::get('/goodbye', function(){
    return view("goodbye");
});

Route::get('/appointments', [AppointmentsController::class, 'index']);

Route::get('appointments/create', [AppointmentsController::class, 'create']);
Route::post("appointments", [AppointmentsController::class, 'store']);
