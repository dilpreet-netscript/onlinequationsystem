<?php
session_start();

if(!isset($_SESSION['myusername']))
{
	header('Location: ../php/main_login.php');
}
//echo $_SESSION['region'];
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


    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/font-awesome.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--script src="../js/global.js"></script-->
<script>
$(document).ready(function(){
	$('#show_invoices').click(function(){
		//alert('showinvoice');
		$('#response_here').load('../php/regional_invoices_tbl.php');
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
           
          </button>
          <a class="navbar-brand text-center" href="#">Online Quotation System</a>
        </div>
            <!-- /.navbar-header -->
			<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
       
			<li class="dropdown" id="showopt2">
               
			   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Invoices<span class="caret"></span></a>
			   
			 
                    <ul class="dropdown-menu dropdown-user" id="branch">
                        <li id="show_invoices"><a href="#"><i class="glyphicon glyphicon-tags"></i> Invoice</a>
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
			
				
                    <li><a href="../php/Logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
        </div>

           
        </nav>
  
<div class="container-fluid bg-3 text-center">

  <!--/div-->

   <div class="row">
    <div class="col-lg-4 col-sm-4">
     </div>
   <div class="col-lg-8 col-sm-8 col-md-offset-3">
      <div id="response_here"></div>
    </div>
</div>

</div>

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

