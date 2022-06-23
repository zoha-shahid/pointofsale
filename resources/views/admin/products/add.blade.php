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
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for="name">Product Name:*</label>
                                            <input class="form-control" required placeholder="Product Name" name="name" type="text" id="name">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for="sku">SKU:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                  data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                  data-content="Unique product id or Stock Keeping Unit <br><br>Keep it blank to automatically generate sku.<br><small class='text-muted'>You can modify sku prefix in Business settings.</small>" data-html="true" data-trigger="hover"></i>            <input class="form-control" placeholder="SKU" name="sku" type="text" id="sku">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for="barcode_type">Barcode Type:*</label>
                                            <select class="form-control select2" required id="barcode_type" name="barcode_type"><option value="C128" selected="selected">Code 128 (C128)</option><option value="C39">Code 39 (C39)</option><option value="EAN13">EAN-13</option><option value="EAN8">EAN-8</option><option value="UPCA">UPC-A</option><option value="UPCE">UPC-E</option></select>
                                        </div>
                                      </div>

                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for="unit_id">Unit:*</label>
                                          <div class="input-group">
                                            <select class="form-control select2" required id="unit_id" name="unit_id"><option value="" selected="selected">Please Select</option><option value="1">Pieces (Pc(s))</option><option value="2">Packets (packets)</option><option value="3">Grams (g)</option></select>
                                            <span class="input-group-btn">
                                              <button type="button"  class="btn btn-default bg-white btn-flat btn-modal" data-href="https://pos.ultimatefosters.com/units/create?quick_add=1" title="Add Unit" data-container=".view_modal"><i class="fa fa-plus-circle text-primary fa-lg"></i></button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4 ">
                                        <div class="form-group">
                                          <label for="brand_id">Brand:</label>
                                          <div class="input-group">
                                            <select class="form-control select2" id="brand_id" name="brand_id"><option selected="selected" value="">Please Select</option><option value="9">Acer</option><option value="6">Adidas</option><option value="8">Apple</option><option value="13">Barilla</option><option value="10">Bowflex</option><option value="2">Espirit</option><option value="1">Levis</option><option value="14">Lipton</option><option value="4">Nike</option><option value="11">Oreo</option><option value="5">Puma</option><option value="7">Samsung</option><option value="12">Sharewood</option><option value="3">U.S. Polo Assn.</option></select>
                                          <span class="input-group-btn">
                                              <button type="button"  class="btn btn-default bg-white btn-flat btn-modal" data-href="https://pos.ultimatefosters.com/brands/create?quick_add=1" title="Add brand" data-container=".view_modal"><i class="fa fa-plus-circle text-primary fa-lg"></i></button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                      <div class="row">

                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                              <label for="category_id">Category:</label>
                                                <select class="form-control select2" id="category_id" name="category_id"><option selected="selected" value="">Please Select</option><option value="3">Accessories</option><option value="18">Books</option><option value="12">Electronics</option><option value="21">Food &amp; Grocery</option><option value="1">Men&#039;s</option><option value="15">Sports</option><option value="2">Women&#039;s</option></select>
                                            </div>
                                          </div>
                                          <div class="col-sm-4 ">
                                            <div class="form-group">
                                              <label for="sub_category_id">Sub category:</label>
                                                <select class="form-control select2" id="sub_category_id" name="sub_category_id"><option selected="selected" value="">Please Select</option></select>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="form-group">
                                              <label for="product_locations">Business Locations:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                      data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                      data-content="Locations where product will be available." data-html="true" data-trigger="hover"></i>              <select class="form-control select2" multiple id="product_locations" name="product_locations[]"><option value="1" selected="selected">Awesome Shop</option></select>
                                            </div>
                                          </div>


                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <br>
                                          <label>
                                            <input class="input-icheck" id="enable_stock" checked="checked" name="enable_stock" type="checkbox" value="1"> <strong>Manage Stock?</strong>
                                          </label><i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                  data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                  data-content="Enable or disable stock management for a product. <br><br><small class='text-muted'>Stock Management should be disable mostly for services. Example: Hair-Cutting, Repairing, etc.</small>" data-html="true" data-trigger="hover"></i> <p class="help-block"><i>Enable stock management at product level</i></p>
                                        </div>
                                      </div>
                                      <div class="col-sm-4 " id="alert_quantity_div">
                                        <div class="form-group">
                                          <label for="alert_quantity">Alert quantity:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                  data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                  data-content="Get alert when product stock reaches or goes below the specified quantity.<br><br><small class='text-muted'>Products with low stock will be displayed in dashboard - Product Stock Alert section.</small>" data-html="true" data-trigger="hover"></i>            <input class="form-control input_number" placeholder="Alert quantity" min="0" name="alert_quantity" type="text" id="alert_quantity">
                                        </div>
                                      </div>
                                </div>
                                 <div class="col-sm-4 " id="alert_quantity_div">
          <div class="form-group">
            <label for="alert_quantity">Alert quantity:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                    data-container="body" data-toggle="popover" data-placement="auto bottom"
                    data-content="Get alert when product stock reaches or goes below the specified quantity.<br><br><small class='text-muted'>Products with low stock will be displayed in dashboard - Product Stock Alert section.</small>" data-html="true" data-trigger="hover"></i>            <input class="form-control input_number" placeholder="Alert quantity" min="0" name="alert_quantity" type="text" id="alert_quantity">
          </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                  <label for="product_description">Product Description:</label>
                    <textarea class="form-control" name="product_description" cols="50" rows="10" id="product_description"></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="image">Product image:</label>
                  <input id="upload_image" accept="image/*" name="image" type="file">
                  <small><p class="help-block">Max File size: 5MB <br> Aspect ratio should be 1:1</p></small>
                </div>
              </div>
        </div>

         <div class="col-sm-4">
            <div class="form-group">
              <label for="product_brochure">Product brochure:</label>
              <input id="product_brochure" accept="application/pdf,text/csv,application/zip,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/jpeg,image/jpg,image/png" name="product_brochure" type="file">
              <small>
                  <p class="help-block">
                      Max File size: 5MB                    <br>
  Allowed File:
                          .pdf,
                                  .csv,
                                  .zip,
                                  .doc,
                                  .docx,
                                  .jpeg,
                                  .jpg,
                                  .png
                              </p>
              </small>
            </div>
          </div>


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

                                <div class="row">

                                     <div class="col-sm-4">
                                        <div class="form-group">
                                          <br>
                                          <label>
                                            <input class="input-icheck" name="enable_sr_no" type="checkbox" value="1"> <strong>Enable Product description, IMEI or Serial Number</strong>
                                          </label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                  data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                  data-content="Enable or disable adding product description, IMEI or Serial number while selling products in POS screen" data-html="true" data-trigger="hover"></i>          </div>
                                      </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                      <br>
                                      <label>
                                        <input class="input-icheck" name="not_for_selling" type="checkbox" value="1"> <strong>Not for selling</strong>
                                      </label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                              data-container="body" data-toggle="popover" data-placement="auto bottom"
                                              data-content="If checked, product will not be displayed in sales screen for selling purposes." data-html="true" data-trigger="hover"></i>          </div>
                                  </div>


                            </div>


    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
              <label for="weight">Weight:</label>
              <input class="form-control" placeholder="Weight" name="weight" type="text" id="weight">
            </div>
          </div>
    </div>

       <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
              <label for="product_custom_field1">Custom Field1:</label>
              <input class="form-control" placeholder="Custom Field1" name="product_custom_field1" type="text" id="product_custom_field1">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="product_custom_field2">Custom Field2:</label>
              <input class="form-control" placeholder="Custom Field2" name="product_custom_field2" type="text" id="product_custom_field2">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="product_custom_field3">Custom Field3:</label>
              <input class="form-control" placeholder="Custom Field3" name="product_custom_field3" type="text" id="product_custom_field3">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="product_custom_field4">Custom Field4:</label>
              <input class="form-control" placeholder="Custom Field4" name="product_custom_field4" type="text" id="product_custom_field4">
            </div>
          </div>
       </div>

         <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                          <br>
                    <label>
                        <input type="hidden" name="woocommerce_disable_sync" value="0">
                          <input class="input-icheck" name="woocommerce_disable_sync" type="checkbox" value="1"> <strong>Disable Woocommerce Sync</strong>
                    </label>
                    <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                data-container="body" data-toggle="popover" data-placement="auto bottom"
                                data-content="If checked this product will not be synced with woocommerce" data-html="true" data-trigger="hover"></i>  	</div>
            </div>            </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- end --}}
            {{-- 3rd part --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                {{-- <h4>Sales</h4><br><br> --}}
                                    {{-- start --}}
                                <div class="row">
                                    <div class="col-sm-4 ">
                                        <div class="form-group">
                                          <label for="tax">Applicable Tax:</label>
                                            <select class="form-control select2" id="tax" name="tax"><option selected="selected" value="">Please Select</option><option value="" selected="selected">None</option><option value="1" data-rate="10"><template class="__cf_email__" data-cfemail="df899e8b9feeef">[email&#160;protected]</template>%</option><option value="2" data-rate="10"><template class="__cf_email__" data-cfemail="94d7d3c7c0d4a5a4">[email&#160;protected]</template>%</option><option value="3" data-rate="8"><template class="__cf_email__" data-cfemail="1645514542562e">[email&#160;protected]</template>%</option><option value="4" data-rate="18"><template class="__cf_email__" data-cfemail="a4e3f7f0e4959c">[email&#160;protected]</template>%</option></select>
                                        </div>
                                      </div>
                                      <div class="col-sm-4 ">
                                        <div class="form-group">
                                          <label for="tax_type">Selling Price Tax Type:*</label>
                                            <select class="form-control select2" required id="tax_type" name="tax_type"><option value="inclusive">Inclusive</option><option value="exclusive" selected="selected">Exclusive</option></select>
                                        </div>
                                      </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for="type">Product Type:*</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                  data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                  data-content="<b>Single product</b>: Product with no variations.
                                  <br><b>Variable product</b>: Product with variations such as size, color etc.
                                  <br><b>Combo product</b>: A combination of multiple products, also called bundle product" data-html="true" data-trigger="hover"></i>            <select class="form-control select2" required data-action="add" data-product_id="0" id="type" name="type"><option value="single">Single</option><option value="variable">Variable</option><option value="combo">Combo</option></select>
                                        </div>
                                      </div>
                                        {{-- next stat --}}
                                        <div class="form-group col-sm-12" id="product_form_part">
                                            <div class="table-responsive">
                                      <table class="table table-bordered add-product-price-table table-condensed ">
                                          <tr>
                                            <th>Default Purchase Price</th>
                                            <th>x Margin(%) <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                                                      data-container="body" data-toggle="popover" data-placement="auto bottom"
                                                      data-content="Default profit margin for the product. <br><small class='text-muted'>(<i>You can manage default profit margin in Business Settings.</i>)</small>" data-html="true" data-trigger="hover"></i></th>
                                            <th>Default Selling Price</th>
                                                        <th>Product image</th>
                                                    </tr>
                                          <tr>
                                            <td>
                                              <div class="col-sm-6">
                                                <label for="single_dpp">Exc. tax:*</label>

                                                <input class="form-control input-sm dpp input_number" placeholder="Exc. tax" required name="single_dpp" type="text" id="single_dpp">
                                              </div>

                                              <div class="col-sm-6">
                                                <label for="single_dpp_inc_tax">Inc. tax:*</label>

                                                <input class="form-control input-sm dpp_inc_tax input_number" placeholder="Inc. tax" required name="single_dpp_inc_tax" type="text" id="single_dpp_inc_tax">
                                              </div>
                                            </td>

                                            <td>
                                              <br/>
                                              <input class="form-control input-sm input_number" id="profit_percent" required name="profit_percent" type="text" value="25.00">
                                            </td>

                                            <td>
                                              <label><span class="dsp_label">Exc. tax</span></label>
                                              <input class="form-control input-sm dsp input_number" placeholder="Exc. tax" id="single_dsp" required name="single_dsp" type="text">

                                              <input class="form-control input-sm hide input_number" placeholder="Inc. tax" id="single_dsp_inc_tax" required name="single_dsp_inc_tax" type="text">
                                            </td>
                                                      <td>
                                                <div class="form-group">
                                                  <label for="variation_images">Product image:</label>
                                                  <input class="variation_images" accept="image/*" multiple name="variation_images[]" type="file">
                                                  <small><p class="help-block">Max File size: 5MB <br> Aspect ratio should be 1:1</p></small>
                                                </div>
                                            </td>
                                                    </tr>
                                      </table>
                                  </div>        </div>
                                   {{-- end --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 4th part --}}

            {{-- 5th part --}}

            {{-- 6th part --}}

            {{-- 7th part --}}

            <input type="hidden" id="variation_counter" value="1">
            <input type="hidden" id="default_profit_percent"
              value="25">

          </div>
        </div>
        <!-- /.box-body -->

    </div>
    {{-- rfff --}}
    {{-- <input type="hidden" id="variation_counter" value="1">
    <input type="hidden" id="default_profit_percent"
      value="25">

  </div>
</div> --}}
<!-- /.box-body -->
</div>    <div class="row">
<div class="col-sm-12">
  <input type="hidden" name="submit_type" id="submit_type">
  <div class="text-center">
  <div class="btn-group">
            <button id="opening_stock_button"  type="submit" value="submit_n_add_opening_stock" class="btn btn-danger">Save & Add Opening Stock</button>

    <button type="submit" value="save_n_add_another" class="btn btn-warning">Save And Add Another</button>

    <button type="submit" value="submit" class="btn btn-primary submit_product_form">Save</button>
  </div>

  </div>
</div>
</div>
    {{-- end --}}
            </form>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
