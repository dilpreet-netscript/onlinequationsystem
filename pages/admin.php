<?php
session_start();

if(!isset($_SESSION['myusername']))
{
	header('Location: ../php/main_login.php');
}

//echo $_SESSION['log_type'];
// this code below also work
/*if($_SESSION['myusername'] =='')
{
header('Location: ../php/main_login.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard: NetScript IT Services Pvt Ltd</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <!--link href="../css/metisMenu.min.css" rel="stylesheet"-->

    <!-- Custom CSS -->
    <!--link href="../dist/css/sb-admin-2.css" rel="stylesheet"-->

    <!-- Morris Charts CSS -->
    <!--link href="../vendor/morrisjs/morris.css" rel="stylesheet"-->

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!--script src="../js/global.js"></script-->
<script>

$(document).ready(function(){

$('.permituserday').click(function() {
    //var cat1 =  $(this).attr("id");
	$('#response_here').load('../php/permission_tbl.php');
	
});

$('#changepassword').click(function(){
	//alert('change');
 $.ajax({
        type: "GET",
        url: '../php/change.php',
        data: {},
        success: function (response) {
            $('#response_here').html(response);
            },
        error: function () {
            $('#response_here').html('There was an error!');
        }
    });
});

$('#memberadd').click(function(){
	$('#response_here').load('../php/register_member.php');
	//alert('register');
});



$('#order li').click(function() {
    //alert($(this).attr('id').val());
	//alert( $('#aa li').attr('id'));
	var cat =  $(this).attr("id");
	//alert(cat);		//show which category is clicked
	$.ajax({
        type: "GET",
        url: '../php/' + cat + '.php',
        data: {},
        success: function (response) {
            $('#response_here').html(response);
            },
        error: function () {
            $('#response_here').html('There was an error!');
        }
    });
 });
 
 $('#branch li').click(function() {
    //alert($(this).attr('id').val());
	//alert( $('#aa li').attr('id'));
	var cat =  $(this).attr("id");
	//alert(cat);		//show which category is clicked
	$.ajax({
        type: "GET",
        url: '../php/' + cat + '.php',
        data: {},
        success: function (response) {
            $('#response_here').html(response);
            },
        error: function () {
            $('#response_here').html('There was an error!');
        }
    });
 });

});

</script>

<style>

.navbar-brand text-center1 {
    text-align:center
}
</style>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
             <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <!--span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span-->
          </button>
          <a class="navbar-brand text-center" href="#">Online Quotation System</a>
        </div>
            <!-- /.navbar-header -->
			<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li-->
            <li class="dropdown" id="showopt1">
               
			   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Price Quatation<span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-user" id="order">
                        <li id="new_order"><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> New Order</a>
                        </li>
                        <li id="process_order"><a href="#"><i class="glyphicon glyphicon-saved"></i> Process Order</a>
                        </li>
						<li id="ship_order"><a href="#"><i class="glyphicon glyphicon-th"></i> Ship Order</a>
                        </li>
						
						<li class="divider"></li>
						<li id="delivered_order"><a href="#"><i class="glyphicon glyphicon-ok"></i> Status</a>
                        </li>

                        
                        
                    </ul>
            <!--/ul-->
            </li>
			<li class="dropdown" id="showopt2">
               
			   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage<span class="caret"></span></a>
			   
			 
                    <ul class="dropdown-menu dropdown-user" id="branch">
                        <li id="add_product"><a href="#"><i class="glyphicon glyphicon-plus"></i> Product</a>
                        </li>
                        <li id="add_parameter"><a href="#"><i class="glyphicon glyphicon-list"></i> Parameter</a>
                        </li>
						<li id="add_option"><a href="#"><i class="glyphicon glyphicon-indent-left"></i> Option</a>
                        </li>
						<li class="divider"></li>
						<li id="display_invoices"><a href="#"><i class="glyphicon glyphicon-tags"></i> Invoices</a>
                        </li>
						<li id="add_manage"><a href="#"><i class="glyphicon glyphicon-th"></i> Control</a>
                        </li>
						<li id="list_members"><a href="#"><i class="glyphicon glyphicon-user"></i> Member List</a>
                        </li>
                        
                        
                    </ul>
					</li>
          </ul>
		  <ul class="nav navbar-nav dropdown-user pull-right">
		 
		  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
		  
            <li class="dropdown">
                <a href="" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'Welcome '; //$_SESSION['myusername'] . ' ';?><i class="fa fa-user fa-fw"></i><!--Username--><i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu pull-right" id="setting2">
				<li id="changepassword"><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
				<!--li><a href="../php/status.php">Status</a></li-->
				<li id='memberadd'><a href="#"><i class="glyphicon glyphicon-user"></i> Add Member</a></li>
				<li class='permituserday'><a href="#" ><i class="glyphicon glyphicon-ruble"></i> Permission</a></li>
                    <li><a href="../php/Logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
        </div>

            <!--ul class="nav navbar-top-links navbar-right">
              
                <!-- /.dropdown -->
                <!--li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../php/Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                <!--/li-->
                <!-- /.dropdown -->
            <!--/ul-->
            <!-- /.navbar-top-links -->

            <!-- /.navbar-static-side -->
        </nav>
  
<div class="container-fluid bg-3 text-center">

  
   <div class="row">
    
   <div class="col-lg-12 col-sm-12">
      <div id="response_blank"></div>
    </div>
	<div class="col-lg-12 col-sm-12">
      <div id="response_change_password"></div>
    </div>
</div>
   <div class="row">
    <div class="col-lg-4 col-sm-4">
	 
     </div>
   <div class="col-lg-8 col-sm-8 col-md-offset-3">
      <div id="response_here"></div>
    </div>
</div>
<!--div class="row">
    <div class="col-lg-12 col-sm-8">
      <div id="response_table"></div>
    </div>
</div><br>

<div class="row">
    <div class="col-lg-12 col-sm-8">
      <div id="response_form"></div>
    </div>
</div-->
</div>

<!--footer class="footer">
	
	<!--p class="text-muted">NetScript IT Services Pvt Ltd</p-->
	
	<!--div class="panel-footer text-center"><strong>NetScript IT Services Pvt Ltd</strong></div>
	</footer-->
	
	<div id="footer" class="navbar navbar-default navbar-fixed-bottom">
	<div class="col-sm-12 col-md-12 col-xl-12  col-lg-12  footer">
              <!--ul class="nav navbar-nav"><li><a href=""><strong>NetScript IT Services Pvt. Ltd.</strong></a></li></ul-->
			  <div class="panel-footer text-center"><strong>NetScript IT Services Pvt Ltd</strong></div>
            </div>
			</div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

</body>
</html>

