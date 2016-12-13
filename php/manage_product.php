<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
  <script>
 $(document).ready(function(){
var selectopt; 
$("select.selectoption").change(function(){
        selectopt = $(".selectoption option:selected").val();
        alert(selectopt);
    });
	}); 
  </script>
</head>
<body>
<?php
//$id = $_POST['val'];
//print_r($_POST);
$sql = "select * from products where isActive = 1 ";

$result = mysql_query($sql) or die(mysql_error());
?>
 <select class="form-control selectoption" id="selectoption2" style="max-width:25%;" name=ids[]>
<option value='' selected>Product</option>
<?php
while($row = mysql_fetch_array($result))
	{
		?>
		
		<option value='<?php echo $row[0]; ?>'><?php echo $row[1]; ?></option>
		<?php
	}
?>
</select>
</body>
</html>