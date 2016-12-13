<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <script>
  $(document).ready(function(){

  $("#tbl1").on('click', '.btnDelete', function () {
		
		var id = $(this).closest('tr').find('#dd').val();
		$.post("../php/delete_products.php", {ids: id}, function(){
            $('#product_tbl').load('../php/product_tbl.php');
        });
	  //alert(id);
	  $(this).closest('tr').remove();
  });


$("#tbl1").on('click', '.action1', function () {
		
		var id = $(this).closest('tr').find('#dd').val();
		var chk = $(this).closest('tr').find('#dd1').val();
	
		//alert(id+'-'+chk);
		$.ajax({
        type: "POST",
        url: "../php/update_status_product.php",
        async: true,
        data: {action1:id,chkval:chk},
        success: function (msg) {
            //alert('Success');
			//$('#manage_inventory').html(msg);
			$('#product_tbl').load('../php/product_tbl.php');
            if (msg != 'success') {
                //alert('Fail');
				console.log('Fail');
            }
        }
    });
});


	});
  
  </script>
</head>
<body>
<?php

include '../db/connect.php';

$sql = "select * from products";

$result = mysql_query($sql) or die(mysql_error());
?>
<table class="table table-striped" id="tbl1">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Active</th>
		<th>Date</th>
		<th>Enable/Disable</th>
      </tr>
    </thead>
<?php
while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	
	echo "<td><input type='hidden' id='dd' value=".$row[0].">" .$row[1]. "</td>" . "<td>" .$row[2]. "</td>" . "<td>" .$row[3]. "</td>" . "<td>" .$row[4]. "</td><td>";
	
	if($row[3] =='1')
	{?>
	<input type='checkbox' name='product_chk[]' class='action1' id='dd1' class='dd1' value="true" checked></td>
	<?php
	}
	if($row[3] =='0')
	{
		?>
	<input type='checkbox' name='product_chk[]' class='action1' id='dd1' class='dd1' value='false'></td>
<?php	
	}
	echo "<td><button class='glyphicon glyphicon glyphicon-remove btnDelete'></button></td></tr>";
		
}
?>
</table>
</body></html>