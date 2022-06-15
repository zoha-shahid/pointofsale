@extends('Admin.layouts.master')
@section('content')
    <!-- partial -->

    <div class="main-panel">
        <div class="content-wrapper">

                <form method="POST" autocomplete="off" enctype="multipart/form-data" action=""> {{ csrf_field() }}

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                                            <label class="form-check-label" for="inlineCheckbox1">Purchase Due</label>
                                          </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">Purchase Return</label>

                                </div>
                                <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">Advance Balance</label>

                                </div>
                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
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
                                                <option selected  value="Admin">None</option>
                                               <option value="Admin">Active</option>
                                                <option value="Cashier">Not Active</option>

                                            </select>
                                        </div>
                                        </div>
                                    </div>



                                </div>



                            </div>
                             </form>  </div>
                        </div>
                    </div>
                </div>
                        </div>
                        <br>
                        <br>

                        {{-- end --}}




@endsection

