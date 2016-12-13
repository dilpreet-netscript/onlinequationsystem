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

//$('#response_here').load('../php/showProductstemp.php');

//show products on button click
$('#showopt').click(function(){
	
 $.ajax({
        type: "GET",
        url: 'showProducts.php',
        data: {},
        success: function (response) {
            $('#showProducts').html(response);
            },
        error: function () {
            $('#showProducts').html('There was an error!');
        }
    });
});

// show product parameters based on button click

/*$('#selectoption li').click(function(){
	var text = $(this).attr('value');
	alert(text);
});*/

	
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
            <li class="dropdown" id="showopt">
               <!--button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Products<span class="caret"></span></button-->
			   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<span class="caret"></span></a>
				
              <ul class="dropdown-menu" id="selectoption">
                <!--li><a href="#">Product Name</a></li-->
				<div id="showProducts"></div>
                
              </ul>
			  <!--ul class="nav navbar-top-links navbar-right"-->
              
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            <!--/ul-->
            </li>
			 <!--li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <!--li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li-->
                        <!--li class="divider"></li>
                        <li><a href="../php/Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                <!--/li-->
          </ul>
		  <ul class="nav navbar-nav dropdown-user pull-right">
		  
            <li class="dropdown">
                <a href="" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'Welcome '; //$_SESSION['myusername'] . ' ';?><i class="fa fa-user fa-fw"></i><!--Username--><i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="../php/Logout.php">Log Out</a></li>
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

  <!--div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
     
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
     
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
     
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      
    </div>
  </div-->
   <div class="row">
    
   <div class="col-lg-12 col-sm-12">
      <div id="response_blank"></div>
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

