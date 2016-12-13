 <?php
 include 'connect.php';
 $id = $_GET['id'];
 ?>
 
<!DOCTYPE html>
<head>
<link href="../cs/styl1.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--script src="../js/dynamicdata.js"></script-->
<script>
$(document).ready(function(){
	$('#showProducts').html('');
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
	
	$.ajax({
        type: "GET",
        url: 'ajax_resultTable.php',			// return result from database here as table including price that you selected product parameters
        data: { ids: idArray },
        success: function (response) {
            $('#response_table').html(response);
            //console.log((response));
            },
        error: function () {
            $('#response_table').html('There was an error!');
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
		
		<?php

			//$query1 = "select * from products";
			//$query2 = "select * from parameters";
			$query = mysql_query("select * from parameters where isActive = 1 AND p_id = ' " . $id . " ' ");
				while($row = mysql_fetch_array($query))
						
					 {
						
						 $pid = $row['id'];
						 //echo $pid;
					?>
	<div class="row">
		<div class="col-sm-1">
		

			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $row['name'];?>
			<span class="caret"></span></button>
			<ul class="dropdown-menu" id="selectoption">
					<?php
					$sql2 = "select * from products_parameters_opt where product_id = ' " . $id . " ' and isActive=1";
					$par_result = mysql_query($sql2);
					while($param_row = mysql_fetch_object($par_result))
					{
					//echo $param_row->id;
					?>
									<li value="<?php echo $param_row->id;  ?>" id="paramval"><a href="#"><?php echo $param_row->paramopt; ?></a></li>
									<?php
									}
									?>
						
			</ul>
		  
		  </div>
		   <?php
					 }
					?>
		  
		  </div>
<br>
<div class="row">
<div class="col-sm-2"  id="hideonchangebranch">
																				<div class="form-group"> 
																					<div class="col-sm-offset-2">
																					  <button type="submit" class="btn btn-default" id="btnGetQuotes">Get Quotes</button>
																					</div>
																				  </div>
																				  </div>
																				  </div>

</div>
<body>
</html>