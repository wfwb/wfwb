	
	<script type="text/javascript">

		$(document).ready(function() {

			var $r_first = 0;
			var $r_last = 4;
			$('#recommended-list > li:gt('+($r_last-1)+')').hide();
			$('#recommended-list > li:lt('+($r_first+1)+')').hide();
			$('#recommended-prev').click(function() {
				if ($r_first > 0) {
					$r_first--;
					$r_last--;
					$('#recommended-list > li:gt('+($r_last-1)+')').hide();
					$('#recommended-list > li:lt('+$r_last+')').show();
					$('#recommended-list > li:lt('+($r_first+1)+')').hide();
				}
			});
			$('#recommended-next').click(function() {
				if ($r_last < 4) {
					$r_first++;
					$r_last++;
					$('#recommended-list > li:lt('+$r_last+')').show();
					$('#recommended-list > li:lt('+($r_first+1)+')').hide();
				}
			});

			var $new_first = 0;
			var $new_last = 5;
			$('#new-list > li:gt('+($new_last-1)+')').hide();
			$('#new-list > li:lt('+($new_first+1)+')').hide();
			$('#new-prev').click(function() {
				if ($new_first > 0) {
					$new_first--;
					$new_last--;
					$('#new-list > li:gt('+($new_last-1)+')').hide();
					$('#new-list > li:lt('+$new_last+')').show();
					$('#new-list > li:lt('+($new_first+1)+')').hide();
				}
			});
			$('#new-next').click(function() {
				if ($new_last < 7) {
					$new_first++;
					$new_last++;
					$('#new-list > li:lt('+$new_last+')').show();
					$('#new-list > li:lt('+($new_first+1)+')').hide();
				}
			});

			var $normal_first = 0;
			var $normal_last = 5;
			$('#normal-list > li:gt('+($normal_last-1)+')').hide();
			$('#normal-list > li:lt('+($normal_first+1)+')').hide();
			$('#normal-prev').click(function() {
				if ($normal_first > 0) {
					$normal_first--;
					$normal_last--;
					$('#normal-list > li:gt('+($normal_last-1)+')').hide();
					$('#normal-list > li:lt('+$normal_last+')').show();
					$('#normal-list > li:lt('+($normal_first+1)+')').hide();
				}
			});
			$('#normal-next').click(function() {
				if ($normal_last < 7) {
					$normal_first++;
					$normal_last++;
					$('#normal-list > li:lt('+$normal_last+')').show();
					$('#normal-list > li:lt('+($normal_first+1)+')').hide();
				}
			});

			var $random = Math.floor((Math.random()*3)+1);
			$('.hero-list > li:gt('+$random+')').hide();
			$('.hero-list > li:lt('+$random+')').hide();

			$('.btn-to-hero').click(function() {
				$.scrollTo('#books-container', 800, {easing:'swing'} );
			});

		});

		function change_hero(index) {
			$('.hero-list > li:eq('+index+')').show();
			$('.hero-list > li:gt('+index+')').hide();
			$('.hero-list > li:lt('+index+')').hide();
		}

	</script>

	<!-- NEWS -->

	<div class="row" style="height: auto; background-color: #FCE486; margin: 0 0 0 0;">
		<div style="margin: 30px 0 0 -5px; height: 60px; width: 250px; background-color: #252120;">
			<h1 style="color: #ffffff; text-align: center; padding-top: 12px;">หนังสือใหม่</h1>
		</div>
		<div class="row" style="height: 400px; margin: 40px 0 0 0;">
			<a href="#" style="color: #252120;">
				<div class="col-md-3" style="text-align: center; line-height: 10px;">
					<img src="<?php echo base_url();?>assets/img/books/5.png" width="200" style="border: 8px solid #ffffff; margin: 0 0 10px 0;">
					<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
					<p style="font-size: 15px;">อรพิม</p>
					<p>320 บาท ส่วนลด 15%</p>
				</div>
			</a>
			<a href="#" style="color: #252120;">
				<div class="col-md-3" style="text-align: center; line-height: 10px;">
					<img src="<?php echo base_url();?>assets/img/books/6.png" width="200" style="border: 8px solid #ffffff; margin: 0 0 10px 0;">
					<h4 style="font-weight: bold;">หิมาลัย สุดสายรุ้ง</h4>
					<p style="font-size: 15px;">แม่ช้อง</p>
					<p>320 บาท ส่วนลด 15%</p>
				</div>
			</a>
			<a href="#" style="color: #252120;">
				<div class="col-md-3" style="text-align: center; line-height: 10px;">
					<img src="<?php echo base_url();?>assets/img/books/7.png" width="200" style="border: 8px solid #ffffff; margin: 0 0 10px 0;">
					<h4 style="font-weight: bold;">เพียงครึ่งใจ</h4>
					<p style="font-size: 15px;">มานัส</p>
					<p>320 บาท ส่วนลด 15%</p>
				</div>
			</a>
			<a href="#" style="color: #252120;">
				<div class="col-md-3" style="text-align: center; line-height: 10px;">
					<img src="<?php echo base_url();?>assets/img/books/8.png" width="200" style="border: 8px solid #ffffff; margin: 0 0 10px 0;">
					<h4 style="font-weight: bold;">ต้องฤทธิ์รัก</h4>
					<p style="font-size: 15px;">อรพิม</p>
					<p>320 บาท ส่วนลด 15%</p>
				</div>
			</a>
		</div>
	</div>

	<!-- <div class="row" style="height: 70px; background-color: #252120;">
		<div class="col-md-2" style="text-align: center; color: #ffffff;">
			<h4>วิธีการสั่งหนังสือ</h4>
		</div>
		<div class="col-md-3">
			<form class="form-inline">
				<div class="form-group">
					<label for="#category">หมวดหมู่</label>
					<select id="category" class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select>
				</div>
			</form>
		</div>
		<div class="col-md-3">
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-2">
		</div>
	</div> -->

	<!-- ALL -->

	<div class="container">
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-2">
				<div class="sidebar-nav" style="margin-top: 50px;">
					<!-- <ul class="nav nav-list" style="text-align: left;">
						<li style="font-size: 16px;">ประเภท</li>
						<li><a href="#">หนังสือใหม่</a></li>
						<li><a href="#">หนังสือทั้งหมด</a></li>
						<li class="nav-header" style="font-size: 16px;">หมวดหมู่</li>
						<li><a href="#">โรแมนติกแฟนตาซี</a></li>
						<li><a href="#">โรแมนติกคอเมดี้</a></li>
						<li><a href="#">ดราม่า</a></li>
						<li class="nav-header" style="font-size: 16px;">นักเขียน</li>
						<li><a href="#">ดวงตะวัน</a></li>
						<li><a href="#">อรพิม</a></li>
						<li><a href="#">อยุทธ์</a></li>
						
						<li id="howto"><a href="<?php echo base_url();?>how_to" style="font-size: 19px; color: #F2CD33; margin-top: 30px; border-bottom: 2px solid #F2CD33; border-top: 2px solid #F2CD33;">วิธีสั่งซื้อหนังสือ</a></li>
					</ul> -->
					<div style="padding: 10px 10px 10px 10px; background-color: #eeeeee;">
						<h4>วิธีการสั่งซื้อหนังสือ</h4>
					</div>
					<h4>category</h4>
					<ol class="list-unstyled" style="list-style: none;">
						<li><a href="">romantic fantasy</a></li>
						<li><a href="">romantic comedy</a></li>
						<li><a href="">drama</a></li>
					</ol>
					<h4>author</h4>
					<ol class="list-unstyled" style="list-style: none;">
						<li><a href="">news</a></li>
						<li><a href="">all</a></li>
					</ol>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
					<h1 style="margin: 30px 0 60px 30px;">หนังสือทั้งหมด</h1>
					<!-- <hr> -->
					<!-- <button id="new-prev" type="button" class="btn btn-default" style="position: absolute; top: 170px; margin-left: 10px;"><span class="glyphicon glyphicon-chevron-left" style="margin-left: -3px;"></span></button>
					<ul id="new-list">
						<li></li>
						<li style="display: inline-block; margin: 0 30px 0 35px;">
							<img src="<?php echo base_url();?>assets/img/books/4.png" width="170">
						</li>
						<li style="display: inline-block; margin: 0 30px 0 35px;">
							<img src="<?php echo base_url();?>assets/img/books/5.png" width="170">
						</li>
						<li style="display: inline-block; margin: 0 30px 0 35px;">
							<img src="<?php echo base_url();?>assets/img/books/6.png" width="170">
						</li>
						<li style="display: inline-block; margin: 0 30px 0 35px;">
							<img src="<?php echo base_url();?>assets/img/books/7.png" width="170">
						</li>
						<li style="display: inline-block; margin: 0 30px 0 35px;">
							<img src="<?php echo base_url();?>assets/img/books/8.png" width="170">
						</li>
						<li style="display: inline-block; margin: 0 30px 0 35px;">
							<img src="<?php echo base_url();?>assets/img/books/9.png" width="170">
						</li>
						<li></li>
					</ul>
					<button id="new-next" type="button" class="btn btn-warning" style="position: absolute; right: 0; top: 175px; margin: 0 50px 0 0;"><span class="glyphicon glyphicon-chevron-right" style="margin: 0 -3px 0 -3px;"></span></button> -->
					<div id="1">
						<div class="row" style="margin: 30px 0 30px 0;">
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/5.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/6.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/7.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/8.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
						</div>
						<hr>
						<div class="row" style="margin: 30px 0 30px 0;">
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/5.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/6.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/7.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
							<a href="#">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/8.png" width="170" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
									<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
									<p style="font-size: 15px;">อรพิม</p>
									<p>320 บาท ส่วนลด 15%</p>
								</div>
							</a>
						</div>
						<hr>
					</div>
					<?php for ($i = 2; $i <= 5; $i++) { ?>
						<div id="<?php echo $i;?>" style="display: none;">
							<div class="row" style="margin: 30px 0 30px 0;">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/4.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/4.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/4.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/4.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
							</div>
							<hr>
							<div class="row" style="margin: 30px 0 30px 0;">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/5.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/5.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/5.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/5.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
							</div>
							<hr>
							<div class="row" style="margin: 30px 0 30px 0;">
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/9.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/9.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/9.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
								<div class="col-md-3" style="text-align: center;">
									<img src="<?php echo base_url();?>assets/img/books/9.png" width="170">
									<h4>เพรง รัตติกาล</h4>
									<p>฿ 320</p>
								</div>
							</div>
						</div>
					<? } ?>
					<div id="page-selection"></div>
					<script>
						// init bootpag
						$('#page-selection').bootpag({
						    total: 5
						}).on("page", function(event, num){
						    // $("#content").html("Page " + num); // or some ajax content loading...
						    for (i = 0; i < 10; i++) {
						    	$("#" + i).hide();
						    }
						   	$("#" + num).show(); 
						    // ... after content load -> change total to 10
						    $(this).bootpag({total: 10, maxVisible: 5});
						 
						});
					</script>
				</div>
			</div>
		</div>
	</div>
