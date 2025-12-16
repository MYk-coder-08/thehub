<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('post-mid-single', [App\Http\Controllers\MotorController::class, 'pushMotorSingle']);

Route::post('/test', function (Request $request) {
    return response()->json([
        'message' => 'API route working',
        'data' => $request->all()
    ]);
});
Route::get('/status', function () {
    return response()->json([
        'status' => 'API is up and running'
    ]);
});
