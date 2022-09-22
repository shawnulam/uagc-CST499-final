<?php include('includes/session.user.php'); ?>

<?php include('plugins/profile.user.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">Profile Image</h1>
				<div style="height: 25px"></div>
				<p class="lead">Images must be less than 128kb and formatted as PNG, JPG, or GIF for upload.</p><br />
				<form method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col">
							<label>Select Image File:</label>
							<br /><br /><input id="image" type="file" class="btn btn-dark" name="usrImage">
						</div>
						<div class="col">
							<label></label>
							<br /><br /><input type="submit" class="btn btn-dark btn-outline-light" name="submit" value="Upload">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<br /><br /><label>Delete Current Profile Image</label>
							<br /><br /><input type="submit" class="btn btn-dark btn-outline-light" name="remove" value="Delete">
						</div>
						<div class="col-2">
							<?php include('includes/profile.image.php'); ?>
						</div>
					</div>
					<?php include('plugins/insert.image.php'); ?>
				</form>
				<div style="height: 400px"></div>
			</div>
		</div>
	</div>
</body>