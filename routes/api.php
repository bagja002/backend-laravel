<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/admins', [AdminController::class, 'index']);
Route::post('/admins', [AdminController::class, 'store']);
Route::get('/getAdmin/{id}', [AdminController::class, 'getAdmin']);

Route::post('/users/create_user', [UserController::class,'store']);
Route::get('/getAllUser', [UserController::class,'index']);
Route::get('/getUserById/{id}', [UserController::class,'getUserId']);


Route::get('/barang', [BarangController::class,'index']);
Route::get("/getBaranByid/{id}", [BarangController::class,'getBarangByid']);
Route::post('/create_barang', [BarangController::class,'store']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
