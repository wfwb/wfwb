<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>WFWB Admin Panel</title>

	<link rel="stylesheet" type="text/css" href="<?php base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url()?>assets/css/bootstrap-responsive.css">
	<meta name="viewport" content="width=deivce-width, initial-scale=1.0">

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			max-width: 300px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin input[type="text"],
		.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 7px 9px;
		}

	</style>

</head>

<body>
	
	<div class="container">
		<?php
			$attributes = array('class' => 'form-signin');
			echo form_open('auth/admin_login', $attributes);
		?>
			<h2 class="form-signin-heading">Please sign in</h2>
			<input type="text" name="identity" class="input-block-level" placeholder="Email address">
			<input type="password" name="password" class="input-block-level" placeholder="Password">
			<button class="btn btn-large btn-primary" type="submit">Sign in</button>
		<?php echo form_close();?>
	</div>

</body>

</html>