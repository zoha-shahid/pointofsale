<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use PDF,Excel;
use App\Exports\UsersExport;
use FontLib\Table\Type\post;

class UserController extends Controller
{
    // for view data of user page
    public function index()
    {
        $shows = User::get();
        return view('admin.UserManagement.Users.list')->with(compact('shows'));
    }
    public function addForm()
    {
        return view('admin.UserManagement.Users.add');
    }
    public function addUser(Request $request)
    {
        //  return $request;
        $data = $request->all();
        //  dd($data);
        $adduser = new User;
        $adduser->Prefix = $data['Prefix'];
        $adduser->First_name= $data['First_name'];
        $adduser->Last_name = $data['Last_name'];
        $adduser->Email = $data['Email'];
        $adduser->Isactive = $data['Isactive'];
        //
         $adduser->Allowlogin= $data['Allowlogin'];
        $adduser->Username = $data['Username'];
        $adduser->Password= $data['Password'];
        $adduser->Confirm_Password= $data['Confirm_Password'];
        $adduser->Role = $data['Role'];
        $adduser->Access_location= $data['Access_location'];
        //
        $adduser->Dateof_birth = $data['Dateof_birth'];
        $adduser->Gender = $data['Gender'];
        $adduser->Marital_status = $data['Marital_status'];
        $adduser->Blood_group = $data['Blood_group'];
        $adduser->Mobile_num = $data['Mobile_num'];
        $adduser->Alternate_num= $data['Alternate_num'];
        //
        $adduser->Familycontact_num = $data['Familycontact_num'];
        $adduser->Facebook_link= $data['Facebook_link'];
        $adduser->Twitter_link = $data['Twitter_link'];
        $adduser->Social_media1 = $data['Social_media1'];
        $adduser->Social_media2 = $data['Social_media2'];
        $adduser->Custom_field1 = $data['Custom_field1'];

        $adduser->Custom_field2 = $data['Custom_field2'];
        $adduser->Custom_field3= $data['Custom_field3'];
        $adduser->Custom_field4 = $data['Custom_field4'];
        $adduser->Guardian_name= $data['Guardian_name'];
        $adduser->Id_name = $data['Id_name'];
        $adduser-> ID_proof_number =$data['ID_proof_number'];
        $adduser->Permanent_Address= $data['Permanent_Address'];
        $adduser->Current_Address = $data['Current_Address'];
        $adduser->save();
        return redirect('/dashboard/user/list')->with('flash_message_success', 'product Added Successfully!!');
    }

    public function ExportPDF()
    {
        $data = User::get()->toArray();
        $pdf = PDF::loadView('admin.UserManagement.Users.pdf', compact('data'));
        return $pdf->download('itsolutionstuff.pdf');
    }
    public function ExportExcel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public  function ExportCSV(){
        return Excel::download(new UsersExport, 'users.csv');
    }
    public function editdata($id){
        $shows= User::find($id);
        // dd($shows);
        return view('admin.UserManagement.Users.edit_user')->with(compact('shows'));
    }

        public function usereditdata(Request $request, $id = null){
            $data = $request->all();
            $da = array(
                'Prefix' => $data['Prefix'],
                'First_name' => $data['First_name'],
                'Last_name' => $data['Last_name'],
                'Email' => $data['Email'],
                'Isactive' => $data['Isactive'],
                //
                'Allowlogin' => $data['Allowlogin'],
                'Username' => $data['Username'],
                'Password' => $data['Password'],
                'Confirm_Password' => $data['Confirm_Password'],
                'Role' => $data['Role'],
                // 'Access_location' => $data['Access_location'],
                //
                'Dateof_birth' => $data['Dateof_birth'],
                'Gender' => $data['Gender'],
                'Marital_status' => $data['Marital_status'],
                'Blood_group' => $data['Blood_group'],
                'Mobile_num' => $data['Mobile_num'],
                'Alternate_num' => $data['Alternate_num'],

                'Familycontact_num' => $data['Familycontact_num'],
                'Facebook_link' => $data['Facebook_link'],
                'Twitter_link' => $data['Twitter_link'],
                'Social_media1' => $data['Social_media1'],
                'Social_media2' => $data['Social_media2'],
                'Custom_field1' => $data['Custom_field1'],

                'Custom_field2' => $data['Custom_field2'],
                'Custom_field3' => $data['Custom_field3'],
                'Custom_field4' => $data['Custom_field4'],
                'Guardian_name' => $data['Guardian_name'],
                'Id_name' => $data['Id_name'],
                'ID_proof_number' => $data['ID_proof_number'],
                'Permanent_Address' => $data['Permanent_Address'],
                'Current_Address' => $data['Current_Address']
            );
            DB::table('users')->where('id', $data['id'])->update($da);
            return redirect('/dashboard/user/list');
    }
    public function deleteuser(User $shows, $id = null)
    {
        User::where('id', $id)->delete();
        // Alert::success('Deleated sucessfully', 'Success Message');
        return redirect('/dashboard/user/list');
    }
    public  function ExportPrint(){
        $data = User::get()->toArray();
        return view('admin.UserManagement.Users.print', compact('data'));
        return 0;
    }
    public function View()
    {
        return view('admin.UserManagement.Users.view');
    }

}
