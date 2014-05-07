<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>Series Page</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
  </div>
</div>

<div class="row">
	<div class="container">
		<h2>Add New Series</h2>
		<br>
		<?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open_multipart("admin_c/series_page_add", $attributes); 
		?>
			<div class="form-group">
				<label for="series_name" class="col-sm-2 control-label">Series Name</label>
				<div class="col-sm-10">
					<input class="form-control" id="series_name" name="series_name" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="series_info" class="col-sm-2 control-label">Series Info</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="series_info" name="series_info"></textarea>
				</div>
			</div>
			<div style="display: none;"><input name="series_id" value=""></input></div>
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
			foreach ($series as $s) { 
		?>
			<?php
				$attributes = array('class' => 'form-horizontal');
				echo form_open_multipart('admin_c/series_page_edit', $attributes);
			?>
				<div class="form-group">
					<label for="series_name" class="col-sm-2 control-label">Category Name</label>
					<div class="col-sm-10">
						<input class="form-control" id="series_name" name="series_name" type="text" value="<?php echo $s['series_name'];?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="series_info" class="col-sm-2 control-label">Series Info</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="series_info" name="series_info"><?php echo $s['series_info']; ?></textarea>
					</div>
				</div>
				<div style="display: none;"><input name="series_id" value="<?php echo $s['series_id']; ?>"></input></div>
				<button type="submit" class="btn btn-primary" style="float: right;">Save</button>
			<?php echo form_close(); ?>
			<?php echo form_open('admin_c/series_page_delete'); ?>
			<div style="display: none;"><input name="series_id" value="<?php echo $s['series_id']; ?>"></input></div>
				<button type="submit" class="btn btn-danger" style="float: right; margin-right: 5px;">Remove</button>	
			<?php echo form_close(); ?>
			<br><br><br>
		<? } ?>
	</div>
</div>
