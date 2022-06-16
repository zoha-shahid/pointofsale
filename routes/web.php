<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SalesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\Supplierscontroller;

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
        Route::get('print', [UserController::class, 'ExportPrint']);
        Route::get('excel', [UserController::class, 'ExportExcel']);
        Route::get('csv', [UserController::class, 'ExportCSV']);
        Route::get('col', [UserController::class, 'col']);
        Route::get('edit/{id}',[UserController::class, 'editdata']);
        Route::post('edit/{id}',[UserController::class, 'usereditdata']);
        Route::get('delete/{id}',[UserController::class,'deleteuser']);
    });
    Route::group(['prefix' =>'Role'], function(){
        Route::get('add',[RoleController::class, 'index']);
        Route::post('add',[RoleController::class, 'addForm']);
        Route::get('list',[RoleController::class, 'viewRole']);
    });
    Route::group(['prefix' =>'Sales'], function(){
        Route::get('add',[SalesController::class, 'index']);
        Route::post('add',[SalesController::class, 'addForm']);
        Route::get('list',[SalesController::class, 'viewSales']);
        Route::get('edit/{id}',[SalesController::class, 'editdata']);
        Route::post('edit/{id}',[SalesController::class, 'edit']);
        Route::get('delete/{id}',[SalesController::class,'deletesales']);
    });
    Route::group(['prefix' =>'Suppliers'], function(){
        Route::get('list',[Supplierscontroller::class, 'index']);
        // Route::get('add',[Supplierscontroller::class, 'show']);
    });
});


Route::get('add',[Supplierscontroller::class, 'show']);









 Route::get('view',[UserController::class,'View']);

