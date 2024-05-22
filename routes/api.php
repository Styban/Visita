<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tourguide;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['middleware' => 'auth:sanctum'], function () {
    
    Route::get('/tourguides', function () {
        return Tourguide::all();
    });
    
    Route::get('/tourguides/{id}', function ($id) {
        return Tourguide::findOrFail($id);
    });
});
