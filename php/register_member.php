<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
	<script>
$(document).ready(function(){
	//$('#register-submit').addClass('disabled');
	$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	
	$('#username').change(function(){
		var val = $('#username').val();
		//alert(val);
		$.ajax({
        type: "post",
        url: '../php/availabeluser.php',			
        data: { q: val },
        success: function (response) {
            //$('#resultTable').html(response);
            //console.log((response));
			$('#exituser').text(response);
			//console.log(response);
				if(response == "You got username")
				{
					$('#register-submit').removeAttr('disabled');
				}
				if(response == "Exist")
				{
					$('#register-submit').attr('disabled' , 'disabled');
				}
            },
        error: function () {
            //$('#resultTable').html('There was an error!');
			return false;
        }
    });
	});
	
	
	$(".sopt").on("change",function() {
		var selectval = $(this).val();
		if(selectval == "regionalhead")
		{
			//alert(selectval);
			$("#regionalhead").show();
		}
		if(selectval != "regionalhead" )
			$("#regionalhead").hide();
			
		 
       //var id = "#test"+(this.selectedIndex+1);
	//$(id).show();}
	/*else
	{
		return false;
	}*/
    }).change();
	

});


	
	</script>
<style>
.panel-login {
    border-color: #ccc;
	width:60%;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
.sopt
{
	float:left;
}

</style>	
</head>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
				
<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<div class="col-xs-6">
								<h3 class="active">Register</h3>
							</div>
						</div>
						<hr>
					</div>
<div class="panel-body">	
<div class="row">
							<div class="col-lg-9">
								<form id="register-form" action="../php/addmember_admin.php" method="post" role="form">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="required"><span id="exituser"></span>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required="required">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="required">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="required"><div id="chkpass"></div>
									</div>
									
									
									<div class="form-group">
									 
										<select class="selectpicker  show-tick sopt" name="usertype[]">
													  <option value="" selected>Select Type</option>
													  <option value="admin">Admin</option>
													   <option value="regionalhead">Regional Head</option>
													    <option value="pricemanager">Price Manager</option>
													  <option value="user">User</option>
													  <option value="vendor">Vendor</option>
													  <option value="warehouse">Warehouse</option>
													  <option value="sales">Sales</option>
													  <option value="delivery">Delivery</option>
													  <option value="test">Test</option>
										</select>
										<select class="selectpicker  show-tick sop2" name="region" id="regionalhead" style="display:none; width:80px;">
												<option value="" selected>Select</option>
												  <option value="north">North</option>
												  <option value="east">East</option>
												  <option value="west">West</option>
												  <option value="south">South</option>
												</select>
									   </div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register"  disabled="disabled" value="Register Now">
												<!--button type="submit" name="register-submit" id="register-submit" class="btn btn-primary active">Register Now</button-->
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
				</div>
</body>
</html>