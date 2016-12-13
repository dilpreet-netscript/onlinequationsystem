 <?php
 include '../db/connect.php';
$id = $_GET['id'];
 ?>
 
<!DOCTYPE html>
<head>
<link href="../css/style1.css" rel="stylesheet">
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<!--script src="../js/dynamicdata.js"></script-->
<script>
$(document).ready(function(){
	$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	//$('#showProducts').html('');
	var idArray = new Array();	
	//var idArray[]={};
	


	$('#selectoption li').click(function() {
    //var index = $(this).index();
    var text = $(this).attr('value');
	//alert(text);
	
	idArray.push(text);
	idArray.unique();
	//console.log(idArray);
	});
	
	
	$("#btnGetQuotes").click(function(){
	//var uniques = duplicates.unique(); // result = [1,3,4,2,8]
	$('.close-table-result').show('fast');
	//alert('a');
	$.ajax({
        type: "GET",
        url: '../php/ajax_resultTable.php',			// return result from database here as table including price that you selected product parameters
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
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<div id="wrapper" style="margin-top:5px;">
<!--div class="row">
<!--div class="col-lg-12">
                    <h4 class="page-header">Select System Options</h4>
                </div-->
	<!--/div-->
		
		<?php

			//$query1 = "select * from products";
			//$query2 = "select * from parameters";
			$query = mysql_query("select * from parameters where isActive = 1 AND p_id = ' " . $id . " ' ");
				while($row = mysql_fetch_array($query))
						
					 {
						
						 $pid = $row['id']; $productArray = array();
						 //echo $pid; $arrproduct = array();
					?>
	<div class="row top-buffer">
		<div class="col-sm-2">
		<div class="dropdown">
<!-- if($pid =='') { echo 'There is no Product available...';} -->
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $productArray[]=$row['name'];?> 
			<span class="caret"></span></button>
			<ul class="dropdown-menu" id="selectoption">
					<?php
					$sql2 = "select * from products_parameters_opt where parameter_id = ' " . $pid . " ' and isActive=1";
					$par_result = mysql_query($sql2);
					while($param_row = mysql_fetch_object($par_result))
					{
					//echo $param_row->id;
					?>
									<li value="<?php echo $param_row->id;  ?>" id="paramval"><a href="#"><?php echo $param_row->id . ' ' . $param_row->paramopt; ?></a></li>
									<?php
									}
									?>
						
			</ul>
		  </div>
<!--select class="selectpicker">
  <option>Quantity</option>
  </select-->
		  </div>
		   <?php
					 } //print_r($productArray);
					?>
		  
		  </div>
<br>
<div class="row">
<div class="col-lg-8 col-sm-6"  id="hideonchangebranch">
																				<div class="form-group"> 
																					<div class="col-sm-offset-2">
																					  <button type="submit" class="btn btn-default" id="btnGetQuotes">Add to Cart</button>
																					</div>
																				  </div>
																				  </div>
																				  </div>
																				  
																				  <div class="col-lg-12 close-table-result" style="display:none;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shopping Cart
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
								
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