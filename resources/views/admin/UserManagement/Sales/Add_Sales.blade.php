@extends('Admin.layouts.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Add sales commission agent
                </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="surname">Prefix:</label>
                                            <input class="form-control" placeholder="Mr / Mrs / Miss" name="surname"
                                                type="text" id="surname">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="first_name">First Name:*</label>
                                            <input class="form-control" required placeholder="First Name"
                                                name="first_name" type="text" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="last_name">Last Name:</label>
                                            <input class="form-control" placeholder="Last Name" name="last_name"
                                                type="text" id="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="email">Email:*</label>
                                            <input class="form-control" required placeholder="Email" name="email"
                                                type="text" id="email">
                                        </div>
                                    </div>

                                   {{-- zoi --}}
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Contact Number:*</label>
                                        <input class="form-control" required placeholder="Contact Number" name="number"
                                            type="text" id="number">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="permanent_address"> Address:</label>
                                        <textarea class="form-control" placeholder="Address" rows="3" name="permanent_address" cols="50"
                                            id="permanent_address"></textarea>
                                    </div>
                            </div>
                            <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Sales Commission Percentage (%):</label>
                                            <input class="form-control" required placeholder="Sales Commission Percentage (%):" name="Commission Percentage "
                                                type="text" id="Commission Percentage ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                       <button type="submit" class="btn btn-primary pull-left">Save</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-light pull-left">Cancel</button>
                                     </div>
                                    </div>
                        </div>
                        </div>
                        {{-- end --}}



@endsection

