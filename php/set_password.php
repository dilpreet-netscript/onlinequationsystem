<?php $username = $_POST['myusername'];?>

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
<link href="../css/stylelogin.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	 $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
		
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
	/*if(($("#myusername").text() != '') AND !$("#mypassword").text() != ''))
	{
		$('#login-submit').prop('disabled' , false);
	}*/
	
	$('#forgett-submit').click(function(){
		
		//alert('a'); set_password.php
		$.ajax({
			type:'GET'
			
		});
	});
 
	
});

</script>
</head>
<body>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
					<div class="row">
						<div class="col-md-6 col-md-offset-3"><p align="center" style="margin-left:220px;"><h5>Happy <?php echo date('l'); ?></h5></p></div>
						</div>
					
					
						<div class="row">
							<div class="col-xs-4">
								<a href="#" class="active" id="login-form-link">Forget Password</a>
							</div>
							<div class="col-xs-4">
								<a href="main_login.php" id="register-form-link">Login</a>
							</div>
							<div class="col-xs-4">
								<a href="register.php" id="register-form-link">Register</a>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="update_login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="myusername" id="myusername" tabindex="1" class="form-control" placeholder="Enter Username" value="<?php echo $username; ?>">
									</div>
									<div class="form-group">
									<input type="hidden" name="userid" value="">
										<input type="password" name="mypassword" id="mypassword" tabindex="2" class="form-control" placeholder="Enter New Password" value="">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="forgett-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
											</div>
										</div>
									</div>
									<!--div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="forgett_password.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div-->
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
	</html>