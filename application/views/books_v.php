	
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

			$(function(){

				// Instantiate MixItUp:
				// $('.mixitup').mixItUp();
				$('#Container').mixItUp();

			});

		});

		function change_hero(index) {
			$('.hero-list > li:eq('+index+')').show();
			$('.hero-list > li:gt('+index+')').hide();
			$('.hero-list > li:lt('+index+')').hide();
		}

	</script>

	<!-- <div class="row" style="height: 400px; background-image: url(../wfwb/assets/img/test.png); background-position: center center; background-repeat: no-repeat; background-size: cover; margin: 0 0 0 0;"> -->
	<div class="row" style="height: 100px; background-image: url(../wfwb/assets/img/books.png); background-position: center center; background-repeat: no-repeat; background-size: cover; margin: 0 0 0 0;">
	<!-- <div class="row" style="height: 100px; margin: 0 0 0 0; background-color: #221f20;"> -->
		<!-- <h1 style="color: #fff; margin: 80px 0 0 130px; font-size: 55px;">หนังสือใหม่</h1> -->
		<h1 style="color: #fff; margin: 23px 0 0 120px; font-size: 55px;">หนังสือใหม่</h1>
		<!-- <div class="container">
		<div class="col-md-6" style="background-image: url(../wfwb/assets/img/new_1.jpg); height: 530px;">
			<h1 style="color: #ffffff; text-align: center;">หนังสือใหม่</h1>
		</div>
		<div class="col-md-6 "style="background-image: url(../wfwb/assets/img/new_2.jpg); background-size: height: 530px;">
			<h1 style="color: #ffffff; text-align: center;">หนังสือทั้งหมด</h1>
		</div>
		</div> -->
	</div>
	<div class="row" style="height: 50px; margin: 0 0 0 0; background-color: #f2cd34">
		<!-- <div class="container" style="text-align: left; margin: 8px 110px; 0 0;">
			<div class="btn-group" style="text-align: left;">
				<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
					หมวดหมู่ <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">โรแมนติกแฟนตาซี</a></li>
					<li><a href="#">โรแมนติกคอเมดี้</a></li>
					<li><a href="#">ดราม่า</a></li>
				</ul>
			</div>
			<div class="btn-group" style="text-align: left;">
				<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
					นักเขียน <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">ดวงตะวัน</a></li>
					<li><a href="#">อรพิม</a></li>
					<li><a href="#">อรยุทธ์</a></li>
				</ul>
			</div>
			<div class="btn-group" style="text-align: left;">
				<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
					เรียงตาม <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">ชื่อหนังสือ</a></li>
					<li><a href="#">ราคา</a></li>
				</ul>
			</div>
		</div> -->
	</div>

	<!-- NEWS -->
	<div class="row" style="height: auto; padding: 20px 0 20px 0; margin: 0 0 0 0;">
		<div class="container">
			<!-- <div style="margin: 30px 0 0 -5px; height: 60px; width: 250px; background-color: #252120;"> -->
				<!-- <h1 style="color: #ffffff; text-align: center; padding-top: 12px;">หนังสือใหม่</h1> -->
			<!-- </div> -->
			<!-- <hr style="border-top: 1px solid #221F20;"> -->
			<!-- <h1 style="margin-left: 50px;">หนังสือใหม่</h1> -->
			<!-- <hr style="border-top: 1px solid #f2cd34;"> -->

			<?php 

				$no_book = sizeof($new_releases);
				$index = 0;
				$id = 1;

				while ($no_book > 0) {
			?>

				<?php if ($id > 1) { ?> 
					<div id="new<?php echo $id;?>" style="display: none;">
				<? } else { ?> 
					<div id="new<?php echo $id;?>">
				<? } ?>

					<?php for ($i = 0; $i < 2 && $no_book > 0; $i++) { ?>

						<div class="row" style="margin: 50px 0 50px 0;">

							<?php for ($j = 0; $j < 4 && $no_book > 0; $j++) { ?>

								<a href="#" style="color: #252120;">
									<div class="col-md-3" style="text-align: center; line-height: 10px;">
										<img src="<?php echo $new_releases[$index]['cover_img_front']; ?>" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
										<h4 style="font-weight: bold;"><?php echo $new_releases[$index]['book_name']; ?></h4>
										<p style="font-size: 15px; color: #2e8ece;"><?php echo $new_releases[$index]['author_name']; ?></p>
										<p style="color: #7f8c8d;"><?php echo $new_releases[$index]['price']; ?> บาท ส่วนลด <?php echo $new_releases[$index]['discount']; ?>%</p>
									</div>
								</a>

							<? 
								$no_book--;
								$index++;
							} ?>

						</div>

					<? } ?>

				</div>

				<? $id++; ?>

			<?	
				}
			?>

			<!-- <?php
				$i = sizeof($new_releases);
				while ($i > 0) { ?>
				<div class="row" style="margin: 50px 0 20px 0;">
					<?php for ($j = 0; $j < 4 && $i > 0; $j++) { ?> 
						<div class="col-md-3" style="text-align: center; line-height: 10px;">
							<img src="<?php echo $new_releases[$j]['cover_img_front']; ?>" width="200" style="border: 8px solid #FFEC99; margin: 0 0 10px 0; padding: 5px 5px 5px 5px;">
							<h4 style="font-weight: bold;"><?php echo $new_releases[$j]['book_name']; ?></h4>
							<p style="font-size: 15px; color: #2e8ece;"><?php echo $new_releases[$j]['author_name']; ?></p>
							<p style="color: #7f8c8d;"><?php echo $new_releases[$j]['price']; ?> บาท ส่วนลด <?php echo $new_releases[$j]['discount']; ?>%</p>
						</div>
						<? $i--; ?>					
				<?	}  ?>
				</div>
			<?	} ?> -->

			<!-- <div class="row" style="margin: 50px 0 20px 0;">
				<a href="#" style="color: #252120;">
					<div class="col-md-3" style="text-align: center; line-height: 10px;">
						<img src="<?php echo base_url();?>assets/img/books/9-f.png" width="200" style="border: 8px solid #FFEC99; margin: 0 0 10px 0; padding: 5px 5px 5px 5px;">
						<h4 style="font-weight: bold;">หัวใจล้อมรัก</h4>
						<p style="font-size: 15px; color: #2e8ece;">ลัลลาบาย</p>
						<p style="color: #7f8c8d;">230 บาท ส่วนลด 15%</p>
					</div>
				</a> -->
				<!-- <a href="#" style="color: #252120;">
					<div class="col-md-3" style="text-align: center; line-height: 10px;">
						<img src="<?php echo base_url();?>assets/img/books/6.png" width="200" style="border: 8px solid #cccccc; margin: 0 0 10px 0; padding: 5px 5px 5px 5px;">
						<h4 style="font-weight: bold;">หิมาลัย สุดสายรุ้ง</h4>
						<p style="font-size: 15px;">แม่ช้อง</p>
						<p>320 บาท ส่วนลด 15%</p>
					</div>
				</a>
				<a href="#" style="color: #252120;">
					<div class="col-md-3" style="text-align: center; line-height: 10px;">
						<img src="<?php echo base_url();?>assets/img/books/7.png" width="200" style="border: 8px solid #FFEC99; margin: 0 0 10px 0; padding: 5px 5px 5px 5px;">
						<h4 style="font-weight: bold;">เพียงครึ่งใจ</h4>
						<p style="font-size: 15px;">มานัส</p>
						<p>320 บาท ส่วนลด 15%</p>
					</div>
				</a>
				<a href="#" style="color: #252120;">
					<div class="col-md-3" style="text-align: center; line-height: 10px;">
						<img src="<?php echo base_url();?>assets/img/books/8.png" width="200" style="border: 8px solid #cccccc; margin: 0 0 10px 0; padding: 5px 5px 5px 5px;">
						<h4 style="font-weight: bold;">ต้องฤทธิ์รัก</h4>
						<p style="font-size: 15px;">อรพิม</p>
						<p>320 บาท ส่วนลด 15%</p>
					</div>
				</a> -->
			<!-- </div> -->
			<div id="page-selection" style="text-align: center;"></div>
			<script>
				// init bootpag
				$('#page-selection').bootpag({
				    total: <?php echo ceil(sizeof($new_releases)/8); ?>
				}).on("page", function(event, num){
				    // $("#content").html("Page " + num); // or some ajax content loading...
				    for (i = 0; i < 10; i++) {
				    	$("#new" + i).hide();
				    }
				   	$("#new" + num).show(); 
				    // ... after content load -> change total to 10
				    $(this).bootpag({total: <?php echo ceil(sizeof($new_releases)/8); ?>, maxVisible: <?php echo ceil(sizeof($new_releases)/8); ?>});
				 
				});
			</script>
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

	<!-- <div class="container">
		<hr style="border-top: 1px solid #221F20;">
	</div> -->

	<!-- <div class="row" style="height: 400px; background-image: url(../wfwb/assets/img/test.png); background-position: center center; background-repeat: no-repeat; background-size: cover; margin: 0 0 0 0; opacity: 0.5;"> -->
	<!-- <div class="row" style="height: 100px; margin: 0 0 0 0; background-color: #221F20"> -->
	<div class="row" style="height: 100px; background-image: url(../wfwb/assets/img/books.png); background-position: center center; background-repeat: no-repeat; background-size: cover; margin: 0 0 0 0;">
		<h1 style="color: #ffffff; margin: 28px 120px 0 0; font-size: 55px; text-align: right;">หนังสือทั้งหมด</h1>
	</div>
	<div class="row" style="height: 50px; margin: 0 0 0 0; background-color: #f2cd34">
		<div class="container" style="text-align: right; margin: 7px 0 0 0;">
			<!-- <form class="form-horizontal col-md-4" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label" style="color: #fff;">หมวดหมู่</label>
					<div class="col-sm-9" style="float: right;">
						<select class="form-control">
							<option>romantic</option>
							<option>romantic</option>
							<option>romantic</option>
						</select>
					</div>
				</div>
			</form>
			<form class="form-horizontal col-md-4" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label" style="color: #fff;">นักเขียน</label>
					<div class="col-sm-9" style="float: right;">
						<select class="form-control">
							<option>romantic</option>
							<option>romantic</option>
							<option>romantic</option>
						</select>
					</div>
				</div>
			</form>
			<form class="form-horizontal col-md-4" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label" style="color: #fff;">นักเขียน</label>
					<div class="col-sm-9" style="float: right;">
						<select class="form-control">
							<option>romantic</option>
							<option>romantic</option>
							<option>romantic</option>
						</select>
					</div>
				</div>
			</form> -->
			<div class="btn-group" style="text-align: left;">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					หมวดหมู่ <span class="caret"></span>
				</button>
				<!-- <span class="btn filter" data&#45;filter=".5">TEST</span> -->
				<ul class="dropdown-menu" role="menu">
					<li class="filter" data-filter="all"><a>ทั้งหมด</a></li>
					<? foreach($categories as $category) { ?>
						<li class="filter" data-filter=".<?php echo $category['category_id']; ?>"><a><?php echo $category['category_name']; ?></a></li>
					<? } ?>
					<!-- <li><a href="">โรแมนติกแฟนตาซี</a></li> -->
					<!-- <li><a href="#">โรแมนติกคอเมดี้</a></li> -->
					<!-- <li><a href="#">ดราม่า</a></li> -->
				</ul>
			</div>
			<div class="btn-group" style="text-align: left;">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					นักเขียน <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<? foreach($authors as $author) { ?>
						<li class="filter" data-filter=".<?php echo $author['author_id']; ?>"><a><?php echo $author['author_name']; ?></a></li>
					<? } ?>
					<!-- <li><a href="#">ดวงตะวัน</a></li> -->
					<!-- <li><a href="#">อรพิม</a></li> -->
					<!-- <li><a href="#">อรยุทธ์</a></li> -->
				</ul>
			</div>
			<div class="btn-group" style="text-align: left;">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					เรียงตาม <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">ชื่อหนังสือ</a></li>
					<li><a href="#">ราคา</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row" style="height: auto; margin: 20px 0 0 0;">
		<div class="container">
			<!-- <div style="margin: 30px 0 0 -5px; height: 60px; width: 250px; background-color: #252120;"> -->
			<!-- <h1 style="color: #ffffff; text-align: center; padding-top: 12px;">หนังสือใหม่</h1> -->
			<!-- </div> -->
			<!-- <h1 style="text-align: right; margin-right: 50px;">หนังสือทั้งหมด</h1> -->
			<!-- <hr style="border-top: 1px solid #f2cd34;"> -->

			<!--
			<?php foreach($books as $book) { ?>

				<div class="col-md-3 mix <?php echo $book['category_ids'];?>" style="display: inline-block;">
					<a href="#" style="color: #252120;">
						<div class="col-md-3 mix <?php echo $book['category_ids']; ?>" style="text-align: center; line-height: 10px;">
							<img src="<?php echo $book['cover_img_front']; ?>" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;"><?php echo $book['book_name']; ?></h4>
							<p style="font-size: 15px; color: #2e8ece;"><?php echo $book['author_name']; ?></p>
							<p style="color: #7f8c8d;"><?php echo $book['price']; ?> บาท ส่วนลด <?php echo $book['discount']; ?>%</p>
						</div>
					</a>
				</div>

			<? } ?>
			-->

						<!-- <div class="col&#45;md&#45;3 mix cat&#45;1" style="text&#45;align: center; line&#45;height: 10px;"> -->
			<?php 

				$no_book = sizeof($books);
				$index = 0;
				$id = 1;

				while ($no_book > 0) {
			?>

				<?php if ($id > 1) { ?> 
					<div id="all<?php echo $id;?>" style="display: none;">
				<? } else { ?> 
					<div id="all<?php echo $id;?>">
				<? } ?>

					<?php for ($i = 0; $i < 2 && $no_book > 0; $i++) { ?>

						<div class="row mixitup" id="Container" style="margin: 50px 0 50px 0;">

							<?php for ($j = 0; $j < sizeof($books); $j++) { ?>

								<a href="#" style="color: #252120;">
									<div class="col-md-3 mix <?php echo $books[$index]['category_ids']; ?>" style="text-align: center; line-height: 10px;">
										<img src="<?php echo $books[$index]['cover_img_front']; ?>" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
										<h4 style="font-weight: bold;"><?php echo $books[$index]['book_name']; ?></h4>
										<p style="font-size: 15px; color: #2e8ece;"><?php echo $books[$index]['author_name']; ?></p>
										<p style="color: #7f8c8d;"><?php echo $books[$index]['price']; ?> บาท ส่วนลด <?php echo $books[$index]['discount']; ?>%</p>
									</div>
								</a>

							<? 
								$no_book--;
								$index++;
							} ?>

						</div>

					<? } ?>

				</div>

				<? $id++; ?>

			<?	
				}
			?>

			<!-- <div id="1">
				<div class="row" style="margin: 50px 0 50px 0;">
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/1-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">บัลลังก์ รัตติกาล</h4>
							<p style="font-size: 15px; color: #2e8ece;">อรพิม</p>
							<p style="color: #7f8c8d;">320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/2-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">สายสวาท</h4>
							<p style="font-size: 15px; color: #2e8ece;">อยุทธ์</p>
							<p style="color: #7f8c8d;">360 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/3-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">บ้านตุ๊กตา</h4>
							<p style="font-size: 15px; color: #2e8ece;">ดวงตะวัน</p>
							<p style="color: #7f8c8d;">320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/4-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">อาคม</h4>
							<p style="font-size: 15px; color: #2e8ece;">ชลนิล</p>
							<p style="color: #7f8c8d;">320 บาท ส่วนลด 15%</p>
						</div>
					</a>
				</div>
				<hr style="border-top: 1px solid #f2cd34;">
				<div class="row" style="margin: 50px 0 20px 0;">
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/5-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรงรัตติกาล</h4>
							<p style="font-size: 15px; color: #2e8ece;">อรพิม</p>
							<p style="color: #7f8c8d;">290 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/6-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">หิมาลัยสายรุ้ง</h4>
							<p style="font-size: 15px; color: #2e8ece;">แม่ช้อง</p>
							<p style="color: #7f8c8d;">260 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/8-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพียงครึ่งใจ</h4>
							<p style="font-size: 15px; color: #2e8ece;">มานัส</p>
							<p style="color: #7f8c8d;">270 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/7-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">ต้องฤทธิ์รัก</h4>
							<p style="font-size: 15px; color: #2e8ece;">อุมาริการ์</p>
							<p style="color: #7f8c8d;">280 บาท ส่วนลด 15%</p>
						</div>
					</a>
				</div>
				<hr>
			</div> -->

			<!-- <div id="2" style="display:none;">
				<div class="row" style="margin: 50px 0 50px 0;">
					<a href="#" style="color: #252120;">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/9-f.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">หัวใจล้อมรัก</h4>
							<p style="font-size: 15px; color: #2e8ece;">ลัลลาบาย</p>
							<p style="color: #7f8c8d;">230 บาท ส่วนลด 15%</p>
						</div>
					</a>
				</div>
			</div> -->

			<!--
			<?php for ($i = 2; $i <= 5; $i++) { ?>
				<div id="<?php echo $i;?>" style="display: none;">
					<div class="row" style="margin: 50px 0 50px 0;">
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/5.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/6.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/7.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/8.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #FFEC99; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
				</div>
				<hr>
				<div class="row" style="margin: 50px 0 20px 0;">
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/5.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/6.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/7.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
					<a href="#">
						<div class="col-md-3" style="text-align: center;">
							<img src="<?php echo base_url();?>assets/img/books/8.png" width="200" style="padding: 5px 5px 5px 5px; border: 8px solid #cccccc; margin: 0 0 10px 0;">
							<h4 style="font-weight: bold;">เพรง รัตติกาล</h4>
							<p style="font-size: 15px;">อรพิม</p>
							<p>320 บาท ส่วนลด 15%</p>
						</div>
					</a>
				</div>
			</div>
			<? } ?>
		-->
			<!-- <div id="all&#45;selection" style="text&#45;align: center; margin&#45;bottom: 30px;"></div> -->
			<script>
				// init bootpag
				$('#all-selection').bootpag({
				    total: <?php echo ceil(sizeof($books)/8); ?>
					}).on("page", function(event, num){
				    // $("#content").html("Page " + num); // or some ajax content loading...
				    for (i = 0; i < 10; i++) {
				    	$("#all" + i).hide();
				    }
				   	$("#all" + num).show(); 
				    // ... after content load -> change total to 10
				    $(this).bootpag({total: <?php echo ceil(sizeof($books)/8); ?>, maxVisible: <?php echo ceil(sizeof($books)/8); ?>});
				});
			</script>
		</div>
	</div>
