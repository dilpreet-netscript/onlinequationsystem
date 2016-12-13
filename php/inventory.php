<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <script>
  $(document).ready(function(){
$('#product_tbl').load('../php/product_tbl.php');
$('#parameter_tbl').load('../php/parameter_tbl.php');
$('#option_tbl').load('../php/option_tbl.php');
});
  
  </script>
</head>
<body>

<div class="container">
  
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Product</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse collapse">
        <div class="panel-body"><span id="product_tbl"></span></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Parameter</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><span id="parameter_tbl"></span></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Option</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><span id="option_tbl"></span></div>
      </div>
    </div>
  </div>
  <div class='row'>
  <div class='col-lg-4'>
  <p align='center'><b>Note:</b> Click on table name to show data...</p>
  </div>
  </div>
</div>
<!--footer></footer-->    
</body>
</html>