<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(EmployeeController::class)->prefix('/employee')->group(function(){
    Route::get('/', 'index');
    Route::post('/store', 'store');
    Route::post('/update/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/show/{id}', 'show');
});
