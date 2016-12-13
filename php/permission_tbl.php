<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
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
	  var numberofDays = new Array();
	  var cval;
	  

    $("#tbl1").on('click', '.btnDelete', function () {
		
		var id1 = $(this).closest('tr').find('#dd').val();
		$.post("../php/delete_user.php", {ids: id1}, function(){
            $('#tbl1').load('../php/permission_tbl.php');
        });
	  //alert(id1);
	  //$(this).closest('tr').remove();
  });


$("#tbl1").on('click', '.action1', function () {
		
		var id2 = $(this).closest('tr').find('#dd').val();
		//var d = $(this).attr('id').val();
		var txt =  $(this).attr('id');
		var chk = $(this).val();
		
		//alert(id2 + txt + chk);
		
		$.ajax({
        type: "POST",
        url: "../php/user_permission.php",
        async: true,
        data: {id:id2,day:txt,dval:chk},
        success: function (msg) {
            //alert('Success');
			$('#tbl1').load('../php/permission_tbl.php');
            /*if (msg != 'success') {
                alert('Fail');
				console.log('Fail');
            }*/
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
<!--div class="row">
<div class="col-lg-12"-->
<?php

$sql="select * from members";

$result=mysql_query($sql);
$total_found=mysql_num_rows($result);

?>


				
<table class="table table-striped" id="tbl1">
    <thead>
      <tr>
        <th>User</th>
		<th>Email</th>
		<th>Type</th>
		<th align="center">Login/Block</th>
      </tr>
    </thead>
<?php
while($row = mysql_fetch_array($result)){
?>
	<tr>
	
	<td><input type='hidden' id='dd' value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></td>
	<td><?php echo $row[3]; ?></td>
	<td><?php echo $row[4]; ?></td>
	<td><div id='mchk'>
	<?php if($row[7] =='true'){ ?>
	Monday <input type='checkbox' name='user_day[]' class='action1' id='monday' value="true" checked>
	<?php } if($row[7] =='false'){ ?>
	Monday <input type='checkbox' name='user_day[]' class='action1' id='monday' value="false">
	<?php } if($row[8] =='true'){ ?>
	Tuesday <input type='checkbox' name='user_day[]' class='action1' id='tuesday' value="true" checked>
	<?php } if($row[8] =='false'){ ?>
	
	Tuesday <input type='checkbox' name='user_day[]' class='action1' id='tuesday' value="false">
	<?php } if($row[9] =='true'){	?>
	Wednesday <input type='checkbox' name='user_day[]' class='action1' id='wednesday' value="true" checked>
	<?php } if($row[9] =='false'){	?>
	Wednesday <input type='checkbox' name='user_day[]' class='action1' id='wednesday' value="false">
	<?php } if($row[10] =='true'){ ?>
	Thursday <input type='checkbox' name='user_day[]' class='action1' id='thursday' value="true" checked>
	<?php } if($row[10] =='false') {	?>
	Thursday <input type='checkbox' name='user_day[]' class='action1' id='thursday' value="false">
	<?php } if($row[11] =='true') {?>
	Friday <input type='checkbox' name='user_day[]' class='action1' id='friday' value="true" checked>
	<?php
	} if($row[11] =='false'){ 
	?>
	Friday <input type='checkbox' name='user_day[]' class='action1' id='friday' value="false">
	<?php } if($row[12] =='true'){
	?>
	Saturyda <input type='checkbox' name='user_day[]' class='action1' id='saturday' value="true" checked>
	<?php } 
	if($row[12] =='false'){
	?>
	Saturyda <input type='checkbox' name='user_day[]' class='action1' id='saturday' value="false">
	<?php } if($row[13] =='true'){
	?>
	Sunday <input type='checkbox' name='user_day[]' class='action1' id='sunday' value="true" checked>
	<?php }
	 if($row[13] =='false'){
	?>
	Sunday <input type='checkbox' name='user_day[]' class='action1' id='sunday' value="false">
	<?php } ?>
	</div></td>
	
	<td><button class='glyphicon glyphicon glyphicon-remove btnDelete'></button></td></tr>
<?php		
}
?>
</table>
<!--/div>
</div-->
</body></html>