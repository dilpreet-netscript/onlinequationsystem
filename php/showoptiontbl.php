<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script-->


  <script>
  $(document).ready(function(){
  $("#tblupdate").on('click', '.btnUpdate', function () {
		
		var id = $(this).closest('tr').find('#dd').val();
		var n = $(this).closest('tr').find('#updatename').val();
		var d = $(this).closest('tr').find('#updatedesc').val();
		var dt = $(this).closest('tr').find('#updatedate').val();
		//alert(id);
		$.post("../php/update_option.php", {ids: id , name:n , desc: d , date: dt}, function(){
            $('#tblParameter').load('../php/showparametertbl.php');
        });
	  	  
  });
  //$('#tblupdate').DataTable({"pagingType": "scrolling"});

  });
</script>
</head>
<body>
<?php
include '../db/connect.php';

$sql = "select * from products_parameters_opt";

$result = mysql_query($sql) or die(mysql_error());
?>
<table class="table table-striped" id="tblupdate">
    <thead align='center'>
      <tr>
        <th>Option Name</th>
        <th>Description</th>
		<th>Date</th>
		<th>Update</th>
      </tr>
    </thead>
<?php
while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	
	echo "<td><input type='hidden' id='dd' value=".$row[0]."><input type='text' name='pname' id='updatename' value=" .$row[3]. "></td><td><input type='text' name='pdesc' id='updatedesc' value=" .$row[4]. "></td><td><input type='date' name='updatedate' id='updatedate' value=" .$row[6]. "></td>";
	
	echo "<td><button class='glyphicon glyphicon glyphicon-pencil btnUpdate'></button></td></tr>";
}

?>
</table>
<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#tblupdate')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

</body>
</html>