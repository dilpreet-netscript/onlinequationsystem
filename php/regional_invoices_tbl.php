<?php
session_start();
include '../db/connect.php';
$uid = $_SESSION['userid'];
$rgn = $_SESSION['region'];
//var_dump($_SESSION);
//die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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
	$("#tbl").on('click', '.btnregionalinvoice', function () {
		
		var id1 = $(this).closest('tr').find('#dd').val();
		
		//alert(id1);
		//$(this).closest('tr').remove();
		var url_to_load = "../php/regional_update_invoice.php?id="+id1;
		//alert(url_to_load);
		$("#response_here").load(url_to_load);
	});
	
});
</script>
</head>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>

<h3>Invoices</h3>  
  <table class="table table-striped" id='tbl'>
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Address</b></td>
		<td><b>Update Invoices</b></td>
      </tr>
   
    <tbody>
	<?php
	
	$sql = "select * from customerorders where rh_status = '1' AND rh_zone = '$rgn' ";
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{
	?>
      <tr>
        <td><input type='hidden' id='dd' value="<?php echo $row[0]; ?> "><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><button type="button" class="btn btn-info btnregionalinvoice" id="btnregionalinvoice">Update Invoice</button></td>
      </tr>
	  <?php
	  }
	?>
     
    </tbody>
  </table>


</body>
</html>

