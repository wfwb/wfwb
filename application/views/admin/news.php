<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>News Page</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
	</div>
</div>

<div class="row">
	<div class="container">
		<h2>Add New News</h2>
		<br>
		<?php 
			$attributes = array('class' => 'form-horizontal');
			echo form_open("admin/news_page_add", $attributes);
		?>
			<div class="form-group">
				<label for="thumbnail_img" class="col-sm-2 control-label">Thumbnail Image</label>
				<div class="col-sm-10">
					<input class="form-control" id="thumbnail_img" name="thumbnail_img" type="text"></input>
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
			<button type="submit" class="btn btn-primary" style="float: right;">Add</button>
		<?php echo form_close(); ?>
	</div>
</div>

<div class="row">
	<div class="container">
		<h2>News</h2>
		<br>
		<?php
			foreach ($news as $n) { 
		?>
			<?php 
				$attributes = array('class' => 'form-horizontal');
				echo form_open('admin/news_page_edit', $attributes);
			?>
				<div style="display: none;">
					<input name="id" value="<?php echo $n['id']; ?>"></input>
				</div>
				<div class="form-group">
					<label for="thumbnail_img" class="col-sm-2 control-label">Thumbnail Image</label>
					<div class="col-sm-10">
						<input class="form-control" id="thumbnail_img" name="thumbnail_img" type="text" value="<?php echo $n['thumbnail_img']; ?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="heading" class="col-sm-2 control-label">Heading</label>
					<div class="col-sm-10">
						<input class="form-control" id="heading" name="heading" type="text" value="<?php echo $n['heading']; ?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="detail" class="col-sm-2 control-label">Detail</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="detail" name="detail" type="text" value="<?php echo $n['detail']; ?>"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="order" class="col-sm-2 control-label">Order</label>
					<div class="col-sm-10">
						<input class="form-control" id="order" name="order" type="text" value="<?php echo $n['order']; ?>"></input>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" style="float: right;">Save</button>
			<?php echo form_close(); ?>
			<?php echo form_open('admin/news_page_delete'); ?>
				<div style="display: none;"><input name="id" value="<?php echo $n['id']; ?>"></input></div>
				<button type="submit" class="btn btn-danger" style="float: right; margin-right: 5px;">Remove</button>	
			<?php echo form_close(); ?>
			<br><br><br>
		<? } ?>

	</div> icker
</div>

<!-- <div class="section">
	<div class="section-inner">
		<h2>Add new join us</h2>
		<div class="container">
			<?php echo form_open("admin/news_page_add"); ?>
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
				foreach ($news as $n) { 
			?>
				<?php echo form_open('admin/news_page_edit'); ?>
				<ul>
					<li style="display: none;"><input name="id" value="<?php echo $n['id']; ?>"></input></li>
					<li>thumbnail img<input name="thumbnail_img" type="text" value="<?php echo $n['thumbnail_img'];?>"></input></li>	
					<li>heading<input name="heading" type="text" value="<?php echo $n['heading'];?>"></input></li>	
					<li>detail<input name="detail" type="text" value="<?php echo $n['detail'];?>"></input></li>	
					<li>order<input name="order" type="text" value="<?php echo $n['order'];?>"></input></li>	
				</ul>
				<button type="submit" class="btn btn-primary">Save</button>
				<?php echo form_close(); ?>
				<?php echo form_open('admin/news_page_delete'); ?>
					<li style="display: none;"><input name="id" value="<?php echo $n['id']; ?>"></input></li>
					<button type="submit" class="btn btn-danger">Remove</button>	
				<?php echo form_close(); ?>
			<? } ?>
		</div>	
	</div>	
</div> -->