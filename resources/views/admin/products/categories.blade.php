@extends('Admin.layouts.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Units Manage your units
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data table</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <h4 class="card-title"><b>All your units
                            </b></h4>
                        </div>
                        <div class="col-md-6">

                            <a href="{{ URL::to('dashboard/user/pdf') }}">
                                <button type="button" class="btn btn-danger btn-sm"> <i class="far fa-file-pdf"></i>
                                    PDF</button>
                            </a>
                            <a href="{{ URL::to('dashboard/user/excel') }}">
                                <button type="button" class="btn btn-success btn-sm"><i class="far fa-file-excel"></i>
                                    Excel</button>
                            </a>
                            <a href="{{ URL::to('dashboard/user/csv') }}">
                                <button type="button" class="btn btn-success btn-sm"><i class="far fa-file"></i>
                                    CSV</button>
                            </a>
                            <a href="{{ URL::to('dashboard/user/print') }}" target="_blank">
                                <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-print"></i>
                                    Print</button>
                            </a>
                        </div>

                        <div class="col-2">
                            <div class="btn-group">
                                {{-- nimra --}}
                                <div class="buttonexport" id="buttonlist">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                        data-target="#myModal"
                                        style="background-color: #392c70; border: none; border-radius: 8px; margin-bottom:2em;color:#fff">
                                        <i class="fa fa-plus" style="color:white"></i>Add</button>

                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Customer Group</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <strong> <label>Customer Group Name:*</label></strong>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    </span>
                                                                    <input class="form-control"
                                                                        placeholder="Customer Group Name"
                                                                        name="Customer-Group-Name" type="text"
                                                                        id="Customer-Group-Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <strong><label>Price calculation type:</label></strong>
                                                                <select class="form-control">
                                                                    <option value="">Percentage</option>
                                                                    <option value="selling price group">selling price group
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <strong> <label>Calculation Percentage (%):</label></strong>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    </span>
                                                                    <input class="form-control"
                                                                        placeholder="Customer Group Name"
                                                                        name="Calculation-Percentage" type="text"
                                                                        id="Calculation-Percentage">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
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
                                {{-- nimra end --}}




                            </div>
                        </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th> Category </th>
                                <th>Category Code</th>
                            <th>Description</th>
<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>zoi & nim</td>
                                <td>cool</td>
                                <td>100%</td>


                                <td style="padding-left: 2em">
                                    <a href="#"><button type="button" style="padding:0.8em 2em"
                                            class="btn btn-primary">Edit<i class="fa-light fa-comment-pen"></i></button></a>
                                    <a href="{{ url('/dashboard/user/delete/') }}"><button type="button"
                                            style="padding:0.8em 2em" class="btn btn-danger">Delete<i
                                                class="fa fa-trash"></i></button></a>


                                </td>
                            </tr>

                        </tbody>
                    </table>
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
