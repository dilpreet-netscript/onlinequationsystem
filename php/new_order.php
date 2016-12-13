<?php
include '../db/connect.php';

$sql = "select * from customerorders where isActive = 0";

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

  $("#neworderdata").on('click', '.btnProcess', function () {
		
		var customerId = $(this).closest('tr').find('#id1').text();
		$.post("../php/order_forward.php", {id:customerId}, function(){
            $('#response_here').html($('#neworderdata'));
        });
	  //alert(id);
	  $(this).closest('tr').remove();
  });

 //$("#ordertable").on('click', '.btnProcess', function () {
 $('#ordertable1 tr').click(function() {
    if (!this.rowIndex) return; // skip first row
	
//alert($('#id1').text());
    var customerId = this.cells[0].innerHTML;
//alert(customerId);
var ds = $('#id1').text();
$(this).closest('tr').remove();
$.ajax({
        type: "GET",
        url: '../php/order_forward.php',
        data: {id:customerId},
        success: function (response) {
            //alert(response);
            $('#response_here').html($('#neworderdata'));
            //console.log((response));
            },
        error: function () {
            $('#neworderdata').html('There was an error!');
        }
    });
});

}); 
  </script>
</head>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<div id="neworderdata">
<div class="row">
						<div class="col-lg-10"><h3>New Orders</h3></div>
						</div>
 
  <div class="row">
  <div class="col-lg-10">
  <div class="table-responsive">
  <table class="table" id="ordertable">
    <thead>
      <tr>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Contact</b></td>
		<td><b>Address</b></td>
        <td><b>Message</b></td>
        <td><b>Location</b></td>
		<td><b>Date</b></td>
		<td><b>Orders</b></td>
		<td><b>Action</b></td>
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
		<td><button type="button" class="btn btn-success btnProcess">Process</button></td>
      </tr>
     <?php
	}
?>	 
    </tbody>
  </table>
  </div>
  </div>
</div>
</div>
</body>
</html>

