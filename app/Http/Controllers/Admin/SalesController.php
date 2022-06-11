<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return redirect('/dashboard/Sales/list')->with('flash_message_success', 'product Added Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $student = Sales::find($id);
        $student->Prefix = $request->input('Prefix');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->email= $request->input('email');
        $student->number= $request->input('number');
        $student->Commission_Percentage= $request->input('Commission_Percentage');
        $student->permanent_address= $request->input('permanent_address');
        $student->update();
        return redirect('/dashboard/Sales/list')->with('status','Student Updated Successfully');
    }


    public function viewSales()
{
    $shows = Sales::get();

    return view('Admin.UserManagement.Sales.list')->with(compact('shows'));;
}
public function editdata(Request $request, $id)
{
$data=$request->id;
$shows=DB::table('sales')->where('id',$data)->get();
    return view('Admin.UserManagement.Sales.Edit_Sales')->with(compact('shows'));
}
public function deletesales(Sales $shows, $id = null)
{
    Sales::where('id', $id)->delete();
    // Alert::success('Deleated sucessfully', 'Success Message');
    return redirect('/dashboard/Sales/list');
}
}

