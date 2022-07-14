@extends('Admin.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title" style="position: absolute; top:50%; left:50% ;transform=translate(-50%,-50%);">
                    <h3> Suppliers <small>Manage your Suppliers</small></h3>
                </h3>
                {{-- zoy --}}

                {{-- <i class="fa fa-filter" aria-hidden="true"></i> --}}
                {{-- <button id="y">Toggle between hiding and showing the paragraphs</button> --}}

                {{-- zoy --}}

                <nav aria-label="breadcrumb">
                </nav>

            </div>


            <form method="POST" autocomplete="off" enctype="multipart/form-data" action=""> {{ csrf_field() }}

                <div class="row">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <section class="content">
                                                <div class="box box-primary">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Import/Export Selling Price Group Prices</h3>
                                                    </div>
                                                </div>

                                        </div>


                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="https://pos.ultimatefosters.com/export-selling-price-group"
                                                class="btn btn-primary">Export Selling Price Group Prices</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <form method="POST"
                                                action="https://pos.ultimatefosters.com/import-selling-price-group"
                                                accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token"
                                                    type="hidden" value="DNrq6wjz1dWiBoEz84j4FxHm11op0QJPXrBwPTxD">
                                                <div class="form-group">
                                                    <label for="name">File To Import:</label>
                                                    <input required="required" name="product_group_prices" type="file">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>Instructions:</h4>
                                                <p>
                                                    &bull; Export Selling price group prices. </p>
                                                <p>
                                                    &bull; Update the exported file and import the same file. </p>
                                                <p>
                                                    &bull; Only selling price group prices of the product will be updated.
                                                    Any blank price will be skipped. </p>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- letsend --}}
                                    <br>



                                </div>

                            </div>

                        </div>

                    </div>
                </div>



                <br>






                {{-- end --}}



                {{-- write your code here --}}
                {{-- end --}}
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <h4 class="card-title"><b>All your Suppliers</b></h4>
                            </div>


                            <div class="col-2">
                                <div class="btn-group">
                                    <div class="buttonexport" id="buttonlist">

                                        <button type="button" class="btn btn-add" data-toggle="modal"
                                            data-target=".bd-example-modal-lg"
                                            style="background-color: #392c70; border: none; border-radius: 8px; margin-bottom:2em;color:#fff">

                                            <i class="fa fa-plus" style="color:white"></i>Add</button>
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    {{-- <h3>Add a new contact</h3>
                                                <hr id="hr">
                                                <span aria-hidden="true">×</span> --}}
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Add a new contact</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span></button>

                                                    </div>
                                                    <br>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <strong><label>Contact Type:*</label></strong>
                                                                    <select class="form-control">
                                                                        <option value="">Please select</option>
                                                                        <option value="Suppliers">Suppliers</option>
                                                                        <option value="Customers">Customers</option>
                                                                        <option value="Bot">Both (Supplier & Customer)
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="radio" value="radio1" id="indivi"
                                                                    name="individual">individual
                                                                <input type="radio" value="radio2" id="bus1"
                                                                    name="individual">Business
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <strong> <label>Contact ID:</label></strong>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            {{-- <i class="fa fa-id-badge"></i> --}}

                                                                        </span>
                                                                        <input class="form-control" placeholder="Contact ID"
                                                                            name="Contact_ID" type="text"
                                                                            id="Contact_ID">
                                                                    </div>
                                                                    <p class="help-block">Leave empty to autogenerate</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" id="busin">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <strong> <label>Business Name:</label></strong>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            {{-- <i class="fa fa-id-badge"></i> --}}

                                                                        </span>
                                                                        <input class="form-control"
                                                                            placeholder="Business Name"
                                                                            name="Business-Name" type="text"
                                                                            id="Business-Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- individual --}}
                                                        <div class="row individual">
                                                            <div class="col-md-3 prefix">
                                                                <div class="form-group">
                                                                    <strong> <label>Prefix:</label></strong>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            {{-- <i class="fa fa-id-badge"></i> --}}

                                                                        </span>
                                                                        <input class="form-control"
                                                                            placeholder="MR/ MRS / MISS"
                                                                            name="Prefix-indiv" type="text"
                                                                            id="Prefix-indiv">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 name">
                                                                <div class="form-group">
                                                                    <strong> <label>First Name:*</label></strong>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            {{-- <i class="fa fa-id-badge"></i> --}}

                                                                        </span>
                                                                        <input class="form-control"
                                                                            placeholder="First Name"
                                                                            name="First-Name-indiv" type="text"
                                                                            id="First-Name-indiv">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 l_name">
                                                                <div class="form-group">
                                                                    <strong> <label>Middle name:</label></strong>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            {{-- <i class="fa fa-id-badge"></i> --}}
                                                                        </span>
                                                                        <input class="form-control"
                                                                            placeholder="First Name"
                                                                            name="Middle-name-indiv" type="text"
                                                                            id="Middle-name-indiv">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <strong> <label>Last Name:</label></strong>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            {{-- <i class="fa fa-id-badge"></i> --}}
                                                                        </span>
                                                                        <input class="form-control"
                                                                            placeholder="First Name"
                                                                            name="Last-Name-indiv" type="text"
                                                                            id="Last-Name-indiv">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <strong><label>Mobile:*</label></strong>
                                                                    <input class="form-control" placeholder="mobile"
                                                                        name="Mobile" type="text" id="Mobile">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <strong><label>Alternate contact
                                                                            number:</label></strong>
                                                                    <input class="form-control"
                                                                        placeholder="Alternate Mobile"
                                                                        name="Alternate-Mobile" type="text"
                                                                        id="Alternate-Mobile">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <strong><label>Landline:</label></strong>
                                                                    <input class="form-control" placeholder="Landline"
                                                                        name="Landline" type="text" id="Landline">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <strong><label>Email:</label></strong>
                                                                    <input class="form-control" placeholder="Email"
                                                                        name="Email" type="text" id="Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row individual">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <strong><label>Date of birth:</label></strong>
                                                                    <input class="form-control" placeholder="Email"
                                                                        name="Date-of-birth-indiv" type="date"
                                                                        id="Date-of-birth-indiv">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <center><button type="button" id="buttonone"
                                                                        class="btn btn-primary ">More
                                                                        Information</button></center>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div id="divone">
                                                            <hr
                                                                style="height: 1px;boder-width:0;color:black;background-color:black">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <strong> <label>Tax Number:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Tax Number" name="Tax-Number"
                                                                            type="text" id="Tax-Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <strong> <label>Opening Balance:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Opening Balance"
                                                                            name="Opening-Balance" type="text"
                                                                            id="Opening-Balance">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <strong> <label>Pay term:</label></strong>
                                                                        <input class="form-control" placeholder="Pay term"
                                                                            name="Pay-term" type="text"
                                                                            id="Pay-term">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <strong> <label>Pay term:</label></strong>
                                                                        <select class="form-control">
                                                                            <option value="Please select">Please select
                                                                            </option>
                                                                            <option value="Months">Months</option>
                                                                            <option value="Week">Week</option>
                                                                            <option value="Day">Day</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr
                                                                style="height: 1px;boder-width:0;color:black;background-color:black">
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <strong> <label>Address line 1:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Address line 1"
                                                                            name="Address-line-1" type="text"
                                                                            id="Address-line-1">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <strong> <label>Address line 2:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Address line 2:"
                                                                            name="Address-line-2:" type="text"
                                                                            id="Address-line-2">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>City:</label></strong>
                                                                        <input class="form-control" placeholder="City"
                                                                            name="City" type="text" id="City">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>State:</label></strong>
                                                                        <input class="form-control" placeholder="State"
                                                                            name="State" type="text" id="State">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Country:</label></strong>
                                                                        <input class="form-control" placeholder="Country"
                                                                            name="Country" type="text" id="Country">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Zip Code:</label></strong>
                                                                        <input class="form-control" placeholder="Zip Code"
                                                                            name="Zip-Code" type="text"
                                                                            id="Zip-Code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr
                                                                style="height: 1px;boder-width:0;color:black;background-color:black">
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 1:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 1"
                                                                            name="Custom-Field-1" type="text"
                                                                            id="Custom-Field-1">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 2:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 2"
                                                                            name="Custom Field 2" type="text"
                                                                            id="Custom Field 2">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 3:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 3"
                                                                            name="Custom Field 3" type="text"
                                                                            id="Custom Field 3">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 4:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 4"
                                                                            name="Custom Field 4" type="text"
                                                                            id="Custom Field 4">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 5:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 5"
                                                                            name="Custom-Field-5" type="text"
                                                                            id="Custom-Field-5">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 6:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 6"
                                                                            name="Custom Field 6" type="text"
                                                                            id="Custom Field 6">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 7:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 7"
                                                                            name="Custom Field 7" type="text"
                                                                            id="Custom Field 7">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 8:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 8"
                                                                            name="Custom Field 8" type="text"
                                                                            id="Custom Field 8">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 9:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 9"
                                                                            name="Custom-Field-9" type="text"
                                                                            id="Custom-Field-9">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <strong><label>Custom Field 10:</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Custom Field 10"
                                                                            name="Custom Field 10" type="text"
                                                                            id="Custom Field 10">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr
                                                                style="height: 1px;boder-width:0;color:black;background-color:black">
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <strong><label>Shipping Address</label></strong>
                                                                        <input class="form-control"
                                                                            placeholder="Shipping Address"
                                                                            name="Shipping-Address" type="text"
                                                                            id="Shipping-Address">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <center><button type="button" id="buttontwo"
                                                                        class="btn btn-primary ">Add
                                                                        Contact Person</button></center>
                                                            </div>
                                                        </div>

                                                        {{-- 1st person --}}
                                                        <div class="row" id="">
                                                            <div class="container">
                                                                <hr id="hrline"
                                                                    style="height: 1px;boder-width:0;color:black;background-color:black">

                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <button type="button" class="btn btn-primary"
                                                                            id="personone">Add contact person 1
                                                                            <i class="fa fa-chevron-down"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div class="row" id="divtwo">
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-2 ">
                                                                        <div class="form-group">
                                                                            <strong> <label>Prefix:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Mr / Mrs / Miss"
                                                                                name="cp1-prefix" type="text"
                                                                                id="cp1-prefix">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 ">
                                                                        <div class="form-group">
                                                                            <strong><label>First Name:*</label></strong>
                                                                            <input class="form-control" required=""
                                                                                placeholder="First Name"
                                                                                name="cp1-first_name" type="text"
                                                                                id="cp1-first_name" aria-required="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 ">
                                                                        <div class="form-group">
                                                                            <strong> <label>Last Name:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Last Name"
                                                                                name="cp1-Last-Name" type="text"
                                                                                id="cp1-Last-Name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Email:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Email" name="cp1-Email"
                                                                                type="text" id="cp1-Email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Mobile Number:*</label></strong>
                                                                            <div class="input-group">
                                                                                {{-- <span class="input-group-addon">
                                                                            </span> --}}
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Mobile Number"
                                                                                    name="cp1-mobile-number"
                                                                                    type="text" id="cp1-mobile-number"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Alternate contact
                                                                                    number:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Alternate contact number"
                                                                                name="cp1-Alternate-contact-number"
                                                                                type="text"
                                                                                id="cp1-Alternate-contact-number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Family contact
                                                                                    number:*</label></strong>
                                                                            <div class="input-group">
                                                                                {{-- <span class="input-group-addon">
                                                                            </span> --}}
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Family contact number"
                                                                                    name="cp1-Family-contact-number:"
                                                                                    type="text"
                                                                                    id="cp1-Family-contact-number"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Department:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Department"
                                                                                name="cp1-Department" type="text"
                                                                                id="cp1-Department">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Designation:</label></strong>
                                                                            <div class="input-group">
                                                                                {{-- <span class="input-group-addon">
                                                                            </span> --}}
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Designation"
                                                                                    name="cp1-Designation:" type="text"
                                                                                    id="cp1-Designation"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="checkbox" id="prsn1"
                                                                                name="prsn1" value="loginps1">
                                                                            <label for="vehicle1"> Allow login</label><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row person1">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>User Name:*</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="User Name"
                                                                                name="cp1-User-Name" type="text"
                                                                                id="cp1-User-Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Password:*</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Password"
                                                                                    name="cp1-Password" type="text"
                                                                                    id="cp1-Password"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row person1">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Confirm
                                                                                    Password:*</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Confirm Password"
                                                                                name="cp1-Confirm-Password" type="text"
                                                                                id="cp1-Confirm-Password">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- end --}}
                                                        {{-- 2nd person --}}

                                                        <div class="row">
                                                            <div class="container">
                                                                <hr id="hrline"
                                                                    style="height: 1px;boder-width:0;color:black;background-color:black">

                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <button type="button" class="btn btn-primary"
                                                                            id="persontwo">Add
                                                                            contact person 2
                                                                            <i class="fa fa-chevron-down"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div class="row"id="div3">
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-2 ">
                                                                        <div class="form-group">
                                                                            <strong> <label>Prefix:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Mr / Mrs / Miss"
                                                                                name="cp2-prefix" type="text"
                                                                                id="cp2-prefix">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 ">
                                                                        <div class="form-group">
                                                                            <strong> <label>First Name:*</label></strong>
                                                                            <input class="form-control" required=""
                                                                                placeholder="First Name"
                                                                                name="cp2-first_name" type="text"
                                                                                id="cp2-first_name" aria-required="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 ">
                                                                        <div class="form-group">
                                                                            <strong> <label>Last Name:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Last Name"
                                                                                name="cp2-Last Name" type="text"
                                                                                id="cp2-Last Name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Email:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Email" name="cp2-Email"
                                                                                type="text" id="cp2-Email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Mobile Number:*</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Mobile Number"
                                                                                    name="cp2-mobile-number"
                                                                                    type="text" id="cp2-mobile-number"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Alternate contact
                                                                                    number:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Alternate contact number"
                                                                                name="cp2-Alternate-contact-number"
                                                                                type="text"
                                                                                id="cp2-Alternate-contact-number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Family contact
                                                                                    number:*</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Family contact number"
                                                                                    name="cp2-Family-contact-number:"
                                                                                    type="text"
                                                                                    id="cp2-Family-contact-number"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Department:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Department"
                                                                                name="cp2-Department" type="text"
                                                                                id="cp2-Department">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Designation:</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Designation"
                                                                                    name="cp2-Designation:" type="text"
                                                                                    id="cp2-Designation"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="checkbox" id="prsn2"
                                                                                name="prsn2" value="loginps2">
                                                                            <label for="vehicle1"> Allow login</label><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row person2">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>User Name:*</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="User Name"
                                                                                name="cp2-User-Name" type="text"
                                                                                id="cp2-User-Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Password:*</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Password"
                                                                                    name="cp2-Password" type="text"
                                                                                    id="cp2-Password"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row person2">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Confirm
                                                                                    Password:*</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Confirm Password"
                                                                                name="cp2-Confirm-Password" type="text"
                                                                                id="cp2-Confirm-Password">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- end --}}
                                                        {{-- 3rd person --}}

                                                        <div class="row">
                                                            <div class="container">
                                                                <hr id="hrline"
                                                                    style="height: 1px;boder-width:0;color:black;background-color:black">
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <button type="button" class="btn btn-primary"
                                                                            id="personthree">Add
                                                                            contact person 3
                                                                            <i class="fa fa-chevron-down"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div class="row"id="div4">
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-2 ">
                                                                        <div class="form-group">
                                                                            <strong> <label>Prefix:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Mr / Mrs / Miss"
                                                                                name="cp3-prefix" type="text"
                                                                                id="cp3-prefix">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 ">
                                                                        <div class="form-group">
                                                                            <strong> <label>First Name:*</label></strong>
                                                                            <input class="form-control" required=""
                                                                                placeholder="First Name"
                                                                                name="cp3-first_name" type="text"
                                                                                id="cp3-first_name" aria-required="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 ">
                                                                        <div class="form-group">
                                                                            <strong><label>Last Name:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Last Name"
                                                                                name="cp3-Last Name" type="text"
                                                                                id="cp3-Last Name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Email:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Email" name="cp3-Email"
                                                                                type="text" id="cp3-Email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Mobile Number:*</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Mobile Number"
                                                                                    name="cp3-mobile-number"
                                                                                    type="text" id="cp3-mobile-number"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Alternate contact
                                                                                    number:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Alternate contact number"
                                                                                name="cp3-Alternate-contact-number"
                                                                                type="text"
                                                                                id="cp3-Alternate-contact-number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Family contact
                                                                                    number:*</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Family contact number"
                                                                                    name="cp3-Family-contact-number:"
                                                                                    type="text"
                                                                                    id="cp3-Family-contact-number"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Department:</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Department"
                                                                                name="cp3-Department" type="text"
                                                                                id="cp3-Department">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Designation:</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Designation"
                                                                                    name="cp3-Designation:" type="text"
                                                                                    id="cp3-Designation"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="checkbox" id="prsn3"
                                                                                name="prsn3" value="loginps3">
                                                                            <label for="vehicle1"> Allow login</label><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row person3">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>User Name:*</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="User Name"
                                                                                name="cp3-User-Name" type="text"
                                                                                id="cp3-User-Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong><label>Password:*</label></strong>
                                                                            <div class="input-group">
                                                                                <input class="form-control" required=""
                                                                                    placeholder="Password"
                                                                                    name="cp3-Password" type="text"
                                                                                    id="cp3-Password"
                                                                                    aria-required="true">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container mt-3">
                                                                <div class="row person3">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <strong> <label>Confirm
                                                                                    Password:*</label></strong>
                                                                            <input class="form-control"
                                                                                placeholder="Confirm Password"
                                                                                name="cp3-Confirm-Password" type="text"
                                                                                id="cp3-Confirm-Password">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end --}}
                                                    <hr id="hr">
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="table-responsive">
                            {{-- <table id="order-listing" class="table"> --}}
                                {{-- YHN SA START KRNA HY BYTAAAA --}}
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>


    <!-- content-wrapper ends -->
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $("#divone").hide();
        $("#divtwo").hide();
        $("#div3").hide();
        $("#div4").hide();
        $("#personone,#persontwo,#personthree").hide();
        $("hr").hide();
        $("#busin").hide();
        $(".individual").hide();
        $(".person1").hide();
        $(".person2").hide();
        $(".person3").hide();



        $("#buttonone").click(function() {
            $("#divone").toggle();
        });
        $("#buttontwo").click(function() {
            $("#personone,#persontwo,#personthree").show();
            $("hr").show();
        });
        $("#buttontwo,#personone").click(function() {
            $("#divtwo").toggle();
        });
        $("#persontwo").click(function() {
            $("#div3").toggle();
        });
        $("#personthree").click(function() {
            $("#div4").toggle();
        });
        $("#bus1").click(function() {
            $("#busin").show();
            $(".individual").hide();
        });
        $("#indivi").click(function() {
            $(".individual").show();
            $("#busin").hide();
        });
        $("#prsn1").click(function() {
            $(".person1").toggle();
        });
        $("#prsn2").click(function() {
            $(".person2").toggle();
        });
        $("#prsn3").click(function() {
            $(".person3").toggle();
        });

    });
</script>








{{-- rff --}}
<!-- partial:../../partials/_footer.html -->

<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../vendors/js/vendor.bundle.base.js"></script>
<script src="../../vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/misc.js"></script>
<script src="../../js/settings.js"></script>
<script src="../../js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../../js/data-table.js"></script>
<!-- End custom js for this page-->
</div>
