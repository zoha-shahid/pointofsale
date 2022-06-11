@extends('Admin.layouts.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Add sales commission agent
                </h3>
            </div>

            @foreach ($shows as $val )
            <form method="POST" autocomplete="off" enctype="multipart/form-data" action=""> {{ csrf_field() }}
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="box-body">
                                    <div class="row">
                                         {{-- hiden --}}

                                         <input type="hidden" class="form-control" name="id" value="{{$val->id}}">

                                         {{-- end --}}
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="surname">Prefix:</label>
                                                <input class="form-control" placeholder="Mr / Mrs / Miss" name="Prefix"
                                                    type="text" value="{{$val->Prefix}}" id="surname">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="first_name">First Name:*</label>
                                                <input class="form-control" required placeholder="First Name"
                                                name="first_name" type="text" value="{{$val->first_name}}"  id="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="last_name">Last Name:</label>
                                                <input class="form-control" placeholder="Last Name" name="last_name"
                                                    type="text" value="{{$val->last_name}}" id="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="email">Email:*</label>
                                                <input class="form-control" required placeholder="Email" name="email"
                                                    type="text"  value="{{$val->email}}" id="email">
                                            </div>
                                        </div>

                                       {{-- zoi --}}
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Contact Number:*</label>
                                            <input class="form-control" required placeholder="Contact Number" name="number"
                                                type="text"  value="{{$val->number}}" id="number">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="permanent_address"> Address:</label>
                                            <textarea class="form-control" placeholder="Address" rows="3" name="permanent_address" cols="50"
                                             id="permanent_address"> "{{$val->permanent_address}}" </textarea>
                                        </div>
                                </div>
                                <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Sales Commission Percentage (%):</label>
                                                <input class="form-control" required placeholder="Sales Commission Percentage (%):" name="Commission_Percentage"
                                                    type="text" value="{{$val->Commission_Percentage}}" id="Commission Percentage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">
                                           <button type="submit" class="btn btn-primary pull-left">Save</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-light pull-left">Cancel</button>
                                         </div>
                                    </form>
            @endforeach

                            </div>
                        </div>
                        </div>
                        {{-- end --}}




@endsection

