<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Join us Page</h1>
    <p class="lead">Admin Panel</p>
</header>

<div class="section">
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
</div>