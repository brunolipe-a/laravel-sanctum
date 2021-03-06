<?php

use App\Http\Controllers\API\SessionController;

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

Route::post('login', [SessionController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
  Route::delete('logout', [SessionController::class, 'logout'])->name('logout');
  Route::get('/user', function (Request $request) {
    return $request->user();
  });
});
