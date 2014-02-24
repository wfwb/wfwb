	
	<div id="register-section" class="section">
		<div class="section-inner" style="text-align: left;">

			<h1>สมัครสมาชิก</h1>

			<?php echo form_open('auth/create_user'); ?>

			<div class="row-custom">
				<p style=" margin-top: 20px;">
					<?php echo form_error("first_name","<font size=5px; class='font_error' color='error'>","</font>");?></br>
					<!-- <label class="row-label" for="first_name" style="margin-right:10px;">ชื่อ : </label> -->
					<input placeholder="ชื่อ" type="text" name="first_name" value="" id="first_name" class="form-control" size="40"/>
				</p>

				<p> 
					<?php echo form_error("last_name","<font size=5px; class='font_error' color='error'>","</font>");?></br>
					<!-- <label class="row-label" for="first_name" style="margin-right:10px;">นามสกุล : </label>  -->
					<input placeholder="นามสกุล" type="text" name="last_name" value="" id="last_name" class="form-control" size="40"/>
				</p>
				<p>
					<?php echo form_error("email","<font size=5px; class='font_error' color='error'>","</font>");?></br>
					<!-- <label class="row-label" for="email" style="margin-right:63px;">อีเมล์ : </label> -->
					<input placeholder="อีเมล" type="email" name="email" value="" id="email" class="form-control" size="40"/>
				</p>

				<p>
					<?php echo form_error("phone","<font size=5px; class='font_error' color='error'>","</font>");?></br>
					<!-- <label class="row-label" for="phone" style="margin-right:55px;">โทรศัพท์ : </label>  -->
					<input placeholder="โทรศัพท์" type="text" name="phone" value="" id="phone" class="form-control" size="40"/>
				</p>
				<p>
					<?php echo form_error("password","<font size=5px; class='font_error' color='error'>","</font>");?></br>
					<!-- <label class="row-label" for="password" style="margin-right:30px; float:left;">รหัสผ่าน : </label>  -->
					<input placeholder="รหัสผ่าน" type="password" name="password" value="" id="password" class="form-control" size="40"/>
				</p>
				<p style="margin-bottom: 10px;">
					<?php echo form_error("password_confirm","<font size=5px; class='font_error' color='error'>","</font>");?></br>
					<!-- <label class="row-label" for="password_confirm" style="margin-right:30px;">รหัสผ่าน : </label>  -->
					<input placeholder="ยืนยัน รหัสผ่าน" type="password" name="password_confirm" value="" id="password_confirm" class="form-control" size="40"/>
				</p>
			<p>
			<br>
			<button type="submit" class="btn btn-default" id="submit" style="margin-right: 7px;">สมัคร</button>
			<button type="reset" class="btn btn-warning" id="reset">ตั้งค่าเริ่มต้น</button>
			</p>
		<?php echo form_close(); ?>
		</div>
	</div>
</div>
