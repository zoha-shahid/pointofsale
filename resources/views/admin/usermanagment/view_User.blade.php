@extends('admin.layouts.master')
@section('content')
    <!-- partial -->

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data table
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data table</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
              <h4 class="card-title"><b>All users</b></h4>
                    </div>
                    <div class="col-2">
                        <div class="btn-group">
                            
                            <div class="buttonexport" id="buttonlist">
                                <button type="button" style="background-color: #392c70; border: none; border-radius: 8px;">
                                    <a class="btn btn-add" style="color:#fff"href="/adduser">
                                        <i class="fa fa-plus" style="color:white"></i>Add Users</button>
                                </a>
                            </div>
                        </div>

                    </div></div>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($shows as $show)
                        <tr>
                            <td>{{ $show->First_name }}</td>
                            <td>{{ $show->Username }}</td>
                            <td>{{ $show->Role}}</td>
                            <td>{{ $show-> Email}}</td>
                            <td style="padding-left: 2em">
                                <button type="button"  style="padding:0.8em 2em" class="btn btn-primary">Edit<i class="fa-light fa-comment-pen"></i></button>
                                <button type="button"  style="padding:0.8em 2em" class="btn btn-danger">Delete<i class="fa fa-trash"></i></button>
                                <button type="button"  style="padding:0.8em 2em" class="btn btn-warning">view<i class="fa-regular fa-eye"></i></button>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
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


