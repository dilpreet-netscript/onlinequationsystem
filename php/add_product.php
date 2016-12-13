<?php
include '../db/connect.php';

//$sql = "select * from branches_name";

//$result = mysql_query($sql) or die(mysql_error());

//$rowcount=mysql_num_rows($result);
//printf($rowcount);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
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
 var idval = new Array();
var txt; 
//$('#bopt').load('show_branch_opt.php');
$('#tblProduct').load('../php/showproducttbl.php');
<!-- here  code -->

<!-- Grid Table Show / Hide -->
 $(".showProductTable").click(function(){
        $("#tblProduct").toggle();
    });
<!-- Grid Table End -->

$('#selectoption li').click(function() {

    txt = $(this).text();
	//alert(txt);
	<?php $st = "<script>document.write(txt);</script>";?> 
	
});

/*$('#submitProduct').submit({
	$('#productForm').attr('action', "addproduct?status="+text+"");
	alert('submit');
});*/
/*function toggleOn() {
    //$('#tblProduct').prop('display' , 'none')
	alert('toggle');
  }*/	

	}); 

	 function showProduct(str) {
	 //alert('a');
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../php/getavailable.php?q="+str, true);
        xmlhttp.send();
		//document.getElementByName("<p>").element.style.display = 'block';          // Show
    }
}


  </script>
</head>
<body>
<div class="affix-btn">
                    <!--button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button-->
                </div>
<div id="productform">
<div class="row">
<div class="col-lg-4">
                    <h3 class="page-header">Product form</h3>
                </div>
				<div class="col-lg-4">
                    <h3 class="page-header">Search Product</h3>
                </div>
				<div class="col-lg-4">
                    <h3 class="page-header"><button type="button" class="btn btn-primary showProductTable">Update</button></h3>
					
                </div>
				
	</div>

  <!--p>Resize the browser window to see the effect.</p-->
  <!-- action="../php/addproduct.php?status='text'"-->
  <div class="row">
    <div class="col-sm-6"> 
<form  method="post" action="../php/addproduct.php" class="form-horizontal" id="productForm">
<!--form method="post" class="form-horizontal"-->
<!--form class="form-horizontal"-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="name" id="name1" placeholder="Enter product name" required="required">
		<input type="hidden" name="status" value="<?php echo $st;?>"/>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="desc">Description:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" required="required">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="status">Status:</label>
      <div class="col-sm-4">
        <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select One
    <span class="caret"></span></button>
    <ul class="dropdown-menu" id="selectoption">
   <li id="active"><a href="#">Active</a></li>
      <li id="inactive"><a href="#">InActive</a></li>
     </ul>
  </div>
       </div>
    </div>
 <div class="form-group">
      <label class="control-label col-sm-2" for="date">Date:</label>
      <div class="col-sm-4">
        <input type="date" name="date" class="form-control" id="date" required="required">
      </div>
    </div>
	
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default" id="submitProduct">Submit</button>
      </div>
    </div>
  </form></div>
  
    <div class="col-sm-4">
<!--div class="texttt">Search Product!</div-->	
	<form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="name" placeholder="product name" onkeyup="showProduct(this.value)"><br>
		<p>Available: <span id="txtHint"></span></p>
      </div>
    </div>
   
  
  </form>
  </div>
  
  
  </div>
  <div class="row">
<div class="col-lg-10">
 <div class="panel-body text-center">
        <div id="tblProduct" style='display:none;'></div>
      </div>
</div>
</div>
  
</div>
</body>
</html>

