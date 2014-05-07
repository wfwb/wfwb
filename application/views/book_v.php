	
	<style type="text/css">

		@media (min-width: 992px) {

			#book_info_top {
				padding-left: 50px;
			}

			#book_img {
				max-width: 80%;
			}

		}

		@media (max-width: 991px) {

			#book_img {
				max-width: 100%;
			}

		}

	</style>

	<div class="row" style="height: 100px; background-image: url(../assets/img/books.png); background-position: center center; background-repeat: no-repeat; background-size: cover; margin: 0 0 0 0;">
		<h1 style="color: #fff; margin: 23px 0 0 120px; font-size: 55px;"><?php echo $book['book_name']; ?></h1>
	</div>
	<div class="row" style="height: auto; padding: 70px 0 70px 0; margin: 0 0 0 0;">
		<div class="container">
			<div class="col-sm-5">
				<img id="book_img" src="<?php echo base_url() . $book['cover_img_front']; ?>">
			</div>
			<div id="book_info_top" class="col-sm-7">
				<h1><?php echo $book['book_name']; ?></h1>
				<h4><?php echo $book['book_name_decor']; ?></h4>
				<h4><?php echo $book['author_name']; ?></h4>
				<br>
				<p>
					ราคา <?php echo $book['price']; ?> บาท <strong style="color: red;">(ส่วนลด <?php echo $book['discount']; ?>% เหลือ <?php echo $book['price'] - $book['price'] * $book['discount'] / 100; ?> บาท)</strong>
				</p>
				<span class="glyphicon glyphicon-download"></span> <a href="">ตัวอย่างทดลองอ่าน</a>
				<br><br>
				<button class="btn btn-warning">สั่งซื้อ</button>
				<hr>
				<h4>ข้อมูลหนังสือ</h4>
				<br>
				<p>ประเภท <?php echo $book['category_ids']; ?></p>
				<p>ISBN <?php echo $book['ISBN']; ?></p>
				<p><?php echo $book['cover_inside']; ?></p>
				<p>จำนวนหน้า <?php echo $book['total_pages']; ?> หน้า</p>
			</div>
		</div>
		<div class="container">
			<div class="col-sm-12">
				<br>
				<hr>
				<h4>รายละเอียดหนังสือ</h4>	
				<br>
				<p><?php echo nl2br($book['book_info']); ?></p>
				<br>
				<hr>
				<h4>เกี่ยวกับนักเขียน</h4>	
				<br>
				<p><?php echo nl2br($book['about_author']); ?></p>
				<br>
				<hr>
				<h4>รีวิว</h4>
				<p><?php echo nl2br($book['review']); ?></p>
			</div>	
		</div>
	</div>
