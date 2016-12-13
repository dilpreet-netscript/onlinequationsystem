<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <style>
  input:focus {
    background-color: yellow;
}
  </style>
<script>
  $(document).ready(function(){
	
	$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	
	
	$("#tblinv").on('click', '.btninv', function () {
		
		var id1 = $(this).closest('tr').find('#dd').val();
		
		//alert(id1);
		//$(this).closest('tr').remove();
		var url_to_load = "../php/customer_invoices.php?id="+id1;
		//alert(url_to_load);
		$("#response_here").load(url_to_load);	
	});
	
});

function showRowData(str)
{
	if(str == 0)
		$("#response_here").load('../php/display_invoices.php');
	//alert('a');
	var search = str;
	$('#tblinv tbody tr').each(function(){
		//var id = this.cells[0].innerHTML;  var prc = this.cells[1].innerHTML;
		if (!this.rowIndex) return; // skip first row
		var text = this.cells[0].innerHTML;
		//alert(text);
		var txt1 = $(this).find('#rec').text();
		var txt2 = $(this).find('#email').text();
		var txt3 = $(this).find('#address').text();
		//alert('cell value: ' + txt + ' - search for: ' + search);
		/*var t1 = txt1.toLowercase();
		var t2 = txt2.toLowerCase();
		var t3 = txt3.toLowerCase();*/
			if(txt1.indexOf(search) != -1 || txt2.indexOf(search) != -1  || txt3.indexOf(search) != -1 )
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

<h3>Invoices</h3> <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" onkeyup="showRowData(this.value)">
    </div>
    <!--button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button-->
</form> 
  <table class="table table-striped" id='tblinv'>
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Address</b></td>
		<td><b>Invoices</b></td>
      </tr>
   
    <tbody>
	<?php
	
	$sql = 'select * from customerorders order by id desc';
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{
	?>
      <tr>
        <td><input type='hidden' id='dd' value="<?php echo $row[0]; ?> "><span id="rec"><?php echo $row[1]; ?></span></td>
		<td id="email"><?php echo $row[2]; ?></td>
        <td id="address"><?php echo $row[4]; ?></td>
        <td><button type="button" class="btn btn-info btninv" id="btninv">Invoice</button></td>
      </tr>
	  <?php
	  }
	?>
     
    </tbody>
  </table>


</body>
</html>

