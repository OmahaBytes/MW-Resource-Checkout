<!DOCTYPE html>
<html>
	<head>
		<title>Resource Checkout</title>

        <link rel="icon" type="image/ico" href="favicon.ico" />

		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-tab.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-alert.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-typeahead.min.js"></script>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="js/css/custom-theme/datepicker.css"/>
		<link rel="stylesheet" type="text/css" href="resource.css"/>

        <script type="text/javascript">
            $(".alert").alert();
            $(function() {
                $('input[name=date]').datepicker({dateFormat: 'mm/dd/yy', beforeShowDay:$.datepicker.noWeekends});
            });
        </script>

        <!-- Created by Tracy Moody, Destiny Osbourne and Ben Doan with assistance from the Omaha Bytes Club-->
	</head>
	<body>
		<header>
			<?php include('layout/header.php');?>
		</header>
		<div id="wrapper">
			<div id="nav">
				<?php include('layout/nav.php');?>
			</div>
			<div id="content">
				<?php include('layout/content.php');?>
			</div>
		</div>
		<div id="footer">
			<?php include('layout/footer.php');?>
		</div>
	</body>
</html>
