<?php
include '../db/connect.php';

$sql = "select * from customerorders where isProcess = 0 ";

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
</head>
<script>

  $(document).ready(function(){
$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
  $("#processtable").on('click', '.shipordr', function () {
		
		var customerId = $(this).closest('tr').find('#id1').text();
		$.post("../php/order_shipment.php", {id:customerId}, function(){
            $('#response_here').html($('#processtable'));
        });
	  //alert(id);
	  $(this).closest('tr').remove();
  });

}); 

</script>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<div id="processorderdata">

  <div class="row">
						<div class="col-lg-10"><h3>Process Orders</h3></div>
						</div>
  <!--p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p-->
  <div class="row">
  <div class="col-lg-10">
  <table class="table" id="processtable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
		<th>Address</th>
        <th>Message</th>
        <th>Location</th>
		<th>Date</th>
		<th>Items</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php
	while($row = mysql_fetch_array($result))
	{		
	?>
      <tr class="success">
  <td style="display:none;" id="id1"><?php echo $row[0]; ?></td>
        <td><?php echo$row[0] . '-' . $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[12]; ?></td>
		<td><?php echo $row[14]; ?></td>
		<td><button type="button" class="btn btn-success shipordr">Ship</button></td>
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

