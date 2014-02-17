	
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

	<div class="row">
		<div class="col-md-2">
			<div class="sidebar-nav" style="margin-top: 20px;">
				<ul class="nav nav-list">
					<li class="nav-header" style="font-size: 16px;">หมวดหมู่</li>
					<li><a href="#">โรแมนติกแฟนตาซี</a></li>
					<li><a href="#">โรแมนติกคอเมดี้</a></li>
					<li><a href="#">ดราม่า</a></li>
					<li class="nav-header" style="font-size: 16px;">นักเขียน</li>
					<li><a href="#">ดวงตะวัน</a></li>
					<li><a href="#">อรพิม</a></li>
					<li><a href="#">อยุทธ์</a></li>
					
					<li id="howto"><a href="<?php echo base_url();?>how_to" style="font-size: 19px; color: #F2CD33; margin-top: 30px; border-bottom: 2px solid #F2CD33; border-top: 2px solid #F2CD33;">วิธีสั่งซื้อหนังสือ</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<h1>หนังสือใหม่</h1>
				<button id="new-prev" type="button" class="btn btn-default" style="position: absolute; top: 170px; margin-left: 10px;"><span class="glyphicon glyphicon-chevron-left" style="margin-left: -3px;"></span></button>
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
				<button id="new-next" type="button" class="btn btn-warning" style="position: absolute; right: 0; top: 175px; margin: 0 50px 0 0;"><span class="glyphicon glyphicon-chevron-right" style="margin: 0 -3px 0 -3px;"></span></button>
			</div>
			
			<hr>

			<div class="row">
				<h1>หนังสือทั้งหมด</h1>
				<button id="normal-prev" type="button" class="btn btn-default" style="position: absolute; top: 350px; margin-left: 10px;"><span class="glyphicon glyphicon-chevron-left" style="margin-left: -3px;"></span></button>
				<ul id="normal-list">
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
				<button id="normal-next" type="button" class="btn btn-warning" style="position: absolute; right: 0; top: 350px; margin: 0 50px 0 0;"><span class="glyphicon glyphicon-chevron-right" style="margin: 0 -3px 0 -3px;"></span></button>
			</div>
		</div>
	</div>
