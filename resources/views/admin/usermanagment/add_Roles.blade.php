@extends('admin.layouts.master')
@section('content')
    {{-- rfff --}}

    {{-- rff end --}}

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                {{-- <h3 class="page-title">
                Add User
            </h3> --}}
            </div>
            <div class="box-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Role Name:*</label>
                                                    <i class="fa fa-info-circle text-info hover-q no-print "
                                                        aria-hidden="true" data-container="body" data-toggle="popover"
                                                        data-placement="auto bottom"
                                                        data-content="Check/Uncheck to make a user active/inactive."
                                                        data-html="true" data-trigger="hover"></i>
                                                    <select name="role" id="" class="form-control">
                                                        <option value="Admin">Admin</option>
                                                        <option value="Cashier">Cashier</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- 2nd row --}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Permissions:</label>
                                            </div>
                                        </div>

                                        {{-- 3rd --}}
                                        <div class="row check_group">
                                            <div class="col-md-2">
                                                <h4>Others</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="check_Others"> Select all
                                                        {{-- <input type="checkbox" class="check_all input-icheck">Select all --}}
                                                    </label>
                                                </div>
                                            </div>
                                            {{-- try --}}
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input class="checkOthers" name="permissions[]" type="checkbox"
                                                            value="view_export_buttons"> View export to  buttons (csv/excel/print/pdf) on tables
                                                            {{-- <input class="input-icheck" name="permissions[]"
                                                                type="checkbox" value="view_export_buttons"> View export to
                                                            buttons
                                                            (csv/excel/print/pdf) on tables --}}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- next --}}

                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>User</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_it"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="check" name="permissions[]" type="checkbox"
                                                            value="user.view"> View user
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                    value="user.create"> Add user --}}
                                                        <input class="check" name="permissions[]" type="checkbox"
                                                            value="user.create"> Add user
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                    value="user.update"> Edit user --}}
                                                        <input class="check" name="permissions[]" type="checkbox"
                                                            value="user.update"> Edit user
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                    value="user.delete"> Delete user --}}
                                                        <input class="check" name="permissions[]" type="checkbox"
                                                            value="user.delete"> Delete user
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    {{-- rff --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Roles</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_all"> Select all
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem" name="permissions[]" type="checkbox"
                                                            value="user.view"> View role

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem" name="permissions[]" type="checkbox"
                                                            value="user.create"> Add Role
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem" name="permissions[]" type="checkbox"
                                                            value="user.update"> Edit Role
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem" name="permissions[]" type="checkbox"
                                                            value="user.delete"> Delete role
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    {{-- rff end --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Supplier</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="check_all input-icheck"> Select all
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="radio-group">
                                                <div class="col-md-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input class="input-icheck" name="radio_option[supplier_view]"
                                                                type="radio" value="supplier.view"> View all supplier
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input class="input-icheck" name="radio_option[supplier_view]"
                                                                type="radio" value="supplier.view_own"> View own supplier
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="supplier.create"> Add supplier
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="supplier.update"> Edit supplier
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="supplier.delete"> Delete supplier
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Customer <i class="fa fa-info-circle text-info hover-q no-print "
                                                    aria-hidden="true" data-container="body" data-toggle="popover"
                                                    data-placement="auto bottom"
                                                    data-content="To view all customers with no sell from a specific time <b>View all customer</b> permission is required otherwise it will filter with only cusromers created by the logged in user"
                                                    data-html="true" data-trigger="hover"></i></h4>
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
                                                        <input class="input-icheck" name="radio_option[customer_view]"
                                                            type="radio" value="customer.view"> View all customer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[customer_view]"
                                                            type="radio" value="customer.view_own"> View own customer
                                                    </label>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck"
                                                            name="radio_option[customer_view_by_sell]" type="radio"
                                                            value="customer_with_no_sell_one_month"> View customers
                                                        with no sell from one month only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck"
                                                            name="radio_option[customer_view_by_sell]" type="radio"
                                                            value="customer_with_no_sell_three_month"> View customers
                                                        with no sell from three months only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck"
                                                            name="radio_option[customer_view_by_sell]" type="radio"
                                                            value="customer_with_no_sell_six_month"> View customers
                                                        with no sell from six months only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck"
                                                            name="radio_option[customer_view_by_sell]" type="radio"
                                                            value="customer_with_no_sell_one_year"> View customers with
                                                        no sell from one year only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck"
                                                            name="radio_option[customer_view_by_sell]" type="radio"
                                                            value="customer_irrespective_of_sell"> View customers
                                                        irrespective of their sell
                                                    </label>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="customer.create"> Add customer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="customer.update"> Edit customer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="customer.delete"> Delete customer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Product</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_product"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="checkitem" name="permissions[]" type="checkbox"
                                                    value="product.view"> View product --}}
                                                        <input class="checkpro" name="permissions[]" type="checkbox"
                                                            value="user.view"> View product
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="checkitem" name="permissions[]" type="checkbox"
                                                    value="product.create"> Add product --}}
                                                        <input class="checkpro" name="permissions[]" type="checkbox"
                                                            value="user.create">Add product
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="checkitem" name="permissions[]" type="checkbox"
                                                    value="product.update"> Edit product --}}
                                                        <input class="checkpro" name="permissions[]" type="checkbox"
                                                            value="user.update">Edit product
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="checkitem" name="permissions[]" type="checkbox"
                                                    value="product.delete"> Delete product --}}
                                                        <input class="checkpro" name="permissions[]" type="checkbox"
                                                            value="user.delete"> Delete product
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="checkitem" name="permissions[]" type="checkbox"
                                                    value="product.opening_stock"> Add Opening Stock --}}
                                                        <input class="checkpro" name="permissions[]" type="checkbox"
                                                            value="user.delete">Add Opening Stock
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="checkitem" name="permissions[]" type="checkbox"
                                                    value="view_purchase_price">
                                                View Purchase Price --}}
                                                        <input class="checkpro" name="permissions[]" type="checkbox"
                                                            value="user.delete"> View Purchase Price
                                                    </label>
                                                    <i class="fa fa-info-circle text-info hover-q no-print "
                                                        aria-hidden="true" data-container="body" data-toggle="popover"
                                                        data-placement="auto bottom"
                                                        data-content="Permission to view purchase price in product details"
                                                        data-html="true" data-trigger="hover"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Purchase & Stock Adjustment</h4>
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
                                                        <input class="input-icheck" name="radio_option[purchase_view]"
                                                            type="radio" value="purchase.view"> View all Purchase &amp;
                                                        Stock
                                                        Adjustment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[purchase_view]"
                                                            type="radio" value="view_own_purchase">
                                                        View own Purchase &amp; Stock Adjustment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="purchase.create"> Add purchase &amp; Stock Adjustment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="purchase.update"> Edit purchase &amp; Stock Adjustment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="purchase.delete"> Delete purchase &amp; Stock Adjustment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="purchase.payments">
                                                        Add purchase payment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_purchase_payment">
                                                        Edit purchase payment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="delete_purchase_payment">
                                                        Delete purchase payment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="purchase.update_status">
                                                        Update Status
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>POS</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_pos"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkposnow" name="permissions[]" type="checkbox"
                                                        value="sell.view"> View POS sell
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="sell.view"> View POS sell --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkposnow" name="permissions[]" type="checkbox"
                                                        value="sell.create"> Add POS sell
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="sell.create"> Add POS sell --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkposnow" name="permissions[]" type="checkbox"
                                                        value="sell.update"> Edit POS sell
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="sell.update"> Edit POS sell --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkposnow" name="permissions[]" type="checkbox"
                                                        value="sell.delete"> Delete POS sell
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="sell.delete"> Delete POS sell --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkposnow" name="permissions[]" type="checkbox"
                                                        value="edit_product_price_from_pos_screen">  Edit product price from POS screen
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_product_price_from_pos_screen"> --}}

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkposnow" name="permissions[]" type="checkbox"
                                                        value="edit_product_discount_from_pos_screen">   Edit product discount from POS screen
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_product_discount_from_pos_screen">
                                                        Edit product discount from POS screen --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkposnow" name="permissions[]" type="checkbox"
                                                        value="print_invoice">   Print Invoice
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="print_invoice">
                                                        Print Invoice --}}
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Sell <i class="fa fa-info-circle text-info hover-q no-print "
                                                    aria-hidden="true" data-container="body" data-toggle="popover"
                                                    data-placement="auto bottom"
                                                    data-content="To view sells on the basis of payment status <b> View all sell</b> permission is required otherwise it will filter with only sells created by the logged in user"
                                                    data-html="true" data-trigger="hover"></i></h4>
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
                                                        <input class="input-icheck" name="radio_option[sell_view]"
                                                            type="radio" value="direct_sell.view"> View all sell
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[sell_view]"
                                                            type="radio" value="view_own_sell_only"> View own sell only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="view_paid_sells_only"> View paid sells only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="view_due_sells_only"> View due sells only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="view_partial_sells_only"> View partially paid sells only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="view_overdue_sells_only"> View overdue sells only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="direct_sell.access"> Add Sell
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="direct_sell.update"> Update Sell
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="direct_sell.delete"> Delete Sell
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="view_commission_agent_sell"> Commission agent can view
                                                        their own
                                                        sell
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="sell.payments">
                                                        Add sell payment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_sell_payment">
                                                        Edit sell payment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="delete_sell_payment">
                                                        Delete sell payment
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_product_price_from_sale_screen">
                                                        Edit product price from sales screen
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_product_discount_from_sale_screen">
                                                        Edit product discount from Sale screen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="discount.access">
                                                        Add/Edit/Delete Discount
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="access_sell_return"> Access all sell return
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="access_own_sell_return"> Access own sell return
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_invoice_number"> Add edit invoice number
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Draft</h4>
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
                                                        <input class="input-icheck" name="radio_option[draft_view]"
                                                            type="radio" value="draft.view_all"> View all drafts
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[draft_view]"
                                                            type="radio" value="draft.view_own"> View own drafts
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="draft.update"> Edit draft
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="draft.delete"> Delete draft
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Quotation</h4>
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
                                                        <input class="input-icheck" name="radio_option[quotation_view]"
                                                            type="radio" value="quotation.view_all"> View all quotations
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[quotation_view]"
                                                            type="radio" value="quotation.view_own"> View own quotations
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="quotation.update"> Edit quotation
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="quotation.delete"> Delete quotation
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Shipments</h4>
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
                                                        <input class="input-icheck" name="radio_option[shipping_view]"
                                                            type="radio" value="access_shipping">
                                                        Access all shipments
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[shipping_view]"
                                                            type="radio" value="access_own_shipping">
                                                        Access own shipments
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="access_pending_shipments_only">
                                                        Access pending shipments only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="access_commission_agent_shipping">
                                                        Commission agent can access their own shipments
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Cash Register</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_Cash"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkcash" name="permissions[]" type="checkbox"
                                                        value="view_cash_register"> View cash register
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="view_cash_register"> View cash register --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkcash" name="permissions[]" type="checkbox"
                                                        value="close_cash_register"> Close cash register
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="close_cash_register"> Close cash register --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Brand</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>

                                                    <input type="checkbox" id="check_brand"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkbrand" name="permissions[]" type="checkbox"
                                                        value="brand.view"> View brand
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="brand.view"> View brand --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkbrand" name="permissions[]" type="checkbox"
                                                        value="brand.creat"> Add brand
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="brand.create"> Add brand --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkbrand" name="permissions[]" type="checkbox"
                                                        value="brand.update"> Edit brand
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="brand.update"> Edit brand --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkbrand" name="permissions[]" type="checkbox"
                                                        value="brand.delete"> Delete brand

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Tax Rate</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_Rate"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkRate" name="permissions[]" type="checkbox"
                                                        value="tax_rate.view"> View tax rate
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="tax_rate.view"> View tax rate --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkRate" name="permissions[]" type="checkbox"
                                                        value="tax_rate.create">Add tax rate
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="tax_rate.create"> Add tax rate --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkRate" name="permissions[]" type="checkbox"
                                                        value="tax_rate.update"> Edit tax rate
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="tax_rate.update"> Edit tax rate --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkRate" name="permissions[]" type="checkbox"
                                                        value="tax_rate.delete"> Delete tax rate
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="tax_rate.delete"> Delete tax rate --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Unit</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_unit"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkunit" name="permissions[]" type="checkbox"
                                                        value="unit.view"> View unit
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="unit.view"> View unit --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkunit" name="permissions[]" type="checkbox"
                                                        value="unit.create"> Add unit
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="unit.create"> Add unit --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkunit">
                                                    <label>
                                                        <input class="checkunit" name="permissions[]" type="checkbox"
                                                        value="unit.update"> Edit unit
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="unit.update"> Edit unit --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkunit" name="permissions[]" type="checkbox"
                                                        value="unit.delete"> Delete unit
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="unit.delete"> Delete unit --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Category</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_Category"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkCategory" name="permissions[]" type="checkbox"
                                                        value="category.view"> View category
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="category.view"> View category --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkCategory" name="permissions[]" type="checkbox"
                                                        value="category.create"> Add category
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="category.create"> Add category --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkCategory" name="permissions[]" type="checkbox"
                                                        value="category.update"> Edit category
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="category.update"> Edit category --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkCategory" name="permissions[]" type="checkbox"
                                                        value="category.delete"> Delete category
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="category.delete"> Delete category --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Report</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_Report"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="purchase_n_sell_report.view"> View purchase &amp; sell report
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="purchase_n_sell_report.view"> View purchase &amp; sell
                                                        report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="tax_report.view"> View Tax report
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="tax_report.view"> View Tax report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="contacts_report.view">  View Supplier &amp; Customer report
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="contacts_report.view"> View Supplier &amp; Customer
                                                        report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="expense_report.view">   View expense report
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="expense_report.view"> View expense report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="profit_loss_report.view">  View profit/loss report
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="profit_loss_report.view"> View profit/loss report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="stock_report.view">  View stock report, stock adjustment report
                                                        &amp; stock expiry report
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="stock_report.view"> View stock report, stock adjustment
                                                        report
                                                        &amp; stock expiry report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="trending_product_report.view"> View trending product
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="trending_product_report.view"> View trending product
                                                        report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="register_report.view"> View register report
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="register_report.view"> View register report --}}
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="sales_representative.view""> View sales representative
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="sales_representative.view"> View sales representative
                                                        report --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkreport" name="permissions[]" type="checkbox"
                                                        value="view_product_stock_value"> View product stock value
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="view_product_stock_value"> View product stock value --}}
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Settings</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="check_Settings"> Select all
                                                    {{-- <input type="checkbox" class="check_all input-icheck"> Select all --}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkSettings" name="permissions[]" type="checkbox"
                                                        value="business_settings.access"> Access business settings
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="business_settings.access"> Access business settings --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkSettings" name="permissions[]" type="checkbox"
                                                        value="barcode_settings.access"> Access barcode settings
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="barcode_settings.access"> Access barcode settings --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkSettings" name="permissions[]" type="checkbox"
                                                        value="invoice_settings.access"> Access invoice settings
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="invoice_settings.access"> Access invoice settings --}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkSettings" name="permissions[]" type="checkbox"
                                                        value="access_printers">  Access printers
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="access_printers">
                                                        Access printers --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row check_group">
                                        <div class="col-md-2">
                                            <h4>Expense</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="check_all input-icheck">Select all
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[expense_view]"
                                                            type="radio" value="all_expense.access"> Access all expenses
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[expense_view]"
                                                            type="radio" value="view_own_expense">
                                                        View own expense only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="expense.add"> Add Expense
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="expense.edit"> Edit Expense
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="expense.delete"> Delete Expense
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Home <i class="fa fa-info-circle text-info hover-q no-print "
                                                    aria-hidden="true" data-container="body" data-toggle="popover"
                                                    data-placement="auto bottom"
                                                    data-content="If unchecked only Welcome message will be displayed in Home."
                                                    data-html="true" data-trigger="hover"></i></h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck status" name="permissions[]"type="hidden" value="not_view_data">
                                                        <input class="input-icheck status" name="permissions[]"type="checkbox" value="view_data"> View Home data
                                                        {{-- <input class="input-icheck" checked="checked"
                                                            name="permissions[]" type="checkbox" value="dashboard.data">
                                                        View Home data --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Account</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck status" name="permissions_account.access[]"type="checkbox" value="account.access">  Access Accounts
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="account.access"> Access Accounts --}}
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck status" name="permissions_account.access[]"type="checkbox" value="edit_account_transaction">  Edit account transaction
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="edit_account_transaction"> Edit account transaction --}}
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck status" name="permissions_account.access[]"type="checkbox" value="delete_account_transaction">  Delete account transaction
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="delete_account_transaction"> Delete account transaction --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Access selling price groups</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck status" name="permissionscheck[]"type="hidden" value="not_access_default_selling_price">
<input class="input-icheck status" name="permissionscheck[]"type="checkbox" value="access_default_selling_price"> Default Selling Price
                                                        {{-- <input class="input-icheck" checked="checked"
                                                            name="permissions[]" type="checkbox"
                                                            value="access_default_selling_price"> Default Selling Price --}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>AssetManagement</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="asset.view"> View Asset --}}
 <input class="input-icheck status" name="permissions_Asset[]"type="hidden" value="not_asset.view"">
<input class="input-icheck status" name="permissions_Asset[]"type="checkbox" value="asset.view""> View Asset
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Crm</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[schedule_view]"
                                                            type="radio" value="crm.access_all_schedule"> Access all follow
                                                        up
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[schedule_view]"
                                                            type="radio" value="crm.access_own_schedule"> Access own follow
                                                        up
                                                    </label>
                                                </div>

                                                <hr>
                                                {{-- end --}}
                                                {{-- next --}}


                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[leads_view]"
                                                            type="radio" value="crm.access_all_leads"> Access all leads
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[leads_view]"
                                                            type="radio" value="crm.access_own_leads"> Access own leads
                                                    </label>
                                                </div>

                                                <hr>
                                            </div>
                                            {{-- end --}}
                                            {{-- next --}}
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[campaigns_view]"
                                                            type="radio" value="crm.access_all_campaigns"> Access all
                                                        campaigns
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[campaigns_view]"
                                                            type="radio" value="crm.access_own_campaigns"> Access own
                                                        campaigns
                                                    </label>
                                                </div>

                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="crm.access_contact_login"> Access contact login
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="crm.access_sources"> Access sources
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="crm.access_life_stage"> Access life stage
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="crm.access_proposal"> Access proposal
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Essentials</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.crud_leave_type"> Add/Edit/View/Delete leave
                                                        type
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[leave_crud]"
                                                            type="radio" value="essentials.crud_all_leave">
                                                        Add/Edit/View/Delete all leave
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[leave_crud]"
                                                            type="radio" value="essentials.crud_own_leave"> Add/View own
                                                        leave
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.approve_leave"> Approve Leave
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[attendance_crud]"
                                                            type="radio" value="essentials.crud_all_attendance">
                                                        Add/Edit/View/Delete all attendance
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[attendance_crud]"
                                                            type="radio" value="essentials.view_own_attendance"> View own
                                                        attendance
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.allow_users_for_attendance_from_web"> Allow
                                                        users to enter their own attendance from web
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.allow_users_for_attendance_from_api"> Allow
                                                        users to enter their own attendance from api
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.view_allowance_and_deduction"> View Pay
                                                        Component
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.add_allowance_and_deduction"> Add Pay
                                                        Component
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.crud_department"> Add/Edit/View/Delete
                                                        department
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.crud_designation"> Add/Edit/View/Delete
                                                        designation
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.view_all_payroll"> View all Payroll
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.create_payroll"> Add Payroll
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.update_payroll"> Edit Payroll
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.delete_payroll"> Delete Payroll
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.assign_todos"> Assign To Do&#039;s to others
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.create_message"> Create Message
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.view_message"> View Message
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="essentials.access_sales_target"> Access Sales Targets
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Manufacturing</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <label>
                                                            <input class="check_Manufacturing" name="permissions[]"
                                                                type="checkbox" value="">View Recipe
                                                        </label>
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox" value="manufacturing.access_recipe"> View Recipe --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="check_Manufacturing" name="permissions[]"
                                                            type="checkbox" value="Add_Recipe"> Add Recipe
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox" value="manufacturing.add_recipe"> Add Recipe --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="check_Manufacturing" name="permissions[]"
                                                            type="checkbox" value="edit_Recipe">Edit Recipe
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox" value="manufacturing.edit_recipe"> Edit Recipe --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="check_Manufacturing" name="permissions[]"
                                                            type="checkbox" value="Access_Production">Access Production
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox" value="manufacturing.access_production"> Access Production --}}
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Project</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_project" name="permissions[]"
                                                            type="checkbox" value="project.create"> Create Project
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox" value="project.create_project"> Create Project --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_project" name="permissions[]"
                                                            type="checkbox" value="Edit_Project"> Edit Project
                                                        {{-- \<input class="input-icheck" name="permissions[]" type="checkbox" value="project.edit_project"> Edit Project --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_project" name="permissions[]"
                                                            type="checkbox" value="delete_Project"> Delete Project
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox" value="project.delete_project"> Delete Project --}}
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Repair</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="repair.create"> Add Invoice
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="repair.update"> Edit Invoice
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck"
                                                            name="radio_option[repair_invoice_view]" type="radio"
                                                            value="repair.view"> View all invoice
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck"
                                                            name="radio_option[repair_invoice_view]" type="radio"
                                                            value="repair.view_own"> View own invoice
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="repair.delete"> Delete Invoice
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="repair_status.update"> Change Invoice Status
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="repair_status.access"> Add/Edit/Delete Job Sheet Status
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="job_sheet.create"> Add job sheet
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="job_sheet.edit"> Edit Job Sheet
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="job_sheet.delete"> Delete Job Sheet
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[job_sheet_view]"
                                                            type="radio" value="job_sheet.view_assigned"> View Only Assigned
                                                        Job Sheet
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="radio_option[job_sheet_view]"
                                                            type="radio" value="job_sheet.view_all"> View All Job Sheets
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- end --}}
                                    {{-- next --}}
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Superadmin</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="superadmin.access_package_subscriptions"> Access package
                                                        subscriptions
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row check_group">
                                        <div class="col-md-4">
                                            <h4>Woocommerce</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_woocommerce" name="permissions[]" type="checkbox"
                                                        value="woocommerce.syc_categories"> Sync Product Categories
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="woocommerce.syc_categories"> Sync Product Categories --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_woocommerce" name="permissions[]" type="checkbox"
                                                        value="woocommerce.sync_products"> Sync Products
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="woocommerce.sync_products"> Sync Products --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_woocommerce" name="permissions[]" type="checkbox"
                                                        value="woocommerce.sync_orders">  Sync Orders
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="woocommerce.sync_orders"> Sync Orders --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_woocommerce" name="permissions[]" type="checkbox"
                                                        value="woocommerce.map_tax_rates">  Map Tax Rates
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="woocommerce.map_tax_rates"> Map Tax Rates --}}
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="checkitem_woocommerce" name="permissions[]" type="checkbox"
                                                        value="woocommerce.access_woocommerce_api_settings">  Access  Woocommerce API settings
                                                        {{-- <input class="input-icheck" name="permissions[]" type="checkbox"
                                                            value="woocommerce.access_woocommerce_api_settings"> Access
                                                        Woocommerce API settings --}}
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary pull-left">Save</button>
                                        </div>
                                    </div>

                                    {{-- end --}}
                                    {{-- lets try  zoi --}}
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        </section>
        {{-- try end --}}
    </div>



    </div>
    </div>
    </div>
    {{-- end --}}

    </div>
    </div>

    </div>

    </div>
    </div>
@endsection
