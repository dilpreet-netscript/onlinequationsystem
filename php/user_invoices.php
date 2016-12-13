<?php
session_start();
include '../db/connect.php';
$uid = $_SESSION['userid'];
$rgn = $_SESSION['region'];
//echo $uid . '<br>';
//echo print_r($_SESSION, TRUE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <!--link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"-->
  
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  
  <!--link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->

  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <style>
input:focus {
    background-color: yellow;
}
</style>
<script>
  $(document).ready(function(){
	  //var rgn;
	$('[data-toggle="popover"]').popover();
	
	  $('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	
	$("#tblinv").on('click', '.btninv', function () {
		
		var id1 = $(this).closest('tr').find('#dd').val();
		
		//alert(id1);
		//$(this).closest('tr').remove();
		var url_to_load = "../php/user_invoice_details.php?id="+id1;
		//alert(url_to_load);
		$("#response_here").load(url_to_load);	
	});
	$("#tblinv").on('click', '.btnregionalhead', function () {
		
		var id1 = $(this).closest('tr').find('#dd').val();
		var rgn = $( "#regionalhead option:selected" ).val();
		//alert(rgn);
		//$.post("../php/update_user_invoices.php" , {id : id1});
		//$(this).closest('tr').remove();
		//$("#response_here").load('../php/user_invoices.php');
		if(rgn != '')
		{	
		$.ajax({
        type: "POST",
        url: '../php/update_user_invoices.php',
        data: {'id' : id1 , 'rgn':rgn},
        success: function (response) {
            $("#response_here").load('../php/user_invoices.php');
            },
        error: function () {
            $('#response_here').html('There was an error!');
        }
    });
	}
	else
	{
		return;
	}
	});
	
	// Resend to Regional head that discounted
	
	$("#tblinv").on('click', '.btnresendregionalhead', function () {
		
		var id1 = $(this).closest('tr').find('#dd').val();
		var rgn = $( "#regionalhead option:selected" ).val();
				//alert(rgn);
					if(rgn != '')
					{	
					$.ajax({
					type: "POST",
					url: '../php/update_user_invoices.php',
					data: {'id' : id1 , 'rgn':rgn},
					success: function (response) {
						$("#response_here").load('../php/user_invoices.php');
						},
					error: function () {
						$('#response_here').html('There was an error!');
					}
				});
				}
				else
				{
					return;
				}
	
	});
	
});

function showRowData(str)
{
	if(str == 0)
		$("#response_here").load('../php/user_invoices.php');
	//alert('a');
	var search = str;
	$('#tblinv tbody tr').each(function(){
		
		if (!this.rowIndex) return; // skip first row
		var text = this.cells[0].innerHTML;
		//alert(text);
		var txt1 = $(this).find('#rec').text();
		var txt2 = $(this).find('#email').text();
		var txt3 = $(this).find('#address').text();
		
		//alert(txt1);
			if(txt1.indexOf(search) != -1 || txt2.indexOf(search) != -1  || txt3.indexOf(search) != -1 )
				//if(search.includes(txt1) || search.includes(txt2)  || search.includes(txt3) )
                    $(this).closest("tr").show();
                else
                    $(this).closest("tr").hide();
		

});
}
</script>
</head>
<body>
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<div class="row header" style="text-align:center;color:green">
<!--h3>Bootstrap</h3-->
</div>
<h3>Invoices</h3>  <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" onkeyup="showRowData(this.value)">
    </div>
    <!--button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button-->
</form>

  <table class="table table-striped" id="tblinv">
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Address</b></td>
		<td><b>Invoices</b></td>
		<td><b>Action</b></td>
      </tr>
   
    <tbody>
	<?php
	echo $rgn;
	$sql = "select * from customerorders where user_id = '$uid'";
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{
	?>
      <tr>
        <td id="findstr"><input type='hidden' id='dd' value="<?php echo $row[0]; ?> "><span id="rec"><?php echo $row[1]; ?></span></td>
		<td id="email"><?php echo $row[2]; ?></td>
        <td id="address"><?php echo $row[4]; $chk = $row[19]; $dis = $row[21]; $chk2 = $row[24];?></td>
        <td><button type="button" class="btn btn-info btninv" id="btninv">Invoice</button></td>
		<?php if($chk =='0') { ?>
		<td><button type="button" class="btn btn-info btnregionalhead" id="btnregionalhead">Send Regional Head</button>
		<select class="selectpicker  show-tick sop2" name="region" id="regionalhead">Region Head
												<option value="" selected>Select</option>
												  <option value="North">North</option>
												  <option value="East">East</option>
												  <option value="West">West</option>
												  <option value="South">South</option>
												</select>
		
		</td>
		<?php } ?>
		
		<?php if($chk =='1' && $chk2 =='false') { ?>
		<td><button type="button" class="btn btn-info btnregionalhead" id="btnregionalhead" disabled="true">Sent</button>
		<a href="#" title="Discount" data-toggle="popover" data-trigger="hover" data-content="<?php echo $dis; ?>">Discount</a>&nbsp;
		<a href="#" title="Reg. Head" data-toggle="popover" data-trigger="hover" data-content="<?php echo $row[23]; ?>"><font color="red">Handeled</font></a>
		 </td>
		<?php } ?>
		<?php if($chk =='1' && $chk2 =='true') { ?>
		<td align="left"><button type="button" class="btn btn-info btnresendregionalhead" id="btnresendregionalhead" style="margin-left:125px;">Resend</button>
		<select class="selectpicker  show-tick sop2" name="region" id="regionalhead">Region Head
												<option value="" selected>Select</option>
												<option value="<?php echo $row[23]; ?>" > <?php echo $row[23]; ?> </option>
												  
												</select>
												<a href="#" title="Discount" data-toggle="popover" data-trigger="hover" data-content="<?php echo $dis; ?>">Discount</a>&nbsp;
												<a href="#" title="Reg. Head" data-toggle="popover" data-trigger="hover" data-content="<?php echo $row[23]; ?>"><font color="red">Handeled</font></a>
		 </td>
		<?php } ?>
      </tr>
	  <?php
	  }
	?>
     
    </tbody>
  </table>
</body>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    
});
</script>
</html>

