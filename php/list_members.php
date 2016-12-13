<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<style>
.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}

</style>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	//$('#tbl').DataTable();
	$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
});
</script>
</head>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<div class="row header" style="text-align:center;color:green">
<h3>List Of Members</h3>
</div>
<div class="table-responsive">
 <table id='tbl' class='table table-striped'>
    <!--thead>
      <tr>
        <td><b>Members</b></td></tr> 
		</thead-->
		
<?php
$sql = "select * from members";

$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_object($result))
{
?>

<tr>
	<td>
<div class="chip">
  <img src="../images/img_avatar.png" alt="Person" width="96" height="96">
  <?php echo $row->username; ?>
</div>
</td></tr>
<?php
//echo '<br>';
}
?>

</table>
</div>

</body>
</html>