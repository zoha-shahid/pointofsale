@extends('Admin.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title" style="position: absolute; top:50%; left:50% ;transform=translate(-50%,-50%);">
                    <h3> Import Contacts <small></small></h3>
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
                                <td>Contact type <small class="text-muted">(Required)</small></td>
                                <td>Available Options: <strong><br> 1 = Customer, <br> 2 = Supplier <br> 3 = Both</strong></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Prefix <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>First Name <small class="text-muted">(Required)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Middle name <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Last Name <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Business Name <br><small class="text-muted">(Required if contact type is supplier or both)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Contact ID <small class="text-muted">(Optional)</small></td>
                                <td>Leave blank to auto generate Contact ID</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Tax number <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Opening Balance <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Pay term <br><small class="text-muted">(Required if contact type is supplier or both)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Pay term period <br><small class="text-muted">(Required if contact type is supplier or both)</small></td>
                                <td><strong>Available Options: days and months</strong></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Credit Limit <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Email <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Mobile <small class="text-muted">(Required)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Alternate contact number <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Landline <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>City <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>State <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Country <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Address line 1 <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Address line 2 <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Zip Code <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Date of birth <small class="text-muted">(Optional)</small></td>
                                <td>Format Y-m-d (2022-06-17)</td>
                            </tr>
                                                <tr>
                                <td>24</td>
                                 <td>Custom Field 1 <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Custom Field 2 <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Custom Field 3 <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Custom Field 4 <small class="text-muted">(Optional)</small></td>
                                <td>&nbsp;</td>
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
