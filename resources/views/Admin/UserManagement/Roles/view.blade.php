<!DOCTYPE html>
<html>
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="fB1Mfn2lVCmdcWg0HJyDEnePQ8WWHfnUh1vghPiM">
    <link rel="stylesheet" href="{{asset('https://pos.ultimatefosters.com/css/vendor.css?v=477')}}">
<!-- app css -->
<link rel="stylesheet" href="{{asset('https://pos.ultimatefosters.com/css/app.css?v=477')}}">
    <title>View User - Awesome Shop</title>
</head>



  {{-- rdff end --}}
<style type="text/css">
	/*
	* Pattern lock css
	* Pattern direction
	* http://ignitersworld.com/lab/patternLock.html
	*/
	.patt-wrap {
	  z-index: 10;
	}
	.patt-circ.hovered {
	  background-color: #cde2f2;
	  border: none;
	}
	.patt-circ.hovered .patt-dots {
	  display: none;
	}
	.patt-circ.dir {
	  background-image: url("https://pos.ultimatefosters.com/img/pattern-directionicon-arrow.png");
	  background-position: center;
	  background-repeat: no-repeat;
	}
	.patt-circ.e {
	  -webkit-transform: rotate(0);
	  transform: rotate(0);
	}
	.patt-circ.s-e {
	  -webkit-transform: rotate(45deg);
	  transform: rotate(45deg);
	}
	.patt-circ.s {
	  -webkit-transform: rotate(90deg);
	  transform: rotate(90deg);
	}
	.patt-circ.s-w {
	  -webkit-transform: rotate(135deg);
	  transform: rotate(135deg);
	}
	.patt-circ.w {
	  -webkit-transform: rotate(180deg);
	  transform: rotate(180deg);
	}
	.patt-circ.n-w {
	  -webkit-transform: rotate(225deg);
	   transform: rotate(225deg);
	}
	.patt-circ.n {
	  -webkit-transform: rotate(270deg);
	  transform: rotate(270deg);
	}
	.patt-circ.n-e {
	  -webkit-transform: rotate(315deg);
	  transform: rotate(315deg);
	}
</style>

            </head>

    <body class=" hold-transition skin-blue-light sidebar-mini ">
        <div class="wrapper thetop">
            <script type="a36af91c1a6cbb6d1a2c2f2e-text/javascript">
                if(localStorage.getItem("upos_sidebar_collapse") == 'true'){
                    var body = document.getElementsByTagName("body")[0];
                    body.className += " sidebar-collapse";
                }
            </script>

            <!-- Content Wrapper. Contains page content -->
            <div class=" content-wrapper ">
                <!-- empty div for vuejs -->
                <div id="app">
                                    </div>
                <!-- Add currency related field-->
                <input type="hidden" id="__code" value="USD">
                <input type="hidden" id="__symbol" value="$">
                <input type="hidden" id="__thousand" value=",">
                <input type="hidden" id="__decimal" value=".">
                <input type="hidden" id="__symbol_placement" value="before">
                <input type="hidden" id="__precision" value="2">
                <input type="hidden" id="__quantity_precision" value="2">
                <!-- End of currency related field-->
                                    <input type="hidden" id="view_export_buttons">
                                                                    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <h3>View User</h3>
            </div>
            <div class="col-md-4 col-xs-12 mt-15 pull-right">
                <select class="form-control select2" id="user_id" name="user_id"><option value="1" selected="selected">Mr Admin </option><option value="2">Mr Demo Cashier</option><option value="3">Mr. Demo Admin</option><option value="9">Mr. Super Admin</option><option value="10">Mr. WooCommerce User</option><option value="11">Mr Admin Essential </option></select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">

                        <img class="profile-user-img img-responsive img-circle" src="https://ui-avatars.com/api/?name=Admin" alt="User profile picture">

                        <h3 class="profile-username text-center">
                            Mr Admin
                        </h3>

                        <p class="text-muted text-center" title="Role">
                            Admin
                        </p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Username</b>
                                <a class="pull-right">admin</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b>
                                <a class="pull-right"><span class="__cf_email__" data-cfemail="4021242d292e002538212d302c256e232f2d">[email&#160;protected]</span></a>
                            </li>
                            <li class="list-group-item">
                                <b>Is active ?</b>
                                                                    <span class="label label-success pull-right">
                                        Active                                    </span>
                                                            </li>
                        </ul>
                                                    <a href="https://pos.ultimatefosters.com/users/1/edit" class="btn btn-primary btn-block">
                                <i class="glyphicon glyphicon-edit"></i>
                                Edit                            </a>
                                                </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#user_info_tab" data-toggle="tab" aria-expanded="true"><i class="fas fa-user" aria-hidden="true"></i> User Information</a>
                        </li>

                        <li>
                            <a href="#documents_and_notes_tab" data-toggle="tab" aria-expanded="true"><i class="fas fa-paperclip" aria-hidden="true"></i> Documents & Note</a>
                        </li>

                        <li>
                            <a href="#activities_tab" data-toggle="tab" aria-expanded="true"><i class="fas fa-pen-square" aria-hidden="true"></i> Activities</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="user_info_tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                            <p><strong>Sales Commission Percentage (%): </strong> 0.00%</p>
                                    </div>
                                    <div class="col-md-6">

                                                                                                                            <p>
                                            <strong>Allowed Contacts: </strong>
                                                All
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
	<div class="col-md-12">
		<div class="col-md-12">
			<h4>More Informations</h4>
		</div>
		<div class="col-md-4">
			<p><strong>Date of birth:</strong> </p>
			<p><strong>Gender:</strong> </p>
			<p><strong>Marital Status:</strong> </p>
			<p><strong>Blood Group:</strong> </p>
			<p><strong>Mobile Number:</strong> </p>
			<p><strong>Alternate contact number:</strong> </p>
			<p><strong>Family contact number:</strong> </p>
		</div>
		<div class="col-md-4">
			<p><strong>Facebook Link:</strong> </p>
			<p><strong>Twitter Link:</strong> </p>
			<p><strong>Social Media 1:</strong> </p>
			<p><strong>Social Media 2:</strong> </p>
		</div>
		<div class="col-md-4">
			<p><strong>Custom field 1:</strong> </p>
			<p><strong>Custom field 2:</strong> </p>
			<p><strong>Custom field 3:</strong> </p>
			<p><strong>Custom field 4:</strong> </p>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-4">
			<p><strong>ID proof name:</strong>
			</p>
		</div>
		<div class="col-md-4">
			<p><strong>ID proof number:</strong>
			</p>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="col-md-6">
			<strong>Permanent Address:</strong><br>
			<p></p>
		</div>
		<div class="col-md-6">
			<strong>Current Address:</strong><br>
			<p></p>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="col-md-12">
			<h4>Bank Details:</h4>
		</div>
				<div class="col-md-4">
			<p><strong>Account Holder's Name:</strong> </p>
			<p><strong>Account Number:</strong> </p>
		</div>
		<div class="col-md-4">
			<p><strong>Bank Name:</strong> </p>
			<p><strong>Bank Identifier Code:</strong> </p>
		</div>
		<div class="col-md-4">
			<p><strong>Branch:</strong> </p>
			<p><strong>Tax Payer ID:</strong> </p>
		</div>
			      	        <div class="clearfix"></div>
<hr>
<div class="col-md-12">
	<h4>HRM Details:</h4>
</div>
<div class="col-md-12">
	<p><strong>Department:</strong> </p>
	<p><strong>Designation:</strong> </p>
	<p>
		<strong>Basic salary:</strong>
			</p>

	<p>
		<strong>Pay Cycle:</strong>
			</p>

	<p>
		<strong>Primary work location:</strong>
					All locations
			</p>
</div>
	      	    	</div>
</div>                        </div>
                        <div class="tab-pane" id="documents_and_notes_tab">
                            <!-- model id like project_id, user_id -->
                            <input type="hidden" name="notable_id" id="notable_id" value="1">
                            <!-- model name like App\User -->
                            <input type="hidden" name="notable_type" id="notable_type" value="App\User">
                            <div class="document_note_body">
                            </div>
                        </div>
                        <div class="tab-pane" id="activities_tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-condensed">
    <tr>
        <th>Date</th>
        <th>Action</th>
        <th>By</th>
        <th>Note</th>
    </tr>
            <tr>
            <td>06/07/2022 10:37</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 10:20</td>
            <td>
                Logout
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 10:18</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 10:18</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 10:11</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 10:11</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 10:06</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 10:03</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:57</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:53</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:39</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:35</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:30</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:27</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:22</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:21</td>
            <td>
                Logout
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:17</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:14</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:13</td>
            <td>
                Logout
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:10</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:10</td>
            <td>
                Logout
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 09:09</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:57</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:55</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:52</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:49</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:48</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:47</td>
            <td>
                Logout
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:44</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:43</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:37</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:37</td>
            <td>
                Logout
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
            <tr>
            <td>06/07/2022 08:36</td>
            <td>
                Login
            </td>
            <td>
                Mr Admin

                            </td>
            <td>


                            </td>
        </tr>
    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

                <div class='scrolltop no-print'>
                    <div class='scroll icon'><i class="fas fa-angle-up"></i></div>
                </div>


                <!-- This will be printed -->
                <section class="invoice print_section" id="receipt_section">
                </section>

            </div>
            <div class="modal fade" id="todays_profit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Today's profit</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="modal_today" value="2022-06-07">
        <div class="row">
          <div id="todays_profit">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>            <!-- /.content-wrapper -->
</html>
