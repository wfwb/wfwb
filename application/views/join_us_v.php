
	<script type="text/javascript">
		$(document).ready(function() {
			$(".dot").dotdotdot();
			$(".readmore").dotdotdot({
				after: "a.1"
			});

			$(function() { 
				// $(".mixitup").mixItUp();
			});
		});
	</script>

	<style>
		/* .mixitup .mix { */
		/* 	display: none; */
		/* } */
	</style>
	
	<div class="row" style="height: 100px; background-image: url(../wfwb/assets/img/books.png); background-position: center center; background-repeat: no-repeat; background-size: cover; margin: 0 0 0 0;">
	<!-- <div class="row" style="height: 100px; margin: 0 0 0 0; background-color: #221f20;"> -->
		<!-- <h1 style="color: #fff; margin: 80px 0 0 130px; font-size: 55px;">หนังสือใหม่</h1> -->
		<h1 style="color: #fff; margin: 23px 0 0 120px; font-size: 55px;">ร่วมงานกับเรา</h1>
		<!-- <div class="container">
		<div class="col-md-6" style="background-image: url(../wfwb/assets/img/new_1.jpg); height: 530px;">
			<h1 style="color: #ffffff; text-align: center;">หนังสือใหม่</h1>
		</div>
		<div class="col-md-6 "style="background-image: url(../wfwb/assets/img/new_2.jpg); background-size: height: 530px;">
			<h1 style="color: #ffffff; text-align: center;">หนังสือทั้งหมด</h1>
		</div>
		</div> -->
	</div>

	<div class="row" style="margin: 70px 0 70px 0;">
		<div class="container mixitup">
			<?php 
				$i = 1;
				foreach ($join_us as $thumbnail) { 
			?>
			<a href="www.google.com">
			<div class="col-sm-4 mix" style="text-align: center;">
					<img src="<?php echo base_url()?><?php echo $thumbnail['thumbnail_img']?>">
					<br><br>
					<h4 class="dot" style="text-align: left; margin: 0 5px 13px 5px; font-weight: bold;"><?php echo $thumbnail['heading']; ?></h4>
					<p class="readmore" style="text-align: left; height: 100px;  margin: 0 5px 0 5px;"><?php echo $thumbnail['detail']; ?></p>
			</div>
			</a>
			<?php 
				$i++;
			} ?>
		</div>
	</div>
	
	<!-- <div class="container" style="margin-top: -20px;">
		<hr style="border-top: 1px solid #f2cd34;">
	</div>

	<div class="row" style="margin: 70px 0 70px 0;">
		<div class="container">
			<?php 
				$i = 1;
				foreach ($join_us as $thumbnail) { 
			?>
			<a href="www.google.com">
			<div class="col-sm-4" style="text-align: center;">
					<img src="<?php echo base_url()?><?php echo $thumbnail['thumbnail_img']?>">
					<br><br>
					<h4 class="dot" style="text-align: left; margin: 0 5px 13px 5px; font-weight: bold;"><?php echo $thumbnail['heading']; ?></h4>
					<p class="readmore" style="text-align: left; height: 100px;  margin: 0 5px 0 5px;"><?php echo $thumbnail['detail']; ?></p>
			</div>
			</a>
			<?php 
				$i++;
			} ?>
		</div>
	</div> -->

	
	<!--<?php 
		$i = 1;
		foreach ($join_us as $thumbnail) { 
	?>
		<div class="row" style="margin: 70px 0 70px 0;">
			<div class="container" style="text-overflow: ellipsis;">
				<div class="col-md-3" style="text-align: center;">
					<img src="<?php echo base_url()?><?php echo $thumbnail['thumbnail_img']?>">
				</div>
				<div class="col-md-9" style="overflow: hidden; text-overflow: ellipsis; height: 240px;">
					<h2><?php echo $thumbnail['heading']; ?></h2>
					<p id="detail<?php echo $i?>"><?php echo $thumbnail['detail']; ?></p>
				</div>
			</div>
		</div>
		<?php if ($i < sizeof($join_us)) { ?>
		<div class="container">
			<hr style="border-top: 1px solid #f2cd34;">
		</div>
		<? } ?>
	<?php 
		$i++;
	} ?>
-->

	<!-- <div id="join-us-section" class="section" style="background: #FFFFFF; color: #231F20;">
		<?php 
			$i = 1;
			foreach ($join_us as $thumbnail) { 
		?>
			<?php if($i > 1) { ?>
				<hr style="margin-bottom: 5px;">
			<?php } ?>
			<div class="custom-thumbnail">
				<div class="thumbnail-img">
					<img src="<?php echo base_url()?><?php echo $thumbnail['thumbnail_img']?>">	
				</div>	
				<div class="thumbnail-detail" style="overflow: hidden; text-overflow: ellipsis;">
					<h2><?php echo $thumbnail['heading']; ?></h2>
					<p id="detail<?php echo $i?>"><?php echo $thumbnail['detail']; ?></p>
				</div>
				<?php echo form_open('join_us/show_join_us'); ?>
					<p style="display: none;"><input name="id" value="<?php echo $thumbnail['id']; ?>"></input></p>
					<button class="btn btn btn-warning">อ่านต่อ ...</button>
				<?php echo form_close(); ?>
			</div>
		<?php 
			$i++;
		} ?>
	</div> -->
