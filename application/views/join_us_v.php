	
	<div id="join-us-section" class="section" style="background: #FFFFFF; color: #231F20;">
		<?php 
			$i = 1;
			foreach ($join_us as $thumbnail) { 
		?>
			<?php if($i > 1) { ?>
				<hr style="margin-bottom: 5px;">
			<?php } ?>
			<div class="custom-thumbnail">
				<div class="thumbnail-img">
					<img src="<?php echo base_url()?><?php echo $thumbnail['thumbnail_img']?>">	
				</div>	
				<div class="thumbnail-detail" style="overflow: hidden; text-overflow: ellipsis;">
					<h2><?php echo $thumbnail['heading']; ?></h2>
					<p id="detail<?php echo $i?>"><?php echo $thumbnail['detail']; ?></p>
				</div>
				<?php echo form_open('join_us/show_join_us'); ?>
					<p style="display: none;"><input name="id" value="<?php echo $thumbnail['id']; ?>"></input></p>
					<button class="btn btn btn-warning">อ่านต่อ ...</button>
				<?php echo form_close(); ?>
			</div>
		<?php 
			$i++;
		} ?>
	</div>
