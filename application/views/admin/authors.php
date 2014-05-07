<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>Authors Page</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
  </div>
</div>

<div class="row">
	<div class="container">
		<h2>Add New Authors</h2>
		<br>
		<?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open_multipart("admin_c/authors_page_add", $attributes); 
		?>
			<div class="form-group">
				<label for="author_name" class="col-sm-2 control-label">Authors Name</label>
				<div class="col-sm-10">
					<input class="form-control" id="author_name" name="author_name" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="about_author" class="col-sm-2 control-label">About Author</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="about_author" name="about_author"></textarea>
				</div>
			</div>
			<div style="display: none;"><input name="author_id" value=""></input></div>
			<div>
				<button type="submit" class="btn btn-primary" style="float: right;">Add</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<div class="row">
	<div class="container">
		<h2>Categories</h2>
		<br>

		<?php
			foreach ($authors as $author) { 
		?>
			<?php
				$attributes = array('class' => 'form-horizontal');
				echo form_open_multipart('admin_c/authors_page_edit', $attributes);
			?>
				<div class="form-group">
					<label for="author_name" class="col-sm-2 control-label">Author Name</label>
					<div class="col-sm-10">
						<input class="form-control" id="author_name" name="author_name" type="text" value="<?php echo $author['author_name'];?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="about_author" class="col-sm-2 control-label">About Author</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="about_author" name="about_author"><?php echo $author['about_author']; ?></textarea>
					</div>
				</div>
				<div style="display: none;"><input name="author_id" value="<?php echo $author['author_id']; ?>"></input></div>
				<button type="submit" class="btn btn-primary" style="float: right;">Save</button>
			<?php echo form_close(); ?>
			<?php echo form_open('admin_c/authors_page_delete'); ?>
			<div style="display: none;"><input name="author_id" value="<?php echo $author['author_id']; ?>"></input></div>
				<button type="submit" class="btn btn-danger" style="float: right; margin-right: 5px;">Remove</button>	
			<?php echo form_close(); ?>
			<br><br><br>
		<? } ?>
	</div>
</div>
