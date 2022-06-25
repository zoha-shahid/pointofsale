@extends('Admin.layouts.master')
@section('content')
    <!-- partial -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Add new product
                </h3>
                {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav> --}}
            </div>
            <form method="POST" autocomplete="off" enctype="multipart/form-data" action=""> {{ csrf_field() }}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <div class="box-header">
                                    <h3 class="box-title">Add products to generate Labels</h3>
                                </div>
                                <div class="clearfix"></div>
<div class="row">
			<div class="col-sm-8">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-search"></i>
						</span>
						<input class="form-control" id="search_product_for_label" placeholder="Enter products name to print labels" autofocus name="search_product" type="text">
					</div>
				</div>
</div>
</div>
<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <table class="table table-bordered table-striped table-condensed" id="product_table">
            <thead>
                <tr>
                    <th>Products</th>
                    <th>No. of labels</th>
                                                                            <th>Packing Date</th>
                    <th>Selling Price Group</th>
                </tr>
            </thead>
            <tbody>
                                    </tbody>
        </table>
    </div>
</div>
<!-- /.box-body -->









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
                                {{-- <h4>Roles and Permissions</h4><br><br> --}}
                                <div class="box box-primary" >
                                    <div class="box-header">

                            <h3 class="box-title">Information to show in Labels</h3>

                        </div>



                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" checked name="print[name]" value="1"> <b>Product Name</b>
                                                            </label>
                                                        </div>

                                                        <div class="input-group">
                                                              <div class="input-group-addon"><b>Size</b></div>
                                                            <input type="text" class="form-control"
                                                                name="print[name_size]"
                                                                value="15">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" checked name="print[variations]" value="1"> <b>Product Variation (recommended)</b>
                                                            </label>
                                                        </div>

                                                        <div class="input-group">
                                                              <div class="input-group-addon"><b>Size</b></div>
                                                            <input type="text" class="form-control"
                                                                name="print[variations_size]"
                                                                value="17">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" checked name="print[price]" value="1" id="is_show_price"> <b>Product Price</b>
                                                            </label>
                                                        </div>

                                                        <div class="input-group">
                                                              <div class="input-group-addon"><b>Size</b></div>
                                                            <input type="text" class="form-control"
                                                                name="print[price_size]"
                                                                value="17">
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="" id="price_type_div">
                                                            <div class="form-group">
                                                                <label for="print[price_type]">Show Price:</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-info"></i>
                                                                    </span>
                                                                    <select class="form-control" id="print[price_type]" name="print[price_type]"><option value="inclusive" selected="selected">Inc. tax</option><option value="exclusive">Exc. tax</option></select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" checked name="print[business_name]" value="1"> <b>Business name</b>
                                                            </label>
                                                        </div>

                                                        <div class="input-group">
                                                              <div class="input-group-addon"><b>Size</b></div>
                                                            <input type="text" class="form-control"
                                                                name="print[business_name_size]"
                                                                value="20">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" checked name="print[packing_date]" value="1"> <b>Print packing date</b>
                                                            </label>
                                                        </div>

                                                        <div class="input-group">
                                                              <div class="input-group-addon"><b>Size</b></div>
                                                            <input type="text" class="form-control"
                                                                name="print[packing_date_size]"
                                                                value="12">
                                                        </div>
                                                    </td>

                                                    <td>
                                                                                </td>

                                                    <td>
                                                                                </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-sm-12">
                                            <hr/>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="price_type">Barcode setting:</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-cog"></i>
                                                    </span>
                                                    <select class="form-control" name="barcode_setting"><option value="1">20 Labels per Sheet, Sheet Size: 8.5&quot; x 11&quot;, Label Size: 4&quot; x 1&quot;, Labels per sheet: 20</option><option value="2">30 Labels per sheet, Sheet Size: 8.5&quot; x 11&quot;, Label Size: 2.625&quot; x 1&quot;, Labels per sheet: 30</option><option value="3">32 Labels per sheet, Sheet Size: 8.5&quot; x 11&quot;, Label Size: 2&quot; x 1.25&quot;, Labels per sheet: 32</option><option value="4">40 Labels per sheet, Sheet Size: 8.5&quot; x 11&quot;, Label Size: 2&quot; x 1&quot;, Labels per sheet: 40</option><option value="5">50 Labels per Sheet, Sheet Size: 8.5&quot; x 11&quot;, Label Size: 1.5&quot; x 1&quot;, Labels per sheet: 50</option><option value="6">Continuous Rolls - 31.75mm x 25.4mm, Label Size: 31.75mm x 25.4mm, Gap: 3.18mm</option></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-4 col-sm-offset-8">
                                            <button type="button" id="labels_preview" class="btn btn-primary pull-right btn-flat btn-block">Preview</button>
                                        </div>
                                    </div>
                                </div>







    </div>

</div>
            </div>

    {{-- end --}}
            </form>
        </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
