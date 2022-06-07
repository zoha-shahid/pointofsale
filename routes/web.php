<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SalesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/dashboard');
});
Route::group(array('prefix' => 'dashboard'), function () {
    Route::get('/',[DashboardController::class, 'index']);
    Route::group(array('prefix' => 'user'), function () {
        Route::get('list',[UserController::class, 'index']);
        Route::get('add',[UserController::class, 'addForm']);
        Route::POST('add', [UserController::class, 'addUser']);
        Route::get('pdf', [UserController::class, 'ExportPDF']);
        Route::get('excel', [UserController::class, 'ExportExcel']);
        Route::get('csv', [UserController::class, 'ExportCSV']);
        Route::get('col', [UserController::class, 'col']);
    });
    Route::group(['prefix' =>'Role'], function(){
        Route::get('add',[RoleController::class, 'index']);
        Route::post('add',[RoleController::class, 'addForm']);
        Route::get('list',[RoleController::class, 'viewRole']);
    });
    Route::group(['prefix' =>'Sales'], function(){
        Route::get('add',[SalesController::class, 'index']);

    });
});
















 // nim
 Route::get('edit/{id}',[UserController::class, 'editdata']);
 Route::post('edit/{id}',[UserController::class, 'usereditdata']);

