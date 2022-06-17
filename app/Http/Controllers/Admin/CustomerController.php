<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view('Admin.Contacts.Customer.list_customer');
    }

    public function view()
    {
        // $shows = ContactGroup::get();
        return view('Admin.Contacts.CustomerGroups.list_customergroup');
    }
}
