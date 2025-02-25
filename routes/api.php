<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use L5Swagger\Http\Controllers\SwaggerController;
use App\Http\Controllers\API\TestController;

Route::get('/hello', [TestController::class, 'hello']);
Route::get('/api/documentation', [SwaggerController::class, 'api'])->name('swagger.docs');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
