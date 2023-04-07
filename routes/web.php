<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberCOntroller;

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
Route::get('memberlst',[memberCOntroller::class,'memberList']);
Route::get('delete/{id}',[memberCOntroller::class,'deleteMember']);
