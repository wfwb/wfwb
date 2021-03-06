<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="utf-8">
	<title>สำนักพิมพ์ คำต่อคำ</title>

	<link media="screen" href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-glyphicons.css"> -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>assets/css/wfwb.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>assets/css/wfwb-responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="<?php echo base_url()?>assets/js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.bootpag.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.dotdotdot.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.mixitup.js" type="text/javascript"></script>

	<script type="text/javascript">
		!function ($) {
			$(function() {
				$('.carousel').carousel({
					interval: 5000
				})
			})
		}(window.jQuery)

		$(document).ready(function(){

			$('.navbar-toggle').click(function() {
				$('.menubar').toggleClass('menu-active');
				$('.navbar-flat').toggleClass('menu-active');
				$('.carousel').toggleClass('carousel-down');
				$('.prevbut').toggleClass('prevbut-show');
				$('.nextbut').toggleClass('nextbut-show');
				$('.menu-vertical').toggleClass('menu-show');
				
				if ($('.menu-vertical').is(':visible')) {
					$('.menu-vertical').hide();
				}
				else {
					$('.menu-vertical').show();
				}

			});

			// $('.menu ul li a').click(function(e) {
			// 	$('.menu ul li a').removeClass('active');
			// 	var $this = $(this);
			// 	if (!$this.hasClass('active')) {
			// 		$this.addClass('active');
			// 	}
			// 	e.preventDefault();
			// });

			// $('.menu-vertical ul li a').click(function(e) {
			// 	$('.menu-vertical ul li a').removeClass('active');
			// 	var $this = $(this);
			// 	if (!$this.hasClass('active')) {
			// 		$this.addClass('active');
			// 	}
			// 	e.preventDefault();
			// });

			$('.menu-vertical').hide();
		});

	</script>

	<style type="text/css">

		#forgot {
			border-bottom: 0px solid #F2CD34;
			font-size: 14px;
			margin-right: 50px;
		}

		#login {
			width: 230px;
		}

		.menu-active {
			height: 550px;
		}

		.menu-show {
			visibility: visible;
			display: none;
		}

		@media (max-width: 768px) {
			.carousel-down {
				padding-top: 550px;
			}

			.prevbut-show {
				margin-top: 550px;
			}

			.nextbut-show {
				margin-top: 550px;
			}
		}

	</style>

</head>

<body>

	<div class="navbar-flat">
		<div class="menubar">
			<div class="menu visible-lg visible-md">
				<ul>
					<li class="dropdown" id="search-li">
						<a id="search" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span>&nbsp&nbspค้นหา</a>
						<ul class="dropdown-menu" id="login" style="z-index: 1600;">
							<h4 style="text-align: left; margin: 23px 0 10px 15px; letter-spacing: 0;">ค้นหาหนังสือหรือนักเขียน</h4>
							<form style="padding-left: 15px; padding-right: 15px;">
								<input type="text" class="form-control" placeholder="ชื่อหนังสือหรือชื่อนักเขียน" style="margin-bottom: 10px;">
								<button type="submit" class="btn btn-warning" style="margin-bottom: 20px;">ค้นหา</button>
							</form>
						</ul>
					</li>
					<li class="dropdown" id="login-li">
						<a id="login" href="#" data-toggle="dropdown">เข้าสู่ระบบ</a>
						<ul class="dropdown-menu" id="login">
							<h4 style="text-align: left; margin: 23px 0 10px 15px;">กรุณาเข้าสู่ระบบ</h4>
							<!-- <form style="padding-top: 5px; padding-left: 15px; padding-right: 15px;">
								<input type="text" class="form-control" placeholder="อีเมล" style="margin-bottom: 10px;">
								<input type="password" class="form-control" placeholder="รหัสผ่าน" style="margin-bottom: 10px;">
								<a id="forgot" href=""><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp&nbspลืมรหัสผ่าน</a>
								<button type="submit" class="btn btn-default" style="margin-top: 7px; margin-bottom: 0px; margin-right: 10px;">เข้าสู่ระบบ</button>
								<button type="submit" class="btn btn-warning" style="margin: -60px 0px 0px 90px;">สมัครสมาชิก</button>
							</form> -->
							<?php 
								$attributes = array('style' => 'padding: 5px 15px 0 15px;');
								echo form_open("auth/login", $attributes);
							?>
								<input type="text" class="form-control" placeholder="อีเมล" style="margin-bottom: 10px;">
								<input type="password" class="form-control" placeholder="รหัสผ่าน" style="margin-bottom: 10px;">
								<a id="forgot" href=""><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp&nbspลืมรหัสผ่าน</a>
								<button type="submit" class="btn btn-default" style="margin-top: 7px; margin-bottom: 0px; margin-right: 10px;">เข้าสู่ระบบ</button>
							<?php echo form_close();?>
							<?php 
								$attributes = array('style' => 'padding: 5px 15px 0 15px;',
													'action' => '<?php echo base_url()?>register');
								echo form_open("home/register", $attributes);
							?>
								<button type="submit" class="btn btn-warning" style="margin: -68px 0px 0px 90px;">สมัครสมาชิก</button>
							<?php echo form_close();?>
						</ul>
					</li>

					<li><a id="contactus-li" href="<?php echo base_url()?>contact_us">ติดต่อเรา</a></li>
					<li><a id="joinus-li" href="<?php echo base_url()?>join_us">ร่วมงานกับเรา</a></li>
					<li><a id="webboard-li" href="http://forum.wordforwordbooks.com" target="_blank">พบปะพูดคุย</a></li>
					<li><a id="news-li" href="<?php echo base_url()?>news">ต่างๆ นานา</a></li>
					<li><a id="books-li" href="<?php echo base_url()?>books">ชั้นหนังสือ</a></li>
					<li><a id="home-li" href="<?php echo base_url()?>">หน้าบ้าน</a></li>
				</ul>
			</div>

			<button type="button" class="navbar-toggle visible-sm visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="menu visible-sm">
				<ul>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span>&nbsp&nbspค้นหา</a>
						<ul class="dropdown-menu" id="login">
							<h4 style="text-align: center; letter-spacing: 0;">ค้นหาหนังสือหรือนักเขียน</h4>
							<form style="padding-left: 15px; padding-right: 15px;">
								<input type="text" class="form-control" placeholder="ชื่อหนังสือหรือชื่อนักเขียน" style="margin-bottom: 10px;">
								<button type="submit" class="btn btn-warning" style="margin-bottom: 10px;">ค้นหา</button>
							</form>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">เข้าสู่ระบบ</a>
						<ul class="dropdown-menu" id="login">
							<h4 style="text-align: center;">กรุณาเข้าสู่ระบบ</h4>
							<!-- <form style="padding-top: 5px; padding-left: 15px; padding-right: 15px;">
								<input type="text" class="form-control" placeholder="อีเมล" style="margin-bottom: 10px;">
								<input type="password" class="form-control" placeholder="รหัสผ่าน" style="margin-bottom: 10px;">
								<a id="forgot" href=""><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp&nbspลืมรหัสผ่าน</a>
								<button type="submit" class="btn btn-default" style="margin-top: 7px; margin-bottom: 10px; margin-right: 10px;">เข้าสู่ระบบ</button>
								<button type="submit" class="btn btn-warning" style="margin-top: 8px; margin-bottom: 10px;">สมัครสมาชิก</button>
							</form> -->
							<?php 
								$attributes = array('style' => 'padding: 5px 15px 0 15px;');
								echo form_open("auth/login", $attributes);
							?>
								<input type="text" class="form-control" placeholder="อีเมล" style="margin-bottom: 10px;">
								<input type="password" class="form-control" placeholder="รหัสผ่าน" style="margin-bottom: 10px;">
								<a id="forgot" href=""><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp&nbspลืมรหัสผ่าน</a>
								<button type="submit" class="btn btn-default" style="margin-top: 7px; margin-bottom: 0px; margin-right: 10px;">เข้าสู่ระบบ</button>
							<?php echo form_close();?>
							<?php 
								$attributes = array('style' => 'padding: 5px 15px 0 15px;',
													'action' => '<?php echo base_url()?>register');
								echo form_open("home/register", $attributes);
							?>
								<button type="submit" class="btn btn-warning" style="margin: -68px 0px 0px 90px;">สมัครสมาชิก</button>
							<?php echo form_close();?>
						</ul>
					</li>
				</ul>	
			</div>
			
			<div class="logo">
			</div>

			<div class="menu-vertical">
				<ul>
					<li><a id="home-li-ver" href="<?php echo base_url()?>">แรกพบ</a></li>
					<li><a id="books-li-ver" href="<?php echo base_url()?>books">ชวนอ่านหนังสือ</a></li>
					<li><a id="news-li-ver" href="<?php echo base_url()?>news">แจ้งข่าว</a></li>
					<li><a id="webboard-li-ver" href="http://forum.wordforwordbooks.com" target="_blank">พบปะพูดคุย</a></li>
					<li><a id="joinus-li-ver" href="<?php echo base_url()?>join_us">ร่วมงานกับเรา</a></li>
					<li><a id="contactus-li-ver" href="<?php echo base_url()?>contact_us">ติดต่อเรา</a></li>
					<li class="dropdown visible-xs" id="login-li-ver">
						<a href="#" data-toggle="dropdown">เข้าสู่ระบบ</a>
						<ul class="dropdown-menu" id="login">
							<h3 style="text-align: center; margin-top: -110px;">กรุณาเข้าสู่ระบบ</h3>
							<!-- <form style="padding-top: 5px; padding-left: 15px; padding-right: 15px;">
								<input type="text" class="form-control" placeholder="อีเมล" style="margin-bottom: 10px;">
								<input type="password" class="form-control" placeholder="รหัสผ่าน" style="margin-bottom: 10px;">
								<a id="forgot" href="" ><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp&nbspลืมรหัสผ่าน</a>
								<button type="submit" class="btn btn-default" style="margin-top: 7px; margin-bottom: 10px; margin-right: 10px;">เข้าสู่ระบบ</button>
								<button type="submit" class="btn btn-warning" style="margin-top: 8px; margin-bottom: 10px;">สมัครสมาชิก</button>
							</form> -->
							<?php 
								$attributes = array('style' => 'padding: 5px 15px 0 15px;');
								echo form_open("auth/login", $attributes);
							?>
								<input type="text" class="form-control" placeholder="อีเมล" style="margin-bottom: 10px;">
								<input type="password" class="form-control" placeholder="รหัสผ่าน" style="margin-bottom: 10px;">
								<a id="forgot" href=""><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp&nbspลืมรหัสผ่าน</a>
								<button type="submit" class="btn btn-default" style="margin-top: 7px; margin-bottom: 0px; margin-right: 10px;">เข้าสู่ระบบ</button>
							<?php echo form_close();?>
							<?php 
								$attributes = array('style' => 'padding: 5px 15px 0 15px;',
													'action' => '<?php echo base_url()?>register');
								echo form_open("home/register", $attributes);
							?>
								<button type="submit" class="btn btn-warning" style="margin: -68px 0px 0px 90px;">สมัครสมาชิก</button>
							<?php echo form_close();?>
						</ul>
					</li>
					<li class="dropdown visible-xs" id="search-li-ver">
						<a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span>&nbsp&nbspค้นหา</a>
						<ul class="dropdown-menu" id="login">
							<h4 style="text-align: center; letter-spacing: 0; margin-top: -110px;">ค้นหาหนังสือหรือนักเขียน</h4>
							<form style="padding-left: 15px; padding-right: 15px;">
								<input type="text" class="form-control" placeholder="ชื่อหนังสือหรือชื่อนักเขียน" style="margin-bottom: 10px;">
								<button type="submit" class="btn btn-warning" style="margin-bottom: 10px;">ค้นหา</button>
							</form>
						</ul>
					</li>
				</ul>
			</div>
		</div>	
	</div>	
