 <?php
 include 'connect.php';
 ?>
 
<!DOCTYPE html>
<head>
<link href="../cs/styl1.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){


	$('#selectoption li').click(function() {
    //var index = $(this).index();
    var text = $(this).attr('value');
	
	idArray.push(text);
	idArray.unique();
	});
	
	$("#btnGetQuotes").click(function(){
	$('#hideonchangebranch').show("fast");	
	$('.close-table-result').show("fast");
	$('#resultTable').html("");
	
	$.ajax({
        type: "GET",
        url: 'ajax_resultTable.php',			// return result from database here as table including price that you selected product parameters
        data: { ids: idArray },
        success: function (response) {
            $('#resultTable').html(response);
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



		<div class="col-sm-1">
		<div class="dropdown">

			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $row[1];?>
			<span class="caret"></span></button>
			<ul class="dropdown-menu" id="selectoption">
					<?php
					$sql = "select * from products where isActive = 1 ";
			$result = mysql_query($sql) or die(mysql_error());
					while($param_row = mysql_fetch_object($par_result))
					{
					//echo $param_row->id;
					?>
									<li value="<?php echo $param_row->id;  ?>" id="paramval"><a href="#"><?php echo $param_row->name; ?></a></li>
									<?php
									}
									?>
						
			</ul>
		  </div>
		
		  
		  </div>

<body>
</html>