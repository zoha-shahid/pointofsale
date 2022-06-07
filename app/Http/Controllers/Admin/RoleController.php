<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {

        return view('Admin.UserManagement.Roles.add_Roles');
    }
    public function addForm(Request $request)
{
    $input = $request->all();
$input['category'] = $request->input('category');
$input['Role'] = $request->input('Role');
Role::create($input);
return redirect()->back();
}
public function viewRole()
{

    return view('Admin.UserManagement.Roles.list');
}
}
