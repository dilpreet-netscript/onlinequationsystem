<?php
include '../db/connect.php';

$sql = "select * from customerorders where order_delivered = 0 ";

$result = mysql_query($sql) or die(mysql_error());

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <script>
  $(document).ready(function(){
	  $('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});

  $("#deliveryorder").on('click', '.btnDelivered', function () {
		
		var customerId = $(this).closest('tr').find('#id1').text();
		$.post("../php/order_placed.php", {'id':customerId}, function(){
            $('#response_here').load('../php/order_delivery.php');
        });
	  //alert(id);
	  $(this).closest('tr').remove();
  });



}); 
  </script>
</head>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<div id="deliveryorder">
<div class="row">
						<div class="col-lg-10"><h3>Delivery</h3></div>
						</div>
 
  <div class="row">
  <div class="col-lg-10">
  <table class="table" id="ordertable">
    <thead>
      <tr>
        <td><b>Name</td></b>
        <td><b>Email</td></b>
        <td><b>Contact</td></b>
		<td><b>Address</td></b>
        <td><b>Message</td></b>
        <td><b>Location</td></b>
		<td><b>Date</td></b>
		<td><b>Orders</td></b>
		<td><b>Action</td></b>
      </tr>
    </thead>
    <tbody>
	<?php
	while($row = mysql_fetch_array($result))
	{		
	?>
      <tr class="success">
	  <td style="display:none;" id="id1"><?php echo $row[0]; ?></td>
	    <td><?php echo $row[0] . '-' . $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[12]; ?></td>
		<td class="info"><?php echo $row[14]; ?></td>
		<td><button type="button" class="btn btn-success btnDelivered">Order Placed</button></td>
      </tr>
     <?php
	}
?>	 
    </tbody>
  </table>
  </div>
</div>
</div>
</body>
</html>

