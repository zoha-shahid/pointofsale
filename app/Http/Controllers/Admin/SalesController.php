<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        return view('Admin.UserManagement.Sales.Add_Sales');
    }
}
