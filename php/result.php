<?php
$u = $_POST['usr'];

//
foreach($_POST['check_list'] as $item){
  // query to delete where item = $item
  echo " " . $item;
}

$w_p = $_POST['wood_paint'];
echo $w_p;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
</head>
<body>

<div class="container">
  <h2>Generated Report</h2>
  <!--p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p-->
  <table class="table">
    <thead>
      <tr class>
        <th>Name</th>
        <th>Email</th>
        <th>Door</th>
		<th>Type</th>
		<th>Paint</th>
		<th>Material</th>
		<th>Company</th>
		<th>Quantity</th>
		<th>Frame Depth</th>
		<th>No of Seals</th>
		<th>Requirement</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Name</td>
        <td>Email</td>
        <td>Door</td>
		<td>Type</td>
		<td>Paint</td>
		<td>Material</td>
		<td>Company</td>
		<td>Quantity</td>
		<td>Frame Depth</td>
		<td>No of Seals</td>
		<td>Requirement</td>
      </tr>
      
      <tr class="danger">
        <td>Name</td>
        <td>Email</td>
        <td>Door</td>
		<td>Type</td>
		<td>Paint</td>
		<td>Material</td>
		<td>Company</td>
		<td>Quantity</td>
		<td>Frame Depth</td>
		<td>No of Seals</td>
		<td>Requirement</td>
      </tr>
 <tr class="info">
        <td>Name</td>
        <td>Email</td>
        <td>Door</td>
		<td>Type</td>
		<td>Paint</td>
		<td>Material</td>
		<td>Company</td>
		<td>Quantity</td>
		<td>Frame Depth</td>
		<td>No of Seals</td>
		<td>Requirement</td>
      </tr>	  
    </tbody>
  </table>
  <footer class="footer">
	<div class="panel-footer text-center"><strong>NetScript IT Services Pvt Ltd</strong></div>
	</footer>
</div>

</body>
</html>

