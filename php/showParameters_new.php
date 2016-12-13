 <?php
 include '../db/connect.php';
 $id = $_GET['id'];
 ?>
 
<!DOCTYPE html>
<head>
<link href="../css/style1.css" rel="stylesheet">
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<!--script src="../js/dynamicdata.js"></script-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	//$('#showProducts').html('');
	var idArray = new Array();	
	
	$('select').on('change', function() {
	//alert( this.value ); // or $(this).val()
	var text = $(this).val();
	//alert(text);
	
	idArray.push(text);
	//idArray.unique();
  //Array.from(new Set(idArray))
  console.log(idArray);
});
	
	
	$("#btnGetQuotes").click(function(){
	//var uniques = duplicates.unique(); // result = [1,3,4,2,8]
	$('.close-table-result').show('fast');
	//alert('a');
	$.ajax({
        type: "GET",
        url: '../php/ajax_resultTable_new.php',			// return result from database here as table including price that you selected product parameters
        data: { ids: idArray },
        success: function (response) {
            $('#resultTable').html(response);
            //console.log((response));
            },
        error: function () {
            $('#resultTable').html('There was an error!');
        }
    });
	});
	
});
</script>
</head>
<html>
<body>
<div id="wrapper">
<!--div class="row">
<!--div class="col-lg-12">
                    <h4 class="page-header">Select System Options</h4>
                </div-->
	<!--/div-->
	<div class="row">
			
		<?php

			//$query1 = "select * from products";
			//$query2 = "select * from parameters";
			$query = mysql_query("select * from parameters where isActive = 1 AND p_id = '$id' ");
				while($row = mysql_fetch_array($query))
						
					 {
						
						 $pid = $row['id'];
						 //echo $pid;
					?>
	
		
<div class="col-md-3">

			<!--button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Name-->
			<!--span id='paramtername'><?php //echo $row['name'];?></span><br-->
			<div class="form-group">
			<label for="sel1"><?php echo $row['name'];?></label><br>
			<select class="selectpicker" id="selectoption">
			<option value="">Select</option>
					<?php
					$sql2 = "select * from products_parameters_opt where product_id = '$id' and parameter_id = '$pid' and isActive=1";
					$par_result = mysql_query($sql2);
					while($param_row = mysql_fetch_object($par_result))
					{
					//echo $param_row->id;
					?>				
									<option value="<?php echo $param_row->id; ?>" id="paramval"><?php echo $param_row->paramopt; ?></option>
									<?php
									}
									?>
						
			</select>
			</div>
			 </div>
		   <?php
					 }
					?>
		 
		  </div>
<div class="row">
		<div class="col-lg-8 col-sm-6"  id="hideonchangebranch">
					<div class="form-group"> 
						<div class="col-sm-offset-2">
								<button type="submit" class="btn btn-default" id="btnGetQuotes">Add to Cart</button>
						</div>
					</div>
		</div>
</div>
<div class="row">																				  
<div class="col-md-12 close-table-result" style="display:none;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shopping Cart
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
								
									<div id="resultTable">
									</div>
									
							</div>		
						</div>
					</div>
			</div>		
					

			</div>
</div>


<body>
</html>