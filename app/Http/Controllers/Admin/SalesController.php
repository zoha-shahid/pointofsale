<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('Admin.UserManagement.Sales.Add_Sales');
    }
    public function addForm(Request $request)
    {
        $data = $request->all();
        $adduser = new Sales();
        $adduser->Prefix = $data['Prefix'];
        $adduser->first_name= $data['first_name'];
        $adduser->last_name= $data['last_name'];
        $adduser->email = $data['email'];
        $adduser->number= $data['number'];
        $adduser->Commission_Percentage= $data['Commission_Percentage'];
        $adduser->permanent_address= $data['permanent_address'];
        $adduser->save();
        return redirect('/dashboard/Sales/add')->with('flash_message_success', 'product Added Successfully!!');
    }
}
