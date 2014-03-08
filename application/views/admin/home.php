<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>Home Page</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
	</div>
</div>

<style type="text/css">
	.list > li > input {
		width: 400px;
		list-style: none;
	}
</style>

<div class="row">
	<div class="container">
		<h2>Adding New Banner</h2>
		<br>
		<?php 
			$attributes = array('class' => 'form-horizontal');
			echo form_open('admin/home_page', $attributes); 
		?>
			<div class="form-group">
				<label for="banner_desktop" class="col-sm-3 control-label">Banner (Desktop Version)</label>
				<div class="col-sm-9">
					<input class="col-sm-9 form-control" id="banner_desktop" name="banner_desktop" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="banner_mobile" class="col-sm-3 control-label">Banner (Mobile Version)</label>
				<div class="col-sm-9">
					<input class="col-sm-9 form-control" id="banner_mobile" name="banner_mobile" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="heading" class="col-sm-3 control-label">Heading</label>
				<div class="col-sm-9">
					<input class="col-sm-9 form-control" id="heading" name="heading" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-3 control-label">Detail</label>
				<div class="col-sm-9">
					<input class="col-sm-9 form-control" id="detail" name="detail" type="text"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="order" class="col-sm-3 control-label">Order</label>
				<div class="col-sm-9">
					<input class="col-sm-9 form-control" id="order" name="order" type="text"></input>
				</div>
			</div>
		<!-- <ul class="list">
			<li>banner desktop<input class="form-control" name="banner_desktop" type="text"></input></li>
			<li>banner mobile<input class="form-control" name="banner_mobile" type="text"></input></li>
			<li>heading<input class="form-control" name="heading" type="text"></input></li>
			<li>detail<input class="form-control" name="detail" type="text"></input></li>
			<li>order<input class="form-control" name="order" type="text"></input></li>
			<li><input class="form-control" name="text_desktop" type="checkbox" style="width: 30px;"></input>text desktop</li>
			<li><input class="form-control" name="text_mobile" type="checkbox" style="width: 30px;"></input>text mobile</li>
		</ul> -->
			<button type="submit" class="btn btn-primary" style="float: right;">Add</button>
		<?php echo form_close(); ?>
	</div>
</div>
<div class="row">
	<div class="container">
		<h2>Banner</h2>
		<br>
			<?php
				foreach ($home as $h) { 
			?>
				<?php
					$attributes = array('class' => 'form-horizontal'); 
					echo form_open('admin/home_page_edit', $attributes); 
				?>
				<div style="display: none;">
					<input name="id" value="<?php echo $h['id']; ?>"></input>
				</div>
				<div class="form-group">
					<label for="banner_desktop" class="col-sm-3 control-label">Banner (Desktop Version)</label>
					<div class="col-sm-9">
						<input class="col-sm-9 form-control" id="banner_desktop" name="banner_desktop" type="text" value="<?php echo $h['banner_desktop']?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="banner_mobile" class="col-sm-3 control-label">Banner (Mobile Version)</label>
					<div class="col-sm-9">
						<input class="col-sm-9 form-control" id="banner_mobile" name="banner_mobile" type="text" value="<?php echo $h['banner_mobile']?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="heading" class="col-sm-3 control-label">Heading</label>
					<div class="col-sm-9">
						<input class="col-sm-9 form-control" id="heading" name="heading" type="text" value="<?php echo $h['heading']?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="detail" class="col-sm-3 control-label">Detail</label>
					<div class="col-sm-9">
						<input class="col-sm-9 form-control" id="detail" name="detail" type="text" value="<?php echo $h['detail']?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="order" class="col-sm-3 control-label">Order</label>
					<div class="col-sm-9">
						<input class="col-sm-9 form-control" id="order" name="order" type="text" value="<?php echo $h['order']?>"></input>
					</div>
				</div>
				<!-- <ul>
					<li style="display: none;"><input name="id" value="<?php echo $h['id']; ?>"></input></li>
					<li>banner desktop<input name="banner_desktop" type="text" value="<?php echo $h['banner_desktop']?>"></input></li>
					<li>banner mobile<input name="banner_mobile" type="text" value="<?php echo $h['banner_mobile']?>"></input></li>
					<li>heading<input name="heading" type="text" value="<?php echo $h['heading']?>"></input></li>
					<li>detail<input name="detail" type="text" value="<?php echo $h['detail']?>"></input></li>
					<li>order<input name="order" type="text" value="<?php echo $h['order']?>"></input></li>
					<?php echo $h['text_desktop'];if ($h['text_desktop'] > 0) { ?>
						<li><input name="text_desktop" type="checkbox" checked="checked"></input>text desktop</li>
					<?php } else { ?>
						<li><input name="text_desktop" type="checkbox"></input>text desktop</li>
					<? } ?>
					<li><input name="text_mobile" type="checkbox"></input>text mobile</li>
				</ul> -->
				<div class="col-sm-12" style="margin-bottom: 20px;">
					<button type="submit" class="btn btn-primary" style="float: right;">Save</button>
					<button type="submit" class="btn btn-danger" style="float: right;">Remove</button>
				</div>
				<?php echo form_close(); ?>
			<? } ?>
		<br>
	</div>
</div>

<!-- <div id="add-section" class="section">
	<div class="section-inner">
		<h2>Adding new banner</h2>
		<div class="container">
			<?php echo form_open('admin/home_page'); ?>
			<ul id="list">
				<li>banner desktop<input name="banner_desktop" type="text"></input></li>
				<li>banner mobile<input name="banner_mobile" type="text"></input></li>
				<li>heading<input name="heading" type="text"></input></li>
				<li>detail<input name="detail" type="text"></input></li>
				<li>order<input name="order" type="text"></input></li>
				<li><input name="text_desktop" type="checkbox" style="width: 30px;"></input>text desktop</li>
				<li><input name="text_mobile" type="checkbox" style="width: 30px;"></input>text mobile</li>
			</ul>
			<button type="submit" class="btn btn-primary">Add</button>
			<?php echo form_close(); ?>
		</div>	
	</div>	
</div> -->
<!-- <div class="section">
	<div class="section-inner">
		<h2>Banner</h2>
		<div class="container">
			<?php
				foreach ($home as $h) { 
			?>
				<?php echo form_open('admin/home_page_edit'); ?>
				<ul>
					<li style="display: none;"><input name="id" value="<?php echo $h['id']; ?>"></input></li>
					<li>banner desktop<input name="banner_desktop" type="text" value="<?php echo $h['banner_desktop']?>"></input></li>
					<li>banner mobile<input name="banner_mobile" type="text" value="<?php echo $h['banner_mobile']?>"></input></li>
					<li>heading<input name="heading" type="text" value="<?php echo $h['heading']?>"></input></li>
					<li>detail<input name="detail" type="text" value="<?php echo $h['detail']?>"></input></li>
					<li>order<input name="order" type="text" value="<?php echo $h['order']?>"></input></li>
					<?php echo $h['text_desktop'];if ($h['text_desktop'] > 0) { ?>
						<li><input name="text_desktop" type="checkbox" checked="checked"></input>text desktop</li>
					<?php } else { ?>
						<li><input name="text_desktop" type="checkbox"></input>text desktop</li>
					<? } ?>
					<li><input name="text_mobile" type="checkbox"></input>text mobile</li>
				</ul>
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="submit" class="btn btn-danger">Remove</button>
				<?php echo form_close(); ?>
			<? } ?>
		</div>	
	</div>	
</div> -->