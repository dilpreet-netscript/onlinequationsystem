 <?php
 include 'connect.php';
$id = $_GET['id'];
 ?>
 
<!DOCTYPE html>
<head>
<link href="../cs/style1.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../js/global.js"></script>
<script>
$(document).ready(function(){
	//$('#showProducts').html('');
	/*var idArray = new Array();	
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
	
		$('.close-table-result').show('fast');
		if(idArray.length<=0) {$('..close-table-result').hide('fast');}
	
	$.ajax({
        type: "GET",
        url: 'ajax_resultTable.php',
        data: { ids: idArray },
        success: function (response) {
            $('#resultTable').html(response);
             },
        error: function () {
            $('#resultTable').html('There was an error!');
        }
    });
	
	});
	
	//cartAction('empty','')
	$('#emtpycart').click(function(){
		//alert('d');
		idArray.length = 0;
		$( "#deletetbl" ).empty();
		$( "#onclick").hide('fast');
		//$('#resultTable').hide('fast');
	});*/
	/*$('.selectoption option:selected').click(function() {
    //var index = $(this).index();
    var text = $(this).attr('value');
	alert(text);
	
	idArray.push(text);
	idArray.unique();
	//console.log(idArray);
	});*/
	
	
});
/*function deletecartarray()
{
	console.log(<?php print_r($arrayIDs); ?>);
	//console.log(idArray);
}*/

</script>

</head>
<html>
<body>

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
						
						 $pid = $row['id']; //$productArray = array();
						 //echo $pid; $arrproduct = array();
					?>
	<div class="row top-buffer">
		<div class="col-lg-3">
		
		<select class="selectpicker selectoption">
<!-- if($pid =='') { echo 'There is no Product available...';} -->
					<option value= "<?php echo $row['id'];?>"><?php echo $row['name'];?> </option>
			
					<?php
					$sql2 = "select * from products_parameters_opt where parameter_id = ' " . $pid . " ' and isActive=1";
					$par_result = mysql_query($sql2);
					while($param_row = mysql_fetch_object($par_result))
					{
					//echo $param_row->id;
					?>
									<li><option value="<?php echo $param_row->id;  ?>" id="paramval"><a href="#"><?php echo $param_row->id . ' ' . $param_row->paramopt; ?></a></option></li>
									<?php
									}
									?>
									
						</select>
			
		  </div>

  <!--Qty: <input type="text" name="quanity[]" id="quantity" Placeholder="Quanity" maxlength="4" size="3" style="margin-top:5px;">-->
  <!--input type="text" name="pin" maxlength="4" size="4"-->
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
																				  
																				  <div class="col-lg-10 close-table-result" style="display:none;">
                    <div class="panel panel-default" id='hidewhenempty'>
                        <div class="panel-heading">
                            Shopping Cart <button class='btn-danger' id='emtpycart' style='margin-left:300px;'>Empty Cart</button>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								
									<div id="resultTable">
									</div>
									
							</div>		
						</div>
					</div>
					
			</div>		
					

			<!--/div-->
			

</div>


<body>
</html>