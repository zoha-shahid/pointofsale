

@extends('admin.layouts.master')
@section('content')
<div class="row check_group">
    <div class="col-md-2">
        {{-- <h4>Product</h4> --}}
    </div>
    <div class="col-md-2">
        <div class="checkbox">
            <label>
                <input type="checkbox" class="check_all input-icheck"> Select all
            </label>
        </div>
    </div>
    <div class="col-md-8">
        <div class="col-md-12">
            <div class="checkbox">
                <label>
                    <input class="checkitem" name="permissions[]" type="checkbox"
                        value="product.view"> View product
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="checkbox">
                <label>
                    <input class="checkitem" name="permissions[]" type="checkbox"
                        value="product.create"> Add product
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="checkbox">
                <label>
                    <input class="checkitem" name="permissions[]" type="checkbox"
                        value="product.update"> Edit product
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="checkbox">
                <label>
                    <input class="checkitem" name="permissions[]" type="checkbox"
                        value="product.delete"> Delete product
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="checkbox">
                <label>
                    <input class="checkitem" name="permissions[]" type="checkbox"
                        value="product.opening_stock"> Add Opening Stock
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="checkbox">
                <label>
                    <input class="checkitem" name="permissions[]" type="checkbox"
                        value="view_purchase_price">
                    View Purchase Price
                </label>
                <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true"
                    data-container="body" data-toggle="popover" data-placement="auto bottom"
                    data-content="Permission to view purchase price in product details"
                    data-html="true" data-trigger="hover"></i>
            </div>
        </div>
    </div>
</div>
<hr>

@endsection
