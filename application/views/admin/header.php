<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>WFWB Admin Panel</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-responsive.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/docs.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/wfwb.css">
	<meta name="viewport" content="width=deivce-width, initial-scale=1.0">

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">WFWB Administrator System</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="admin_home_page">Home Page</a></li>
					<li><a href="admin_bookshelves_page">Bookshelves</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Books Management <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="admin_books_page">Books</a></li>
							<li><a href="admin_categories_page">Categories</a></li>
							<li><a href="admin_authors_page">Authors</a></li>
							<li><a href="admin_series_page">Series</a></li>
							<!-- <li class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li> -->
						</ul>
					</li>
					<li><a href="admin_news_page">News Page</a></li>
					<li><a href="admin_join_us_page">Join us Page</a></li>
					<li><a href="admin_logout">Log out</a></li>
				</ul>
			</div><!--/.navbar-collapse -->
		</div>
	</div>

	<!-- <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#">WFWB Admin Panel</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="admin_home_page">Home Page</a></li>
						<li><a href="admin_books_page">Books Page</a></li>
						<li><a href="admin_news_page">News Page</a></li>
						<li><a href="admin_join_us_page">Join us Page</a></li>
						<li><a href="admin_logout">Log out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->