<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>Categories Page</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
  </div>
</div>

<div class="row">
	<div class="container">
		<h2>Add New Category</h2>
		<br>
		<?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open_multipart("admin_c/categories_page_add", $attributes); 
		?>
			<div class="form-group">
				<label for="category_name" class="col-sm-2 control-label">Category Name</label>
				<div class="col-sm-10">
					<input class="form-control" id="category_name" name="category_name" type="text"></input>
				</div>
			</div>
			<div style="display: none;"><input name="category_id" value=""></input></div>
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
			foreach ($categories as $category) { 
		?>
			<?php
				$attributes = array('class' => 'form-horizontal');
				echo form_open_multipart('admin_c/categories_page_edit', $attributes);
			?>
				<div class="form-group">
					<label for="category_name" class="col-sm-2 control-label">Category Name</label>
					<div class="col-sm-10">
						<input class="form-control" id="category_name" name="category_name" type="text" value="<?php echo $category['category_name'];?>"></input>
					</div>
				</div>
				<div style="display: none;"><input name="category_id" value="<?php echo $category['category_id']; ?>"></input></div>
				<button type="submit" class="btn btn-primary" style="float: right;">Save</button>
			<?php echo form_close(); ?>
			<?php echo form_open('admin_c/categories_page_delete'); ?>
			<div style="display: none;"><input name="category_id" value="<?php echo $category['category_id']; ?>"></input></div>
				<button type="submit" class="btn btn-danger" style="float: right; margin-right: 5px;">Remove</button>	
			<?php echo form_close(); ?>
			<br><br><br>
		<? } ?>
	</div>
</div>
