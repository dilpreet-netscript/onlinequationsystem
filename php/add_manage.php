<?php
include '../db/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <script>
 $(document).ready(function(){
$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});	 
 var idval = new Array();
var txt; 
//$('#plist').load('../php/manage_product.php');
$('#manage_inventory').load('../php/inventory.php');

});

</script>
</head>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<div id="productform">
<div class="row">
<div class="col-lg-6">
                    <h3 class="page-header">Manage All</h3>
                </div>
				<!--div class="col-lg-6">
                    <h3 class="page-header">Search Product</h3>
                </div-->
	</div>

  <!--p>Resize the browser window to see the effect.</p-->
  <!-- action="../php/addproduct.php?status='text'"-->
  
</div>
  <div class="row">
    <div class="col-sm-4">
<div id="manage_inventory"></div>
</div>
</div>
</body>
</html>

