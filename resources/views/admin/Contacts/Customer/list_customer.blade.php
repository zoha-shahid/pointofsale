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


            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <a href="#">
                                    <button type="button" class="btn btn-primary btn-sm"><i
                                            class="fa fa-filter"></i> Filter</button>
                                </a>
                        </div>
                                    </div>



                                    {{-- try --}}

                                    <form method="POST" autocomplete="off" enctype="multipart/form-data" action=""> {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body" id="filter">
                                                        <div class="box-body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                                        value="option1" />
                                                                    <label class="form-check-label" for="inlineCheckbox1">Purchase Due</label>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                                        value="option2" />
                                                                    <label class="form-check-label" for="inlineCheckbox2">Purchase Return</label>

                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                                        value="option2" />
                                                                    <label class="form-check-label" for="inlineCheckbox2">Advance Balance</label>

                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                                        value="option2" />
                                                                    <label class="form-check-label" for="inlineCheckbox2"> Opening Balance</label>

                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="Status">Status</label>
                                                                        <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                                            data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                                            data-content="Check/Uncheck to make a user active/inactive."
                                                                            data-html="true" data-trigger="hover"></i>
                                                                        <select name="Suppliers" id="" class="form-control">
                                                                            <option selected value="Admin">None</option>
                                                                            <option value="Admin">Active</option>
                                                                            <option value="Cashier">Not Active</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    {{-- try end --}}
                    </div></div></div>

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
                                    <button type="button"
                                        style="background-color: #392c70; border: none; border-radius: 8px; margin-bottom:2em">
                                        <a class="btn btn-add" style="color:#fff"
                                            href="{{ URL::to('dashboard/Role/add') }}">
                                            <i class="fa fa-plus" style="color:white"></i>Add </a></button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="table-responsive">
                        {{-- <table id="order-listing" class="table"> --}}
                        <table class="table table-bordered table-striped table" id="order-listing">
                            <thead>
                                <tr>

                                    <th>Action</th>
                                    <th>Contact ID</th>
                                    <th>Business Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Tax number</th>
                                    <th>Pay term</th>
                                    <th>Opening Balance</th>
                                    <th>Advance Balance</th>
                                    <th>Added On</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Total Purchase Due</th>
                                    <th>Total Purchase Return Due</th>
                                    <th>
                                        Custom Field 1
                                    </th>
                                    <th>
                                        Custom Field 2
                                    </th>
                                    <th>
                                        Custom Field 3
                                    </th>
                                    <th>
                                        Custom Field 4
                                    </th>
                                    <th>
                                        Custom Field 5
                                    </th>
                                    <th>
                                        Custom Field 6
                                    </th>
                                    <th>
                                        Custom Field 7
                                    </th>
                                    <th>
                                        Custom Field 8
                                    </th>
                                    <th>
                                        Custom Field 9
                                    </th>
                                    <th>
                                        Custom Field 10
                                    </th>
                                </tr>
                            </thead>
                            {{-- zoy --}}
                            <tfoot>
                                <tr class="bg-gray font-17 text-center footer-total">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="6">
                                        <strong>
                                            Total:
                                        </strong>
                                    </td>
                                    <td class="footer_contact_due"></td>
                                    <td class="footer_contact_return_due"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                            {{-- zoy --}}
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- content-wrapper ends -->
@endsection
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
