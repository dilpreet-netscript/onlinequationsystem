<?php
include 'connect.php';
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
 var idval = new Array();
var txt; 
$('#plist').load('../php/manage_product.php');

//console.log(selectopt);
	});

function showProduct(str) {
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
    }
}
	
  </script>
</head>
<body>
<div id="productform">
<div class="row">
<div class="col-lg-6">
                    <h3 class="page-header">Manage Product</h3>
                </div>
				<div class="col-lg-6">
                    <h3 class="page-header">Search Product</h3>
                </div>
	</div>

  <!--p>Resize the browser window to see the effect.</p-->
  <!-- action="../php/addproduct.php?status='text'"-->
  <div class="row">
    <div class="col-sm-6"> 
<form  method="post" action="#" class="form-horizontal" id="parameterForm">
<!--form method="post" class="form-horizontal"-->
<!--form class="form-horizontal"-->

<div class="form-group">
  <label class="control-label col-sm-3" for="sel1">Select Product:</label>
  
       <span id='plist'></span><span id="paramlist"></span>
  
</div>
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default" id="submitForm">Submit</button>
      </div>
    </div>
  </form></div>
  
    <div class="col-sm-6">
<!--div class="texttt">Search Product!</div-->	
	<form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="name" placeholder="parameter name" onkeyup="showProduct(this.value)"><br>
		<p>Available: <span id="txtHint"></span></p>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Search</button>
      </div>
    </div>
  </form>
  </div>
   
  </div>
</div>
  <div class="row">
    <div class="col-sm-4">
<div id="manage_inventory" style='display:none;'></div>
</div>
</div>
</body>
</html>

