<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>Books Page</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
	</div>
</div>

<div class="row">
	<div class="container">
		<h2>Add New Book</h2>
		<br>
		<?php 
			$attributes = array('class' => 'form-horizontal');
			echo form_open("admin_c/books_page_add", $attributes); 
		?>
			<div class="form-group">
				<label for="book_name" class="col-sm-2 control-label">Book Name</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="book_name" name="book_name" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="book_name_decor" class="col-sm-2 control-label">คำโปรย</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="book_name_decor" name="book_name_decor" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="series" class="col-sm-2 control-label">Series</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="series" name="series" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="author" class="col-sm-2 control-label">Author</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="author" name="author" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="category" class="col-sm-2 control-label">Category</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="category" name="category" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="ISBN" class="col-sm-2 control-label">ISBN</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="ISBN" name="ISBN" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="publish" class="col-sm-2 control-label">Publish Date</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="publish" name="publish" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="cover_inside" class="col-sm-2 control-label">Cover & Inside</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="cover_inside" name="cover_inside" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="total_pages" class="col-sm-2 control-label">Total Pages</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="total_pages" name="total_pages" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="price" class="col-sm-2 control-label">Price</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="price" name="price" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="discount" class="col-sm-2 control-label">% Discount</label>
				<div class="col-sm-9">
					<input class="col-sm-10 form-control" id="discount" name="discount" type="text"></input>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<div class="section">
	<div class="section-inner">
		<h2>Add new book</h2>
		<div class="container">
			<?php echo form_open("admin_c/books_page_add"); ?>
				<ul>
					<li>book name<input name="book_name" type="text"></input></li>	
					<li>book name decor<input name="book_name_decor" type="text"></input></li>	
					<li>series<input name="series" type="text"></input></li>	
					<li>author<input name="author" type="text"></input></li>	
					<li>category<input name="category" type="text"></input></li>
					<li>ISBN<input name="ISBN" type="text"></input></li>
					<li>publish<input name="publish" type="text"></input></li>
					<li>cover_inside<input name="cover_inside" type="text"></input></li>
					<li>total_pages<input name="total_pages" type="text"></input></li>
					<li>price<input name="price" type="text"></input></li>
					<li>discount<input name="discount" type="text"></input></li>
					<li>demo_link<input name="demo_link" type="text"></input></li>
					<li>book_info<input name="book_info" type="text"></input></li>
					<li>series_info<input name="series_info" type="text"></input></li>
					<li>about_author<input name="about_author" type="text"></input></li>
					<li>review<input name="review" type="text"></input></li>
					<li>cover_img_front<input name="cover_img_front" type="file"></input></li>  
					<li>cover_img_back<input name="cover_img_back" type="file"></input></li> 
					<button type="submit" class="btn btn-primary">Add</button>
				</ul>
			<?php echo form_close(); ?>
		</div>
	</div>	
</div>
<div class="section">
	<div class="section-inner">
		<h2>Books</h2>
		<div class="container">
			<?php
				foreach ($books as $book) { 
			?>
				<?php echo form_open('admin/books_page_edit'); ?>
				<ul>
					<li style="display: none;"><input name="id" value="<?php echo $book['id']; ?>"></input></li>
					<li>book name<input name="book_name" type="text" value="<?php echo $book['book_name']; ?>"></input></li>
					<!-- <li>book name<textarea name="book_name" type="text"><?php echo $book['book_name']; ?></textarea></li>	 -->
					<li>book name decor<input name="book_name_decor" type="text" value="<?php echo $book['book_name_decor']; ?>"></input></li>	
					<li>series<input name="series" type="text" value="<?php echo $book['series']; ?>"></input></li>	
					<li>author<input name="author" type="text" value="<?php echo $book['author']; ?>"></input></li>	
					<li>category<input name="category" type="text" value="<?php echo $book['category']; ?>"></input></li>
					<li>ISBN<input name="ISBN" type="text" value="<?php echo $book['ISBN']; ?>"></input></li>
					<li>publish<input name="publish" type="text" value="<?php echo $book['publish']; ?>"></input></li>
					<li>cover_inside<input name="cover_inside" type="text" value="<?php echo $book['cover_inside']; ?>"></input></li>
					<li>total_pages<input name="total_pages" type="text" value="<?php echo $book['total_pages']; ?>"></input></li>
					<li>price<input name="price" type="text" value="<?php echo $book['price']; ?>"></input></li>
					<li>discount<input name="discount" type="text" value="<?php echo $book['discount']; ?>"></input></li>
					<li>demo_link<input name="demo_link" type="text" value="<?php echo $book['demo_link']; ?>"></input></li>
					<li>book_info<input name="book_info" type="text" value="<?php echo $book['book_info']; ?>"></input></li>
					<li>series_info<input name="series_info" type="text" value="<?php echo $book['series_info']; ?>"></input></li>
					<li>about_author<input name="about_author" type="text" value="<?php echo $book['about_author']; ?>"></input></li>
					<li>review<input name="review" type="text" value="<?php echo $book['review']; ?>"></input></li>
					<li>cover_img_front<input name="cover_img_front" type="text" value="<?php echo $book['cover_img_front']; ?>"></input></li>
					<li>cover_img_back<input name="cover_img_back" type="text" value="<?php echo $book['cover_img_back']; ?>"></input></li>
				</ul>
				<button type="submit" class="btn btn-primary">Save</button>
				<?php echo form_close(); ?>
				<?php echo form_open('admin/books_page_delete'); ?>
					<li style="display: none;"><input name="id" value="<?php echo $book['id']; ?>"></input></li>
					<button type="submit" class="btn btn-danger">Remove</button>	
				<?php echo form_close(); ?>
			<? } ?>
		</div>	
	</div>	
</div>