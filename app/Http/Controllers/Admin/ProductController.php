<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  list()
    {
        // $shows = ContactGroup::get();
        return view('Admin.products.list');
    }

    public function add()
    {
        // $shows = ContactGroup::get();
        return view('Admin.products.add');
    }
    public function show()
    {
        // $shows = ContactGroup::get();
        return view('Admin.products.variation');
    }

    public function lables()
    {
        // $shows = ContactGroup::get();
        return view('Admin.products.lables');
    }

    public function import()
    {
        // $shows = ContactGroup::get();
        return view('Admin.products.import_product');
    }
}
