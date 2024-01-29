<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [App\Http\Controllers\API\AuthController::class, 'login'])->name('api.login');

Route::middleware(['auth:api'])->group(function () {
    Route::get('users', [App\Http\Controllers\API\AuthController::class, 'users'])->name('users');

    Route::prefix('msc')->group(function () {
        Route::get('all',[App\Http\Controllers\API\Admin\MasterSportCenterController::class, 'getAllMsc'])->name('msc.get');
        Route::post('detail',[App\Http\Controllers\API\Admin\MasterSportCenterController::class, 'getDetailMsc'])->name('msc.detail');
        Route::put('update',[App\Http\Controllers\API\Admin\MasterSportCenterController::class, 'updateMsc'])->name('msc.update');
        Route::delete('delete',[App\Http\Controllers\API\Admin\MasterSportCenterController::class, 'deleteMsc'])->name('msc.delete');
        Route::post('store',[App\Http\Controllers\API\Admin\MasterSportCenterController::class, 'createMsc'])->name('msc.store');
    });

    Route::prefix('mst')->group(function () {
        Route::get('all',[App\Http\Controllers\API\Admin\MasterSportTypeController::class, 'all'])->name('mst.get');
        Route::post('detail',[App\Http\Controllers\API\Admin\MasterSportTypeController::class, 'detail'])->name('mst.detail');
        Route::put('update',[App\Http\Controllers\API\Admin\MasterSportTypeController::class, 'update'])->name('mst.update');
        Route::delete('delete',[App\Http\Controllers\API\Admin\MasterSportTypeController::class, 'delete'])->name('mst.delete');
        Route::post('store',[App\Http\Controllers\API\Admin\MasterSportTypeController::class, 'create'])->name('mst.store');
    });

    Route::prefix('msf')->group(function () {
        Route::get('all',[App\Http\Controllers\API\Admin\MasterSportFieldController::class, 'all'])->name('msf.get');
        Route::post('detail',[App\Http\Controllers\API\Admin\MasterSportFieldController::class, 'detail'])->name('msf.detail');
        Route::put('update',[App\Http\Controllers\API\Admin\MasterSportFieldController::class, 'update'])->name('msf.update');
        Route::delete('delete',[App\Http\Controllers\API\Admin\MasterSportFieldController::class, 'delete'])->name('msf.delete');
        Route::post('store',[App\Http\Controllers\API\Admin\MasterSportFieldController::class, 'create'])->name('msf.store');
    });


});
