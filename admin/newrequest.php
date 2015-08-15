<?phpsession_start();if (!(isset($_SESSION['LOGGEDIN']) && $_SESSION['LOGGEDIN'] != '')) {	header ("Location: ../index.php");}require_once('../scripts/db_connect.php');//Print_r ($_SESSION);?><!DOCTYPE html><html>  <head>    <title>Purchase Monitoring App</title>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- Bootstrap -->    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->	<link href="../styles/css/mod.bootstrap.css" rel="stylesheet">    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>    <![endif]-->  </head>  <body> <?php	if (isset($_GET['success'])) {      if( $_GET['success'] == "true" ) {        echo "<script type='text/javascript'>alert('Item Submitted!')</script>";		echo "<script type='text/javascript'>window.location.href='newrequest.php'</script>";     } else {        echo "<script type='text/javascript'>alert('failed!')</script>";	 }	}  ?><!--Navigation Bar START -->  <nav class="navbar navbar-default" role="navigation">  <!-- Brand and toggle get grouped for better mobile display -->  <div class="navbar-header">    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">      <span class="sr-only">Toggle navigation</span>      <span class="icon-bar"></span>      <span class="icon-bar"></span>      <span class="icon-bar"></span>    </button>    <!--<a class="navbar-brand" href="#">Purchase Monitor</a>-->	<span class="navbar-brand">Purchase Monitor</span>  </div>  <!-- Collect the nav links, forms, and other content for toggling -->  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    <ul class="nav navbar-nav">      <li ><a href="index.php">Dashboard</a></li>      <li class="active"><a href="#">New Request</a></li>	  <!--<li><a href="#">Logs</a></li>-->      <li class="dropdown">        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>        <ul class="dropdown-menu">          <li><a href="#">Action</a></li>          <li><a href="#">Another action</a></li>          <li><a href="#">Something else here</a></li>          <li class="divider"></li>          <li><a href="#">Separated link</a></li>          <li class="divider"></li>          <li><a href="#">One more separated link</a></li>        </ul>-->      </li>    </ul>    <!--<form class="navbar-form navbar-left" role="search">      <div class="form-group">        <input type="text" class="form-control" placeholder="Search">      </div>      <button type="submit" class="btn btn-default">Submit</button>    </form>	-->    <ul class="nav navbar-nav navbar-right">      <li class="disabled"><a href="#" ><?php print $_SESSION['MEMBER_FNAME']." ".$_SESSION['MEMBER_LNAME'] ?></a></li>      <li class="dropdown">        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>        <ul class="dropdown-menu">          <li><a href="userdtls.php">Update Profile</a></li>		  <li class="disabled"><a href="#">Manage Users</a></li>		  <li><a href="vendors.php">Manage Vendors</a></li>          <li><a href="syslogs.php">System Logs</a></li>          <li class="divider"></li>          <li><a href="../scripts/logout_action.php">Logout</a></li>        </ul>      </li>    </ul>  </div><!-- /.navbar-collapse --></nav><!--Navigation Bar END --><!--Start Contents--><div class="content_holder"><div class="form_holder"><legend class="">Item Details</legend><form class="form-horizontal" role="form" id="RequestForm" method="post" action="../scripts/admin_newrequest.php" enctype="multipart/form-data">  <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Requested Item</label>    <div class="col-sm-5">      <input type="text" class="form-control" id="inputItem" name="ItemName" placeholder="Item Name"required autofocus>    </div>	    <div class="col-sm-5" style="padding-left: 0px;">      <button id="ItemList"class="btn btn-success" data-toggle="modal" data-target="#ItemDetails">  Item Details</button>    </div>  </div>  <div class="form-group">    <label for="RequestFrom" class="col-sm-2 control-label">Requested By</label>    <div class="col-sm-2">      <input type="text" class="form-control" id="RequesterName" name="RequesterName" placeholder="Department" required>    </div>    <div class="col-sm-5" style="padding-left: 0px; width: 36.6%">      <input type="text" class="form-control"  id="RequesterHead" name="RequesterHead" placeholder="Name" required>    </div>	  </div>  <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Total Amount</label>    <div class="col-sm-10 input-group" style="float:none; padding: 0 15px;">	<span class="input-group-addon">&#8369</span>      <input type="text" name="GrandTotal" class="form-control" id="inputItem" name=""placeholder="Amount">	</div>  </div>     <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Remarks</label>    <div class="col-sm-10">      <textarea class="form-control" rows="4" name="ItemMainNotes" ></textarea>    </div>  </div>  <legend class="">Vendor Details</legend>  <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Vendor</label>    <div class="col-sm-10">      <input type="text" class="form-control"  id="VendorSearch" name="VendorName" placeholder="Vendor Name" required>    </div>  </div>  <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Contact Person</label>    <div class="col-sm-10">      <input type="text" class="form-control" name="VendorPerson" placeholder="Contact Name">    </div>  </div>      <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Address	</label>    <div class="col-sm-10">      <input type="text" class="form-control" name="VendorAddress" placeholder="Address">    </div>  </div>      <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Contact No	</label>    <div class="col-sm-10">      <input type="text" class="form-control" name="VendorContact"  placeholder="Contact No">    </div>  </div>      <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Vendor TIN</label>    <div class="col-sm-10">      <input type="text" class="form-control" name="VendorTIN"  placeholder="Tax Identification Number">    </div>  </div>        <div class="form-group">    <label for="RequestItem" class="col-sm-2 control-label">Payment Mode</label>    <div class="col-sm-10">      <input type="text" class="form-control" name="VendorTerms"  placeholder="Mode of Payment">    </div>  </div>    <div class="form-group">    <div class="col-sm-offset-2 col-sm-10">      <div class="checkbox">        <label>          <input type="checkbox" name="UpdateVendor"> Update Vendor Details</input>        </label>      </div>    </div>  </div>  <div class="form-group">    <div class="col-sm-offset-2 col-sm-10">      <button type="submit" class="btn btn-primary active">Submit</button>	  <button type="button" class="btn btn-default"onclick="document.getElementById('RequestForm').reset();">Clear</button>    </div>  </div><!-- Modal -->	<div class="modal fade" id="ItemDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">	  <div class="modal-dialog" style="width:830px;">		<div class="modal-content">		  <div class="modal-header">			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			<h4 class="modal-title" id="myModalLabel">Item Details</h4>		  </div>		<div class="modal-body" >  		<div class="form_holder">		<div class="form-inline" role="form">			<div class="control-group row-group" id="control-group1">			  <div  class="detail-itemname form-group " >				<label  for="ItemName1" >Item</label>				<input type="text" name="itemname[]" class="form-control"  placeholder="Name" autofocus >			  </div>			  <div class="form-group detail-more" style="margin-top: 25px;">				<a id="ItemMore1" name="dtl-notes1" href="#ItemNotes1" role="button" class="btn btn-default" data-toggle="submodal"><span class="glyphicon glyphicon-tag"></span></a>			  </div>	  			  <div class="form-group detail-itemqty " >				<label for="ItemQty1" >Quantity</label>				<input type="text" name="itemqty[]" class="form-control" placeholder="Pieces" >			  </div>  			  <div class="form-group detail-itemprice " >				<label for="ItemPrice1" >Unit Price</label>				<input type="text" name="itemprice[]" class="form-control" placeholder="Amount" >			  </div>  			  <div class="form-group detail-itemtot " >				<label for="TotalAmt" >Total</label>				<input type="text" name="itemtotamt[]" class="form-control"  placeholder="Total Amount">			  </div>  		  </div>		  		<!--sub modal -->		<div class="modal sub-modal fade" id="ItemNotes1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		<div class="modal-dialog" style="width:430px;">			<div class="modal-content">            <div class="modal-body">                    <div class="control-group">                        <label class="control-label" for="itemnotes1" >Notes: </label>						<hr class="itemnotes" />                        <div class="controls dtl-notes">                            <textarea   id="dtl-notes1" name="itemnotes[]" class="form-control dtl-notes" rows="4" autofocus></textarea>                        </div>                    </div>            </div>            <div class="modal-footer modal-foot-notes">                <button class="btn btn-primary" data-dismiss="submodal" aria-hidden="true">OK</button>            </div>			</div>			</div>        </div>				<!--/sub modal -->		</div>		</div>  		<div class="modal-footer">			<button type="button" class="btn btn-info" id="addButton" >Add New Item</button>			<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>		</div>		</div><!--modal body -->		</div><!-- /.modal-content -->	  </div><!-- /.modal-dialog -->	</div><!-- /.modal -->	<div id="content_cheker" hidden>		<input type="text" id="dept_check" name="dept_checker" value="off">		<input type="text" id="name_check" name="name_checker" value="off">	</div></form></div> <!--/content-holder-->  <!--End Contents-->    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->    <script src="../styles/js/jquery-1.9.1.js"></script>    <!-- Include all compiled plugins (below), or include individual files as needed -->	<script	src="../styles/js/mod.newrequest.js"></script>	<script src="../styles/js/bootstrap.min.js"></script>	<script src="../styles/js/bootstrap.submodal.js"></script>	<script src="../styles/js/jquery-ui.js"></script>	<script src="../styles/js/vendor.list.js"></script>	<script src="../styles/js/team.list.js"></script>	<script src="../styles/js/mod.autocomplete.js"></script>  </body></html>