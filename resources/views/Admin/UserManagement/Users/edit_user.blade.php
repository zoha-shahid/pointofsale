@extends('Admin.layouts.master')
@section('content')
    <!-- partial -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Add User
                </h3>
            </div>
            <form method="POST" autocomplete="off" enctype="multipart/form-data" action=""> {{ csrf_field() }}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <div class="row">
                                    {{-- hiden --}}

                                            <input type="hidden" class="form-control" name="id" value="{{$shows->id}}" >

                                        {{-- end --}}
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="surname">Prefix:</label>
                                            <input class="form-control" placeholder="Mr / Mrs / Miss" name="Prefix"
                                                type="text" value="{{$shows->Prefix}}" id="Prefix">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="first_name">First Name:*</label>
                                            <input class="form-control" required placeholder="First Name"
                                                name="First_name" type="text" value="{{$shows->First_name}}" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="last_name">Last Name:</label>
                                            <input class="form-control" placeholder="Last Name"  name="Last_name"
                                                type="text" value="{{$shows->Last_name}}" id="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="email">Email:*</label>
                                            <input class="form-control" required placeholder="Email" name="Email"
                                                type="text" value="{{$shows->Email}}" id="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <br />
                                                <label>
                                                    <input class="input-icheck status"  name="Isactive"type="hidden" value="in active">
                                                    <input class="input-icheck status" name="Isactive"type="checkbox" value="active"> Is active ?
                                                </label>
                                                <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                    data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                    data-content="Check/Uncheck to make a user active/inactive."
                                                    data-html="true" data-trigger="hover"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end --}}
                    </div>
                </div>
            </div>
            {{-- row --}}
            {{-- second part --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <h4>Roles and Permissions</h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>
                                                <input class="input-icheck status" name="Allowlogin"type="hidden" value="notLogin">
                                                <input class="input-icheck status" name="Allowlogin"type="checkbox" value="Login"> Allow Login
                                            </label>
                                            {{-- <input class="input-icheck status" checked="checked" name="is_active"
                                                type="checkbox" value="active">Allow Login --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Username">Username:</label>
                                            <input class="form-control" placeholder="Username" name="Username" type="text"
                                            value="{{$shows->Username}}"   id="Username">
                                            <p>Leave blank to auto generate username</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Password">Password:*</label>
                                            <input class="form-control" required placeholder="Password" name="Password"
                                                type="password"  value="{{$shows->Password}}"  id="Password:">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Confirm Password">Confirm Password:*</label>
                                            <input class="form-control" placeholder="Confirm Password"
                                                name="Confirm_Password"  value="{{$shows->Confirm_Password}}"  type="password" id="Confirm_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Role:*</label>
                                            <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                data-content="Check/Uncheck to make a user active/inactive."
                                                data-html="true" data-trigger="hover"></i>
                                            <select name="Role" id="" class="form-control">
                                                <option value="Admin">Admin</option>
                                                <option value="Cashier">Cashier</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Access locations </label>
                                            <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                data-content="Check/Uncheck to make a user active/inactive."
                                                data-html="true" data-trigger="hover"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>
                                                <input class="checkbox" name="Access_location" value="{{$shows->Access_location}}" type="checkbox" value="Bike">All Locations
                                            </label>
                                            <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                data-content="Check/Uncheck to make a user active/inactive."
                                                data-html="true" data-trigger="hover"></i>
                                            <br>

                                            <input class="checkbox" name="Access_location" value="{{$shows->Access_location}}" type="checkbox" value="Car">Awesome Shop<br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- end --}}
            {{-- 3rd part --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <h4>Sales</h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Sales_Commission">Sales Commission Percentage (%):</label>
                                            <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                data-content="Check/Uncheck to make a user active/inactive."
                                                data-html="true" data-trigger="hover"></i>
                                            <input class="form-control" placeholder="Sales Commission Percentage (%)"
                                                name="Sales_Commission"  value="{{$shows->Sales_Commission}}" type="text" id="Sales_Commission">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="discount_percent">Max sales discount percent:</label>
                                            <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                data-content="Check/Uncheck to make a user active/inactive."
                                                data-html="true" data-trigger="hover"></i>
                                            <input class="form-control" placeholder="Max sales discount percent:"
                                                name="discount_percent" value="{{$shows->discount_percent}}" type="text" id="discount_percent">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <br/>
                                                <label>
                                                    <input class="input-icheck status" checked="checked" name="is_active" value="{{$shows->is_active}}"
                                                    type="checkbox" > Allow Selected Contacts
                                                </label>
                                                <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                    data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                    data-content="Check/Uncheck to make a user active/inactive."
                                                    data-html="true" data-trigger="hover"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Select_Contacts:">Select Contacts:</label>
                                            <input class="form-control" name="Select_Contacts:" type="text"
                                                id="Select_Contacts:" value="{{$shows->Select_Contacts}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 4th part --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <h4>More Informations</h4><br><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Date_of_birth">Date of birth:</label>
                                            <input class="form-control" placeholder="Date of birth" name="Dateof_birth"
                                                type="date" id="Date_of_birth"  value="{{$shows->Dateof_birth}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Gender">Gender:</label>
                                            <select name="Gender" id="" class="form-control">
                                                <option value="Please select">Please select</option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                                <option value="others">others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Marital_Status">Marital Status:</label>
                                            <select name="Marital_status" id="" class="form-control">
                                                <option value="Marital Status">Marital Status</option>
                                                <option value="Married">Married</option>
                                                <option value="unMarried">UnMarried</option>
                                                <option value="Divorced">Divorced</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Blood_Group">Blood Group:</label>
                                            <input class="form-control" placeholder="Blood Group" name="Blood_group"
                                                type="text" id="Blood_Group"  value="{{$shows->Blood_group}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Mobile_Number">Mobile Number:</label>
                                            <input class="form-control" placeholder="Mobile Number" name="Mobile_num"
                                                type="number" id="Mobile_Number"  value="{{$shows->Mobile_num}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Alternate">Alternate contact number:</label>
                                            <input class="form-control" placeholder=" Alternate Mobile Number"
                                                name="Alternate_num" value="{{$shows->Alternate_num}}" type="number" id="Alternate">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="family_Number">Family contact number:</label>
                                            <input class="form-control" placeholder="family contact Number "
                                                name="Familycontact_num"  value="{{$shows->Familycontact_num}}" type="number" id="family_Number">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Facebook_Link">Facebook Link:</label>
                                            <input class="form-control" placeholder="Facebook Link" name="Facebook_link"
                                                type="text"  value="{{$shows->Facebook_link}}" id="Facebook_Link">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Twitter_Link">Twitter Link:</label>
                                            <input class="form-control" placeholder="Twitter Link" name="Twitter_link"
                                                type="text" value="{{$shows->Twitter_link}}"  id="Twitter_Link">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Social_Media_1">Social Media 1:</label>
                                            <input class="form-control" placeholder="Social Media 1"
                                                name="Social_media1"  value="{{$shows->Social_media1}}" type="text" id="Social_Media_1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Social_Media_2">Social Media 2:</label>
                                            <input class="form-control" placeholder="Social Media 2"
                                                name="Social_media2"   value="{{$shows->Social_media2}}" type="text" id="Social_Media_2">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Custom_field_1">Custom field 1:</label>
                                            <input class="form-control" placeholder="Custom field 1"
                                                name="Custom_field1"  value="{{$shows->Custom_field1}}" type="text" id="Custom_field_1">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Custom_field_2">Custom field 2:</label>
                                            <input class="form-control" placeholder="Custom field 2"
                                                name="Custom_field2" value="{{$shows->Custom_field2}}" type="text" id="Custom_field_2">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Custom_field_3">Custom field 3:</label>
                                            <input class="form-control" placeholder="Custom field 3"
                                                name="Custom_field3" value="{{$shows->Custom_field3}}" type="text" id="Custom_field_3">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Custom_field_4">Custom field 4</label>
                                            <input class="form-control" placeholder="Custom field 4"
                                                name="Custom_field4"  value="{{$shows->Custom_field4}}" type="text" id="Custom_field_4">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Guardian_Name">Guardian Name:</label>
                                            <input class="form-control" placeholder="Guardian Name" name="Guardian_name"
                                                type="text"  value="{{$shows->Guardian_name}}" id="Guardian_Name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ID_proof_name">ID proof name:</label>
                                            <input class="form-control" placeholder="ID proof name:" name="Id_name"
                                                type="text"  value="{{$shows->Id_name}}" id="ID_proof_name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ID_proof_number">ID proof number:</label>
                                            <input class="form-control" placeholder="ID proof number:"
                                                name="ID_proof_number"  value="{{$shows->ID_proof_number}}" type="text" id="ID proof number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="permanent_address">Permanent Address:</label>
                                        <textarea class="form-control" placeholder="Permanent Address"   rows="3" name="Permanent_Address" cols="50"
                                            id="permanent_address"> value="{{$shows->Permanent_Address}}"</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Current_Address">Current Address:</label>
                                        <textarea class="form-control" placeholder="Current Address"  rows="3" cols="50" name="Current_Address"
                                            id="Current_Address">  value="{{$shows->Current_Address}}"</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 5th part --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <h4>Bank Details:</h4><br><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Account_Holder's_Name">Account Holder'sName:</label>
                                            <input class="form-control" placeholder="Account Holder's Name"
                                                name="Account_Holders_Name" value="{{$shows->Account_Holders_Name}}" type="text" id="Account_Holder's_Name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Account_Number">Account Number:</label>
                                            <input class="form-control" placeholder="Account Number"
                                                name="Account_Number"  value="{{$shows->Account_Number}}" type="text" id="Account_Number">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Bank_Name">Bank Name:</label>
                                            <input class="form-control" placeholder="Bank Name" name="Bank_Name"
                                                type="text"  value="{{$shows->Bank_Name}}" id="Bank_Name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Bank_Identifier_Code">Bank Identifier Code:</label>
                                            <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                data-content="Check/Uncheck to make a user active/inactive."
                                                data-html="true" data-trigger="hover"></i>
                                            <input class="form-control" placeholder="Bank Identifier Code"
                                                name="Bank_Identifier_Code" value="{{$shows->Bank_Identifier_Code}}" type="text" id="Bank_Identifier_Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Branch">Branch:</label>
                                            <input class="form-control" placeholder="Branch" name="Branch" type="text"
                                                id="Branch"  value="{{$shows->Branch}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Tax_Payer_ID">Tax Payer ID:</label>
                                            <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                data-content="Check/Uncheck to make a user active/inactive."
                                                data-html="true" data-trigger="hover"></i>
                                            <input class="form-control" placeholder="Tax Payer ID" name="Tax_Payer_ID"
                                                type="text" id="Tax_Payer_ID" value="{{$shows->Tax_Payer_ID}}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 6th part --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <h4>HRM Details</h4><br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Department">Department:</label>
                                            <select name="Department" id="" class="form-control">
                                                <option value="Please select">Please select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Designation:">Designation:</label>
                                            <select name="Designation:" id="" class="form-control">
                                                <option value="Please select">Please select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 7th part --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <h4>Payroll</h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Primary_work_location">Primary work location:</label>
                                            <select name="Primary_work_location" id="" class="form-control">
                                                <option value="Please select">Please select</option>
                                                <option value="Awesome shop">Awesome shop</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="Basic_salary:">Basic salary:</label>
                                            <input class="form-control" placeholder="Basic_salary" name="Basic_salary"
                                                type="text" id="Basic_salary"  value="{{$shows->Basic_salary}}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="Basic_salary:">Basic salary:</label>
                                            <select name="Basic_salary" id="" class="form-control">
                                                <option value="Per Month">Per Month</option>
                                                <option value="Per Week">Per Week</option>
                                                <option value="Per Day">Per Day</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Pay_Components">Pay Components:</label>
                                            <input class="form-control" placeholder="Pay Components:"
                                                name="Pay_Components" type="text" value="{{$shows->Pay_Components}}" id="Pay_Components">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-big" style="height: 50px;
                  width: 110px;" id="submit_user_button">Save</button>
                </div>
              </div>
            </form>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
