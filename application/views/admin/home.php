<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Home Page</h1>
    <p class="lead">Admin Panel</p>
</header>

<style type="text/css">
	#list > li > input {
		width: 400px;
	}
</style>

<div id="add-section" class="section">
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
</div>
<div class="section">
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
</div>