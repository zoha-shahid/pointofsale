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
                                <td>Product Name <small class="text-muted">(Required)</small></td>
                                <td>Name of the product</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Brand <small class="text-muted">(Optional)</small></td>
                                <td>Name of the brand <br><small class="text-muted">(If not found new brand with the given name will be created)</small></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Unit <small class="text-muted">(Required)</small></td>
                                <td>Name of the unit</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Category <small class="text-muted">(Optional)</small></td>
                                <td>Name of the Category <br><small class="text-muted">(If not found new category with the given name will be created)</small></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sub category <small class="text-muted">(Optional)</small></td>
                                <td>Name of the Sub-Category <br><small class="text-muted">(If not found new sub-category with the given name under the <br> parent Category will be created)</small></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>SKU <small class="text-muted">(Optional)</small></td>
                                <td>Product SKU. If blank an SKU will be automatically generated</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Barcode Type <small class="text-muted">(Optional, Default: C128)</small></td>
                                <td>Barcode Type for the product. <br>
                                    <strong>Currently supported: C128, C39, EAN-13, EAN-8, UPC-A, UPC-E, ITF-14</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Manage Stock? <small class="text-muted">(Required)</small></td>
                                <td>Enable or disable stock managemant<br>
                                    <strong>1 = Yes<br>
                                    0 = No</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Alert quantity <small class="text-muted">(Optional)</small></td>
                                <td>Alert quantity</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Expires in <small class="text-muted">(Optional)</small></td>
                                <td>Product expiry period (Only in numbers)</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Expiry Period Unit <small class="text-muted">(Optional)</small></td>
                                <td>Unit for the expiry period<br>
                                    <strong>Available Options: days, months</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Applicable Tax <small class="text-muted">(Optional)</small></td>
                                <td>Name of the Tax Rate <br><br/>If purchase Price (Excluding Tax) is not same as <br/>Purchase Price (Including Tax) <br/>then you must supply the tax rate name.</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Selling Price Tax Type <small class="text-muted">(Required)</small></td>
                                <td>Selling Price Tax Type <br>
                                    <strong>Available Options: inclusive, exclusive</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Product Type <small class="text-muted">(Required)</small></td>
                                <td>Product Type <br>
                                    <strong>Available Options: single, variable</strong></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Variation Name <small class="text-muted">(Required if product type is variable)</small></td>
                                <td>Name of the variation (Ex: Size, Color etc )</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Variation Values <small class="text-muted">(Required if product type is variable)</small></td>
                                <td>Values for the variation separated with '|' <br>
                                    (Ex: Red|Blue|Green)</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Variation SKUs <small class="text-muted">(Optional)</small></td>
                                <td>SKUs of each variations separated by "|" if product type is variable</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td> Purchase Price (Including Tax)<br><small class="text-muted">(Required if Purchase Price Excluding Tax is not given)</small></td>
                                <td>Purchase Price (Including Tax) (Only in numbers)<br><br>For variable products '|' separated values with <br>the same order as Variation Values <br>(Ex: 84|85|88)</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Purchase Price (Excluding Tax)  <br><small class="text-muted">(Required if Purchase Price Including Tax is not given)</small></td>
                                <td>Purchase Price (Excluding Tax) (Only in numbers)<br><br>For variable products '|' separated values with <br>the same order as Variation Values <br>(Ex: 84|85|88)</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Profit Margin % <small class="text-muted">(Optional)</small></td>
                                <td>Profit Margin (Only in numbers)<br>
                                    <small class="text-muted">If blank default profit margin for the <br> business will be used</small></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Selling Price <small class="text-muted">(Optional)</small></td>
                                <td>Selling Price (Only in numbers)<br>
                                 <small class="text-muted">If blank selling price will be calculated <br>with the given Purchase Price <br>and Applicable Tax </small></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Opening Stock <small class="text-muted">(Optional)</small></td>
                                <td>Opening Stock (Only in numbers) <br><br>For variable products separate stock quantities with '|' <br>(Ex: 100|150|200)<br>
                                </td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Opening stock location <small class="text-muted">(Optional) <br>If blank first business location will be used</small></td>
                                <td>Name of the business location<br>
                                </td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Expiry Date <small class="text-muted">(Optional)</small></td>
                                <td>Stock Expiry Date <br><b>Format: mm-dd-yyyy; Ex: 11-25-2018</b><br>
                                </td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Enable Product description, IMEI or Serial Number <small class="text-muted">(Optional, Default: 0)</small></td>
                                <td><strong>1 = Yes<br>
                                    0 = No</strong><br>
                                </td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Weight <small class="text-muted">(Optional)</small></td>
                                <td>Optional<br>
                                </td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Rack <small class="text-muted">(Optional)</small></td>
                                <td>Rack details seperated by '|' for different business locations serially.<br/> (Ex: R1|R5|R12) </td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Row <small class="text-muted">(Optional)</small></td>
                                <td>Row details seperated by '|' for different business locations serially.<br/> (Ex: ROW1|ROW2|ROW3) </td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Position <small class="text-muted">(Optional)</small></td>
                                <td>Position details seperated by '|' for different business locations serially.<br/> (Ex: POS1|POS2|POS3) </td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Image <small class="text-muted">(Optional)</small></td>
                                <td>Image name with extension.<br/> (Image name must be uploaded to the server public/uploads/img ) <br><br>
                                    Or URL of the image
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Product Description <small class="text-muted">(Optional)</small></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Custom Field1 <small class="text-muted">(Optional)</small></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Custom Field2 <small class="text-muted">(Optional)</small></td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Custom Field3 <small class="text-muted">(Optional)</small></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Custom Field4 <small class="text-muted">(Optional)</small></td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Not for selling <small class="text-muted">(Optional)</small></td>
                                <td><strong>1 = Yes<br>
                                    0 = No</strong><br>
                                </td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Product locations <small class="text-muted">(Optional)</small></td>
                                <td>Comma separated string of business location names where product will be available                        </td>
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
