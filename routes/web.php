<?php

use App\Http\Controllers\Admin\UserController;
use App\Models\adduser;
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
});


/*Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});*/
/*Route::get('/adduser', function () {
    return view('Admin.UserManagement.add_user');
});*/

//Route::get('/viewUser', [UserController::class, 'viewUser']);
//Route::POST('/adduser', [UserController::class, 'adduser']);

Route::get('/addroles', function () {
    return view('Admin.UserManagement.add_Roles');
});
Route::get('/addpermission', function () {
   return view('Admin.UserManagement.Addsalescommission');
});

