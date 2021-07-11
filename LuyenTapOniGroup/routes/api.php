<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CompaniesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware('auth:api')->prefix('v1')->group(function(){
//     Route::get('/user',function(Request $request){
//         return $request->user();
//     });
//     Route::get('authors/{author}',[AuthorsController::class,'show']);
// });
Route::middleware('auth:api')->get('/companies',[CompaniesController::class,'index']);
// Route::get('/companies',[CompaniesController::class,'index']);
Route::post('/companies',[CompaniesController::class,'store']);
Route::get('/companies/{id}',[CompaniesController::class,'show']);
Route::put('/companies/{id}',[CompaniesController::class,'update']);
Route::delete('/companies/{id}',[CompaniesController::class,'destroy']);
//for one specific author
