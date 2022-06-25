@extends('Admin.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title" style="position: absolute; top:50%; left:50% ;transform=translate(-50%,-50%);">
                    <h3> Import Products<small></small></h3>
                </h3>
                <nav aria-label="breadcrumb">
                </nav>
            </div>
            {{-- try --}}
            <form method="POST" action="https://pos.ultimatefosters.com/contacts/import" accept-charset="UTF-8"
                enctype="multipart/form-data"><input name="_token" type="hidden"
                    value="sEWn7nGDXBLpt2U187STwgL8WBGSbMmyBUF7bZoh">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body" id="filter">
                                <div class="box-body">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label for="name">File To Import:</label>
                                                    <input accept=".xls" required="required" name="contacts_csv"
                                                        type="file">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="https://pos.ultimatefosters.com/files/import_contacts_csv_template.xls"
                                                class="btn btn-success" download><i class="fa fa-download"></i> Download
                                                template file</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
            <br><br>
            {{-- try --}}

            {{-- <h1>zoha</h1> --}}
        {{-- </div> --}}

        <!-- /.box-body -->
        {{-- </div>
    </div>

</div> --}}

        {{-- first end --}}
        {{-- 2nd --}}

        {{-- try --}}

                    <div class="card">
                        <div class="card-body" id="filter">
                            <div class="box-body">
                                <div class="container">
                                    <div class="row">
                                      {{-- zoo --}}
                                      <div class="box box-primary" >
                                        <div class="box-header">

                                <h3 class="box-title">Instructions</h3>

                            </div>

                        <div class="box-body">
                            <strong>Follow the instructions carefully before importing the file.</strong><br>
                                        The columns of the file should be in the following order.                    <br><br>
                        </div>
                        <table class="table table-striped">
                            <tr>
                                <th>Column Number</th>
                                <th>Column Name</th>
                                <th>Instruction</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SKU<small class="text-muted">(Required)</small></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Location <small class="text-muted">(Optional) <br>If blank first business location will be used</small></td>
                                <td>Name of the business location<br>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Quantity <small class="text-muted">(Required)</small></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Unit Cost (Before Tax) <small class="text-muted">(Required)</small></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Lot Number <small class="text-muted">(Optional)</small></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Expiry Date <small class="text-muted">(Optional)</small></td>
                                <td>Stock expiry date in <b>Business date format</b> <br/> <b>mm/dd/yyyy</b></td>
                            </tr>
                        </table>
                                      {{-- zooend --}}
                                        {{-- <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="name">File To Import:</label>
                                                <input accept=".xls" required="required" name="contacts_csv"
                                                    type="file">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div> --}}
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    {{-- <div class="col-sm-4">
                                        <a href="https://pos.ultimatefosters.com/files/import_contacts_csv_template.xls"
                                            class="btn btn-success" download><i class="fa fa-download"></i> Download
                                            template file</a>
                                    </div> --}}
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        {{-- </form> --}}
        <br><br>
        {{-- try --}}
        <br><br>
        {{-- <h1>zoha</h1> --}}
    </div>

    <!-- /.box-body -->
    </div>
    </div>

    </div>

    {{-- end --}}
@endsection

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
