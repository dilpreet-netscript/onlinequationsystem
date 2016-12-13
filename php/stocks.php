<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Laxman" content="">
<style>
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;   
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}

</style>
<script>
$(document).ready(function(){
	var arr = [];
	
	$("#select_all").change(function(){  //"select all" change 
    $(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status
	$('.checkbox').each(function() {
       arr.push($(this).val());
     });
});

//$("input[type=checkbox]").on("click" , ".checkbox" ,function(){
	$("form").on("click" , ".checkbox" ,function(){
    var id = $(this).val();
	//alert(id);
		if ($(this).is(":checked"))
	{
	  // it is checked
	  arr.push(id);
	  //alert('checked yes');
	}
	 if ( ! $(this).checked) {
       // It is not checked, show your div...
		alert('uncheck');
   }

	console.log(arr);
	/*if ($("input:checkbox:not(:checked)"))
	{
	  // it is unchecked
	  //arr.push(id);
	  alert('unchecked yes');
		//var y = [1, 2, 2, 3, 2]
		//var removeItem = 2;
		var removeItem = $(this).val();

		arr = jQuery.grep(arr, function(value) {
		  return value != removeItem;
		});
		//[1, 3]
	}*/
	
	console.log(arr);
    
	$.ajax({
        type: "GET",
        url: '../php/wh_products.php',
        data: {'id':id},
        success: function (response) {
            $('#response_wh').html(response);
            },
        error: function () {
            $('#response_here').html('There was an error!');
        }
    });
	//$('#response_wh').empty();
});

});

</script>
</head>
<body>
<!--div class="row">
    <div class="col-sm-12"></div>
   
  
</div-->
  <!--div class="container-fluid">
  
  
  <div class="row pull left">
    <div class="col-sm-2">
	<div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-primary" id="fancy-checkbox-primary" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-primary" class="[ btn btn-primary ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-primary" class="[ btn btn-default active ]">
                    Primary Checkbox
                </label>
            </div>
        </div>
	</div-->
    <!--div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div-->
  <!--/div>
</div-->

  <!--h3>Warehouse</h3>
  <p>Check below checkboxes to shows the product in these category:</p-->
 <form>
  <label class="checkbox-inline">
 <input type="checkbox" class="checkbox" id="select_all"/> Selecct All</label>
<?php
$sql = "select * from wh_category where isActive = 1 ";

$result = mysql_query($sql) or die(mysql_error());


while($row = mysql_fetch_object($result))
{

?>
    <label class="checkbox-inline">
      <input type="checkbox" name="chk[]" class="checkbox" id="chk" value="<?php echo $row->id; ?>"><?php echo $row->category_name;  ?>
    </label>
	
<?php } ?>
  </form>
   <div class="row">
    
   <div class="col-lg-12 col-sm-12">
      
    </div>
</div>

<div class="row">
    
   <div class="col-lg-12 col-sm-12 col-md-offset-3">
      <div id="response_wh"></div>
    </div>
</div>

		</body>
		</html>