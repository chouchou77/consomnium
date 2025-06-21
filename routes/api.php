<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\MetterController;

Route::get("/test",function() {
    return response()->json(["mesage" => "welcome this is just a test"]);
});
Route::post("/login",[AuthController::class,"login"]);
Route::middleware(["auth:sanctum"])->group(function(){
    Route::get("/dashboard",[MetterController::class,"dashboard"]);
    Route::post("/toggle/{id}",[MetterController::class,"toggle"]);
    Route::post("/logout",[AuthController::class,"logout"]);
});
