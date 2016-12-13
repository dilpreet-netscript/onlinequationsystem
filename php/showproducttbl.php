<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"-->   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<!--script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->
  <script src="../js/mindmup-editabletable.js"></script>
<script src="../js/numeric-input-example.js"></script>
  <script>
  $(document).ready(function(){
  $("#tblupdate").on('click', '.btnUpdate', function () {
		
		var id = $(this).closest('tr').find('#dd').val();
		var n = $(this).closest('tr').find('#updatename').val();
		var d = $(this).closest('tr').find('#updatedesc').val();
		var dt = $(this).closest('tr').find('#updatedate').val();
		//alert(id+name);
		$.post("../php/update_products.php", {ids: id , name:n , desc: d , date: dt}, function(){
            $('#tblProduct').load('../php/showproducttbl.php');
        });
	  //alert(id);
	  
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
<table class="table table-striped" id="tblupdate">
    <thead align='center'>
      <tr>
        <th>Product Name</th>
        <th>Description</th>
       
		<th>Date</th>
		<th>Update</th>
      </tr>
    </thead>
<?php
while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	
	echo "<td><input type='hidden' id='dd' value=".$row[0]."><input type='text' name='pname' id='updatename' value=" .$row[1]. "></td><td><input type='text' name='pdesc' id='updatedesc' value=" .$row[2]. "></td><td><input type='date' name='updatedate' id='updatedate' value=" .$row[4]. "></td>";
	
	echo "<td><button class='glyphicon glyphicon glyphicon-pencil btnUpdate'></button></td></tr>";
}

?>
</table>

</body>
<script>
$(document).ready(function(){
    $('#tblupdate').dataTable();
});
</script>
</html>