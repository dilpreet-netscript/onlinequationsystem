<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <script>
  $(document).ready(function(){

    $("#tbl3").on('click', '.btnDelete', function () {
		
		var id = $(this).closest('tr').find('#dd').val();
		$.post("../php/delete_option.php", {ids: id}, function(){
            $('#option_tbl').load('../php/option_tbl.php');
        });
	  //alert(id);
	  $(this).closest('tr').remove();
  });


$("#tbl3").on('click', '.action1', function () {
		
		var id = $(this).closest('tr').find('#dd').val();
		var chk = $(this).closest('tr').find('#dd1').val();
		
		//alert(id+'-'+chk);
		$.ajax({
        type: "POST",
        url: "../php/update_status_option.php",
        async: true,
        data: {action1:id,chkval:chk},
        success: function (msg) {
            //alert('Success');
			//$('#manage_inventory').html(msg);
			$('#option_tbl').load('../php/option_tbl.php');
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

$sql = "select * from products_parameters_opt";

$result = mysql_query($sql) or die(mysql_error());
?>
<table class="table table-striped" id="tbl3">
    <thead>
      <tr>
        <th>Option Name</th>
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
	
	echo "<td><input type='hidden' id='dd' value=".$row[0].">" .$row[3]. "</td>" . "<td>" .$row[4]. "</td>" . "<td>" .$row[5]. "</td>" . "<td>" .$row[4]. "</td><td>";
	
	if($row[5] =='1')
	{?>
	<input type='checkbox' name='product_chk[]' class='action1' id='dd1' class='dd1' value="true" checked></td>
	<?php
	}
	if($row[5] =='0')
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