<?php

use Illuminate\Support\Facades\Route;

require base_path('routes/comptabilite.php');

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


// Les routes des interfaces de l admin

Route::get('/', [App\Http\Controllers\Comptabilite\TableauController::class, 'tableau'])->name('comptabilite_dashboard');



