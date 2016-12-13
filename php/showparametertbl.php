<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
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
		$.post("../php/update_parameter.php", {ids: id , name:n , desc: d , date: dt}, function(){
            $('#tblParameter').load('../php/showparametertbl.php');
        });
	  	  
  });
  });
</script>
</head>
<body>
<?php
include '../db/connect.php';

$sql = "select * from parameters";

$result = mysql_query($sql) or die(mysql_error());
?>
<table class="table table-striped" id="tblupdate">
    <thead align='center'>
      <tr>
        <th>Parameter Name</th>
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
</html>