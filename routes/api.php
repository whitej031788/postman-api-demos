<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InsuranceController;
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
Route::group(['middleware' => ['api'], 'prefix' => 'auth'], function ($router) {
    Route::post('/token', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::group(['middleware' => ['api', 'auth:api'], 'prefix' => 'auth'], function ($router) {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});

// Insurance Endpoints
Route::group(['middleware' => ['api', 'auth:api'], 'prefix' => 'insurance'], function ($router) {
    Route::get('/policyholders', [InsuranceController::class, 'getPolicyHolders']);
    Route::get('/policyholder/{id}', [InsuranceController::class, 'getPolicyHolder']);
    Route::get('/plans', [InsuranceController::class, 'getPlans']);
    Route::get('/plan/{id}', [InsuranceController::class, 'getPlan']);    
});