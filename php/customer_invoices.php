<?php
include '../db/connect.php';
$id = $_GET['id'];
//echo $id;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Invoice Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/font-awesome.min.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
 <style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>
<script>
$(document).ready(function(){
	$('#backinvdisplay').click(function(){
	$('#response_here').load('../php/display_invoices.php');	
	});
	$("input").change(function(){
		//alert('a');
		var discount  = $(this).val();
		$.post("../php/update_invoice_disocunt.php" , {'id':<?php echo $id; ?> , 'discount': discount});
	});
	
});
</script>
</head>
<body>
<?php
/*foreach ($ids as $value) {
    //echo "Key: $key; Value: $value\n";
	//echo $value;
	$tmp[]=$value;

}
//print_r($tmp);
$tmpjoin = implode(",",$tmp);*/

$sql = "select * from customerorders where id = '$id'";
$result = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_object($result);
$orderids = $row->orderids;
$dis = $row->isDiscount;
$tmpjoin = explode(",",$orderids);

//print_r($tmpjoin);
//echo '<br>size ' . $arrlen = count($tmpjoin);
/*foreach ($tmpjoin as $value) {
    //echo "Key: $key; Value: $value\n";
	echo'<br>'. $value;
}*/
?>
<div class="panel-body">
                
			
<!-- Simple Invoice - START -->

    <div class="row">
        <div class="col-xs-12">
            <div class="text-center"><a href='#' id='backinvdisplay'><strong>Back</strong></a>
                <!--i class="fa fa-search-plus pull-left icon"></i-->
                <!--h2>Invoice for purchase #33221</h2-->
				<h3>Invoice for Customer</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <strong><?php echo $row->name; ?></strong><br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Payment Information</div>
                        <div class="panel-body">
                            <strong>Card Name:</strong> Visa<br>
                            <strong>Card Number:</strong> ***** 332<br>
                            <strong>Exp Date:</strong> 09/2020<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Order Preferences</div>
                        <div class="panel-body">
                            <strong>Gift:</strong> No<br>
                            <strong>Express Delivery:</strong> Yes<br>
                            <strong>Insurance:</strong> No<br>
                            <strong>Coupon:</strong> No<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Shipping Address</div>
                        <div class="panel-body">
                            <strong><?php echo $row->address; ?></strong><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td class="text-center"><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
							<?php $sum = 0;
								foreach ($tmpjoin as $value) {
											//echo "Key: $key; Value: $value\n";
											//echo'<br>'. $value;
										$sql2 = "select * from products_parameters_opt where id = '$value'";
										$result = mysql_query($sql2) or die(mysql_error());
										
										while($row = mysql_fetch_array($result))
										{
						

							?>
                                <tr>
                                    <td><?php echo $row[3]; ?></td>
                                    <td class="text-center"><?php echo $row[8]; ?></td>
                                    <td class="text-center">1</td>
                                    <td class="text-right"><?php echo $row[8]; ?></td>
                                </tr>
								<?php  $sum = $sum + $row[8];  }  } $sum = $sum * 2.25; ?>
								<tr>
								<td colspan='4' class='text-right' id='sub_total'><b>Subtotal:</b>	<?php echo $sum; ?></td></tr>
								
								<tr>
								<td colspan='4' class='text-right' id="tx"><b>Tax:</b>	2.25</td></tr>
								<tr>
								<td colspan='4' class='text-right' id="tx"><b>Discount:</b>	<input type="text" name="updatediscount" id="discount" size="5" value="<?php echo $dis; ?>" placeholder="Discount"></td></tr>
								<tr>
								<td colspan='4' halign='center'>
								<a href="#" class="btn btn-info" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>
								<a href="#" class="btn btn-success"><i class="fa fa-usd"></i> Proceed to Payment</a></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- Simple Invoice - END -->
</div>
</body>
</html>