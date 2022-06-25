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

        return view('Admin.products.import_product');
    }
    public function  importstock()
    {

        return view('Admin.products.import_opning_stock');
    }
    public function  unit()
    {
        return view('Admin.products.units');
    }

    public function catgry()
    {
        return view('Admin.products.categories');
    }

    public function brand()
    {
        return view('Admin.products.brand');
    }
}
