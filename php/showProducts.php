 <?php
 include '../db/connect.php';
 ?>
 
<!DOCTYPE html>
<head>
<!--link href="../cs/style1.css" rel="stylesheet"-->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
<!--script src="../js/dynamicdata.js"></script-->
<script>
$(document).ready(function(){
	var productid='';


	$('#selectoption li').click(function() {
		productid = $(this).attr('value');
		//alert(productid);
		//console.log(text);
						$.ajax({
								type: "GET",
								url: '../php/showParameters_new.php',
								data: { id: productid },
								success: function (response) {
									$('#response_here').html(response);
									},
								error: function () {
									$('#response_here').html('There was an error!');
								}
							});
		});

});	
</script>
</head>
<html>
<body>

<div class="dropdown">

<?php

$sql = "select * from products where isActive = 1 ";
$result = mysql_query($sql) or die(mysql_error());
?>

<!--ul class="dropdown-menu" id="selectoption"-->
<?php
while($row = mysql_fetch_array($result))
{
	?>
	
	<li value="<?php echo $row[0]; ?>" id="productid"><a href="#"><?php echo $row[1]; ?></a></li>
	
	
	<?php
}
 ?>

 </div>
 <!--/ul-->
<div id="response_table">
</div>
 </body>
 </html>