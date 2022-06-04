<?php

namespace App\Http\Controllers\admincontroller;

use App\Models\adduser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class usercontroller extends Controller
{
    public function adduser(Request $request)
    {
        //  return $request;
        $data = $request->all();
        //  dd($data);
        $adduser = new adduser;
        $adduser->Prefix = $data['Prefix'];
        $adduser->First_name= $data['First_name'];
        $adduser->Last_name = $data['Last_name'];
        $adduser->Email = $data['Email'];
        $adduser->Isactive = $data['Isactive'];
         $adduser->Allowlogin= $data['Allowlogin'];
        $adduser->Username = $data['Username'];
        $adduser->Password= $data['Password'];
        $adduser->Confirm_Password= $data['Confirm_Password'];
        $adduser->Role = $data['Role'];
        $adduser->Access_location= $data['Access_location'];
        $adduser->Dateof_birth = $data['Dateof_birth'];
        $adduser->Gender = $data['Gender'];
        $adduser->Marital_status = $data['Marital_status'];
        $adduser->Blood_group = $data['Blood_group'];
        $adduser->Mobile_num = $data['Mobile_num'];
        $adduser->Alternate_num= $data['Alternate_num'];
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
        return redirect('/addusers')->with('flash_message_success', 'product Added Successfully!!');
    }
// for view data of user page
public function viewUser()
{
    $shows = adduser::get();
    return view('admin.usermanagment.view_User')->with(compact('shows'));
}


}
