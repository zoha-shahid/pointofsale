<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Supplierscontroller extends Controller
{
    //

    public function index()
    {
        return view('Admin.Contacts.Suppliers.list_Suppliers');
    }
    public function show()
    {
        return view('Admin.Contacts.Suppliers.add_Suppliers');
    }
}
