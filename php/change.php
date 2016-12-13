<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard: NetScript IT Services Pvt Ltd</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <!--link href="../css/metisMenu.min.css" rel="stylesheet"-->

    <!-- Custom CSS -->
    <!--link href="../dist/css/sb-admin-2.css" rel="stylesheet"-->

    <!-- Morris Charts CSS -->
    <!--link href="../vendor/morrisjs/morris.css" rel="stylesheet"-->

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<form class="form">
<div class="modal" id="password_modal">
    <div class="modal-header">
        <h3>Change Password <span class="extra-title muted"></span></h3>
    </div>
    <div class="modal-body form-horizontal">
        <div class="form-group">
            <label for="current_password" class="form-label">Current Password</label>
            <div class="forms">
                <input type="password" name="current_password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="new_password" class="form-label">New Password</label>
            <div class="forms">
                <input type="password" name="new_password"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <div class="forms">
                <input type="password" name="confirm_password"  class="form-control">
            </div>
        </div>      
    </div>
    <div class="form-group">
        <button href="#" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button href="#" class="btn btn-primary" id="password_modal_save">Save changes</button>
    </div>
</div>
</form>
</body>
</html>