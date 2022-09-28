<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\EmployeeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);


Route::get('/', [EmployeeController::class, 'showEmployees']);
Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);
