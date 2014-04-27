<div class="jumbotron" style="margin-top: 51px;">
	<div class="container">
		<h1>Bookshelves</h1>
		<p>Admin Panel</p>
		<!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p> -->
  </div>
</div>

<div class="row">
	<div class="container">
		<h2>New Releases</h2>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">New Releases Shelf</div>
			<!-- <div class="panel-body">
				test
			</div> -->
			<table class="table">
				<thead>
					<tr>
						<th>Book ID</th>
						<th>Book Name</th>
						<!-- <th>Type</th> -->
						<!-- <th>Order</th> -->
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($new_releases as $nr) { ?>
						<tr>
							<td><?php echo $nr['book_id']; ?></td>
							<td><?php echo $nr['book_name']; ?></td>
							<!-- <td><?php if ($nr['type'] == 1) { echo 'new release'; } ?></td> -->
							<!-- <td>
								<?php echo form_open(); ?>
									<div class="form-group">
										<input type="text" class="form-control" name="new_release_order" value="<?php echo $nr['new_release_order']; ?>" style="width: 50px;"></input>
										<button type="submit" class="btn btn-sm btn-primary">Save</button>
									</div>
								<?php echo form_close(); ?>
							</td> -->
							<td>
								<?php echo form_open('admin_c/remove_new_release'); ?>
									<div style="display: none;"><input name="book_id" value="<?php echo $nr['book_id']; ?>"></input></div>
									<button type="submit" class="btn btn-sm btn-danger">Remove</button>
								<?php echo form_close(); ?>
							</td>
						<tr>
					<? } ?>
				</tbody>	
			</table>
		</div>
		<h4>เพิ่มหนังสือใหม่</h4>
		<br>
		<?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open_multipart("admin_c/add_new_release", $attributes);
		?>
			<div class="form-group">
				<label for="series" class="col-sm-2 control-label">Books</label>
				<div class="col-sm-10">
					<select class="form-control" name="book_id">
						<option>-- เลือกหนังสือ --</option>
						<?php foreach($bookshelves as $book) { 
							if ($book['type'] != 1) { ?>
								<option value="<?php echo $book['book_id'];?>"><?php echo $book['book_name'];?></option>
							<? }
						} ?>
					</select>
					<!-- <input class="form-control" id="series" name="series" type="text"></input> -->
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
		<h2>All Books</h2>
		<br>
		<?php echo form_open('admin_c/change_order'); ?>
		<div class="panel panel-default">
			<div class="panel-heading">All Books Shelf</div>
			<!-- <div class="panel-body">
				test
			</div> -->
			<table class="table">
				<thead>
					<tr>
						<th>Book ID</th>
						<th>Book Name</th>
						<!-- <th>Type</th> -->
						<th>Order</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						foreach ($bookshelves as $bs) { ?>
						<tr>
							<td><?php echo $bs['book_id']; ?></td>
							<td><?php echo $bs['book_name']; ?></td>
							<!-- <td><?php echo $bs['type']; ?></td> -->
							<td>
								<div style="display: none;"><input name="book_id_<?php echo $i; ?>" value="<?php echo $bs['book_id']; ?>"></input></div>
								<input class="form-control" name="book_order_<?php echo $i; ?>" type="text" value="<?php echo $bs['book_order']; ?>"></input>
							</td>
						<tr>
					<?  $i++;
					} ?>
				</tbody>
			</table>
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
		<?php echo form_close(); ?>	
	</div>
</div>

<br><br><br>
