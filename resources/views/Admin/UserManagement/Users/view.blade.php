@extends('Admin.layouts.master')
@section('content')
    {{-- <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="fB1Mfn2lVCmdcWg0HJyDEnePQ8WWHfnUh1vghPiM">
    <link rel="stylesheet" href="{{ asset('https://pos.ultimatefosters.com/css/vendor.css?v=477') }}">
    <!-- app css -->
    <link rel="stylesheet" href="{{ asset('https://pos.ultimatefosters.com/css/app.css?v=477') }}">
    <title>View User - Awesome Shop</title>
</head> --}}
    {{-- <div class="wrapper thetop">
        <!-- Content Wrapper. Contains page content -->
        <div class=" content-wrapper ">
            <!-- empty div for vuejs -->
            <div id="app">
                <input type="hidden" id="view_export_buttons">
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>View User</h3>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control select2" id="user_id" name="user_id">
                                <option value="1" selected="selected">Mr Admin </option>
                                <option value="2">Mr Demo Cashier</option>
                                <option value="3">Mr. Demo Admin</option>
                                <option value="9">Mr. Super Admin</option>
                                <option value="10">Mr. WooCommerce User</option>
                                <option value="11">Mr Admin Essential </option>
                            </select>
                        </div>

                    </div>

            </div>
        </div>
        </body> --}}

    <div class="container-fluid" style="background-color: #f7f7f7">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3 style="margin-top: 30px" >View User</h3>
                </div>
                <div class="col-4">
                    <select class="form-control select2" id="user_id" name="user_id" style="margin-top: 30px">
                        <option value="1" selected="selected">Mr Admin </option>
                        <option value="2">Mr Demo Cashier</option>
                        <option value="3">Mr. Demo Admin</option>
                        <option value="9">Mr. Super Admin</option>
                        <option value="10">Mr. WooCommerce User</option>
                        <option value="11">Mr Admin Essential </option>
                    </select>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">

                    <div class="col-4">
                        {{-- <div class="box-body box-profile"> --}}
                        <div class="card" style="width: 18rem;">

                            <img class=" rounded profile-user-img img-responsive" style="height: 100px;
                                                                        margin-top: 15px;"
                                src="https://ui-avatars.com/api/?name=Admin" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="profile-username text-center">
                                    Mr Admin
                                </h3>

                                <p class="text-muted text-center" title="Role">
                                    Admin
                                </p>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Username</b>
                                        <a class="pull-right">admin</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b>
                                        <a class="pull-right"><span class="cf_email"
                                                data-cfemail="4021242d292e002538212d302c256e232f2d">[email&#160;protected]</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Is active ?</b>
                                        <span class="label label-success pull-right">
                                            Active </span>
                                    </li>
                                </ul>
                                <a href="https://pos.ultimatefosters.com/users/1/edit" class="btn btn-primary btn-block">
                                    <i class="glyphicon glyphicon-edit"></i>
                                    Edit </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">

                <div class="nav-tabs-custom">
                        <ul class="nav nav-pills mb-3 nav nav-tabs nav-justified" id="pills-tab" role="tablist" >
                            <li class="nav-item active">
                                <a href="#user_info_tab" data-toggle="tab" aria-expanded="true"><i class="fas fa-user" aria-hidden="true"></i> User Information</a>
                                {{-- <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">User Information</a> --}}
                            </li>

                            <li class="nav-item">
                                <a href="#documents_and_notes_tab" data-toggle="tab" aria-expanded="true"><i class="fas fa-paperclip" aria-hidden="true"></i> Documents & Note</a>
                                {{-- <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Documents & Note</a> --}}
                            </li>
                            <li class="nav-item">
                                <a href="#activities_tab" data-toggle="tab" aria-expanded="true"><i class="fas fa-pen-square" aria-hidden="true"></i> Activities</a>
                                {{-- <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Activites</a> --}}
                            </li>

                        </ul>

                        <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">


                                <div class="container tab-content">
                                    <div class="tab-pane active" id="user_info_tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <p><strong>Sales Commission Percentage (%): </strong> 0.00%</p>
                                        </div>
                                        <div class="col-6">
                                            <strong>Allowed Contacts: </strong>
                                            {{-- <p>Allowed Contacts: All</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>More Informations</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">

                                            <div class="col-md-4">
                                                <p><strong>Date of birth:</strong> </p>
                                                <p><strong>Gender:</strong> </p>
                                                <p><strong>Marital Status:</strong> </p>
                                                <p><strong>Blood Group:</strong> </p>
                                                <p><strong>Mobile Number:</strong> </p>
                                                <p><strong>Alternate contact number:</strong> </p>
                                                <p><strong>Family contact number:</strong> </p>
                                            </div>
                                            {{-- <p>Date of birth:</p>
                                            <p>Gender:</p>
                                            <p>Marital Status:</p>
                                            <p> Blood Group:</p>
                                            <p>Mobile Number:</p>
                                            <p> Alternate contact number:</p>
                                            <p>Family contact number:</p>
                                            <p>ID proof name:</p> --}}


                                        <div class="col-md-4">
                                            <p><strong>Facebook Link:</strong> </p>
                                            <p><strong>Twitter Link:</strong> </p>
                                            <p><strong>Social Media 1:</strong> </p>
                                            <p><strong>Social Media 2:</strong> </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Custom field 1:</strong> </p>
                                            <p><strong>Custom field 2:</strong> </p>
                                            <p><strong>Custom field 3:</strong> </p>
                                            <p><strong>Custom field 4:</strong> </p>
                                        </div>
                                        {{-- <div class="col-4">
                                            <p> Custom field 1:</p>
                                            <p>Custom field 2:</p>
                                            <p> Custom field 3:</p>
                                            <p> Custom field 4:</p>
                                        </div> --}}
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                                <div class="clearfix"></div>
                                                <div class="col-md-4">
                                                    <p><strong>ID proof name:</strong>
                                                    </p>
                                                </div>

                                                <div class="col-md-4">
                                                    <p><strong>ID proof number:</strong>
                                                    </p>
                                                </div>
                                        </div>
                                                {{-- <hr> --}}
                                            </div>

                                            </div>
                                        </div>
                                    </div>


                                <div class="row">
                                    {{-- <div class="col-6">
                                        <p>Permanent Address:</p>
                                    </div> --}}
        <div class="clearfix"></div>
		<hr>
		<div class="col-md-6">
			<strong>Permanent Address:</strong><br>
			<p></p>
		</div>
                                    {{-- <div class="col-6">
                                        <p>Current Address:</p>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <strong>Current Address:</strong><br>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
		<hr>
        <div class="row">
		<div class="col-md-12">
			<h4>Bank Details:</h4>
		</div>
                                {{-- <hr> --}}
                                {{-- <div class="row">
                                    <div class="col-4">
                                        <b>Bank Details:</b>
                                    </div>
                                </div>
                                <br> --}}

                                    {{-- <div class="col-4">
                                        <p>Account Holder's Name:</p>
                                        <p>Account Number:</p>
                                    </div> --}}
                                    <div <div class="container">


                                    <div class="row">
                                    <div class="col-md-4">
                                        <p><strong>Account Holder's Name:</strong> </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><strong>Bank Name:</strong> </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><strong>Branch:</strong> </p>
                                    </div>
                                </div>
        </div>

                                    {{-- rfff --}}
                                    <div class="col-md-4">
                                        {{-- <p>Bank Name:</p>
                                        <p>Bank Identifier Code:</p> --}}
                                        <p><strong>Bank Name:</strong> </p>
			<p><strong>Bank Identifier Code:</strong> </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><strong>Branch:</strong> </p>
                                        <p><strong>Tax Payer ID:</strong> </p>
                                    </div>
                                </div>
                                {{-- <hr>
                                <div class="row">
                                     --}}
                                     <div class="clearfix"></div>
                                     <hr>

                                     <div class="col-md-12">
                                         <h4>HRM Details:</h4>
                                     </div>
                                     <div class="col-md-12">
                                         <p><strong>Department:</strong> </p>
                                         <p><strong>Designation:</strong> </p>
                                         <p>
                                             <strong>Basic salary:</strong>
                                                 </p>

                                         <p>
                                             <strong>Pay Cycle:</strong>
                                                 </p>
                                         <p>
                                             <strong>Primary work location:</strong>
                                                         All locations
                                                 </p>
                                     </div>
                                                           </div>
                                     </div>                        </div>
                                    {{-- <div class="col-4">
                                        <b> HRM Details:</b>
                                        <p> Department:</p>
                                        <p> Designation:</p>
                                        <p>Basic salary:</p>
                                        <p>Pay Cycle:</p>
                                        <p>Primary work location: All locations</p>
                                    </div>
                                </div> --}}
{{-- zoii --}}
                                </div>
                                {{-- zoi end --}}
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-12">

                                            <table id="document" class="table">
                                              <thead>
                                                <a href="{{ URL::to('dashboard/user/pdf') }}">
                                                    <button type="button" class="btn btn-danger btn-sm"> <i
                                                            class="far fa-file-pdf"></i> PDF</button>
                                                </a>
                                                <a href="{{ URL::to('dashboard/user/excel') }}">
                                                    <button type="button" class="btn btn-success btn-sm"><i
                                                            class="far fa-file-excel"></i> Excel</button>
                                                </a>
                                                <a href="{{ URL::to('dashboard/user/csv') }}">
                                                    <button type="button" class="btn btn-success btn-sm"><i
                                                            class="far fa-file"></i> CSV</button>
                                                </a>
                                                <a href="/add" class="btn btn-primary float-right">Add</a>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                    <th>By</th>
                                                    <th>Note</th>

                                                </tr>
                                              </thead>


                                      </table>
                                    </div>
                                    <div class="col-md-6">


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="row">

                                    <div class="table-responsive">
                                        <table id="activities" class="table">
                                          <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Action</th>
                                                <th>By</th>
                                                <th>Note</th>

                                            </tr>
                                          </thead>

                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
{{-- zoi --}}
    </div>
{{-- end --}}
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
   $(document).ready(function () {
            $('#document').DataTable();
        });
        </script>

@endsection
