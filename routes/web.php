<?php

use App\Http\Controllers\admincontroller\usercontroller;
use App\Models\adduser;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/adduser', function () {
    return view('admin.usermanagment.add_user');
});

Route::POST('/adduser', [usercontroller::class, 'adduser']);

Route::get('/addroles', function () {
    return view('admin.usermanagment.add_Roles');
});
Route::get('/addpermission', function () {
    return view('admin.usermanagment.Addsalescommission');
});
Route::get('/no', function () {
    return view('admin.usermanagment.checkitrff');
});

Route::get('/viewRole', function () {
    return view('admin.usermanagment.view_Role');
});

Route::get('/viewRole', function () {
    return view('admin.usermanagment.view_Role');
});

Route::get('/viewRole', function () {
    return view('admin.usermanagment.view_Role');
});
