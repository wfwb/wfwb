<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>Join Us Page</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
  </div>
</div>

<div class="row">
	<div class="container">
		<h2>Add New Join Us</h2>
		<br>
		<?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open_multipart("admin_c/join_us_page_add", $attributes); 
		?>
			<div class="form-group">
				<label for="thumbnail_img" class="col-sm-2 control-label">Thumbnail Image</label>
				<div class="col-sm-10">
					<input class="form-control" id="thumbnail_img" name="thumbnail_img" type="file"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="heading" class="col-sm-2 control-label">Heading</label>
				<div class="col-sm-10">
					<input class="form-control" id="heading" name="heading" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detail</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="detail" name="detail" type="text"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="order" class="col-sm-2 control-label">Order</label>
				<div class="col-sm-10">
					<input class="form-control" id="order" name="order" type="text"></input>
				</div>
			</div>
			<div>
				<button type="submit" class="btn btn-primary" style="float: right;">Add</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<div class="row">
	<div class="container">
		<h2>Join Us</h2>
		<br>
		<!--  -->
		<?php
			foreach ($join_us as $j) { 
		?>
			<?php
				$attributes = array('class' => 'form-horizontal');
				echo form_open_multipart('admin_c/join_us_page_edit', $attributes);
			?>
				<div class="form-group">
					<label for="thumbnail_img" class="col-sm-2 control-label">Thumbnail Image</label>
					<div class="col-sm-10">
						<input class="form-control" id="thumbnail_img" name="thumbnail_img" type="file"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="heading" class="col-sm-2 control-label">Heading</label>
					<div class="col-sm-10">
						<input class="form-control" id="heading" name="heading" type="text" value="<?php echo $j['heading'];?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="detail" class="col-sm-2 control-label">Detail</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="detail" name="detail" type="text"><?php echo $j['detail'];?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="order" class="col-sm-2 control-label">Order</label>
					<div class="col-sm-10">
						<input class="form-control" id="order" name="order" type="text" value="<?php echo $j['order'];?>"></input>
					</div>
				</div>
				<div style="display: none;"><input name="id" value="<?php echo $j['id']; ?>"></input></div>
				<div style="display: none;"><input name="thumbnail" value="<?php echo $j['thumbnail_img']; ?>"></input></div>
				<button type="submit" class="btn btn-primary" style="float: right;">Save</button>
			<?php echo form_close(); ?>
			<?php echo form_open('admin_c/join_us_page_delete'); ?>
			<div style="display: none;"><input name="id" value="<?php echo $j['id']; ?>"></input></div>
				<button type="submit" class="btn btn-danger" style="float: right; margin-right: 5px;">Remove</button>	
			<?php echo form_close(); ?>
			<br><br><br>
		<? } ?>
	</div>
</div>

<!-- <div class="section">
	<div class="section-inner">
		<h2>Add new join us</h2>
		<div class="container">
			<?php echo form_open("admin/join_us_page_add"); ?>
				<ul>
					<li>thumbnail img<input name="thumbnail_img" type="text"></input></li>	
					<li>heading<input name="heading" type="text"></input></li>	
					<li>detail<input name="detail" type="text"></input></li>	
					<li>order<input name="order" type="text"></input></li>	
					<button type="submit" class="btn btn-primary">Add</button>
				</ul>
			<?php echo form_close(); ?>
		</div>
	</div>	
</div>
<div class="section">
	<div class="section-inner">
		<h2>Banner</h2>
		<div class="container">
			<?php
				foreach ($join_us as $j) { 
			?>
				<?php echo form_open('admin/join_us_page_edit'); ?>
				<ul>
					<li style="display: none;"><input name="id" value="<?php echo $j['id']; ?>"></input></li>
					<li>thumbnail img<input name="thumbnail_img" type="text" value="<?php echo $j['thumbnail_img'];?>"></input></li>	
					<li>heading<input name="heading" type="text" value="<?php echo $j['heading'];?>"></input></li>	
					<li>detail<input name="detail" type="text" value="<?php echo $j['detail'];?>"></input></li>	
					<li>order<input name="order" type="text" value="<?php echo $j['order'];?>"></input></li>	
				</ul>
				<button type="submit" class="btn btn-primary">Save</button>
				<?php echo form_close(); ?>
				<?php echo form_open('admin/join_us_page_delete'); ?>
					<li style="display: none;"><input name="id" value="<?php echo $j['id']; ?>"></input></li>
					<button type="submit" class="btn btn-danger">Remove</button>	
				<?php echo form_close(); ?>
			<? } ?>
		</div>	
	</div>	
</div> -->