<?php include('includes/session.admin.php'); ?>

<?php include('plugins/profile.user.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<div class="row">
					<div class="col">
						<h1 class="fw-light">Profile</h1><br />
						<p class="lead">Please provide any updated information</p>
					</div>
					<div class="col-2">
						<?php include('includes/profile.image.php'); ?>
						<p class="text-center fs-6">
							<small id="defaultImage" class="form-text text-muted">User Image</small></p>
					</div>
				</div>	
				<br />
					<!-- Input form -->
					<form method="post">
						<div class="w-75 p-3 mx-auto">
						<div class="row">
							<div class="col">
								<label>User Name</label>
								<input type="text" class="form-control" name="usrName" value="<?=$usrName?>" />
							</div>
							<div class="col">
							<div class="col custom-control custom-switch"><br />
								<input type="checkbox" class="custom-control-input" id="usrAdmin"
								name='usrAdmin' <?php echo $checked_admin; ?>>
								<label class="custom-control-label"
								for="usrAdmin">Administrator</label>
							</div>
							<div class="col custom-control custom-switch"><br />
								<input type="checkbox" class="custom-control-input" id="usrInstructor" 
								name='usrInstructor' <?php echo $checked_inst; ?>>
								<label class="custom-control-label"
								for="usrInstructor">Instructor</label>
							</div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-6">
								<label>Address</label>
								<input type="text" class="form-control"  name="usrAddress" value="<?=$usrAddress?>" />
							</div>
							<div class="col-2">
								<label>City</label>
								<input type="text" class="form-control"  name="usrCity" value="<?=$usrCity?>" />
							</div>
							<div class="col-2">
								<label>ST</label>
								<input type="text" class="form-control"  name="usrState" value="<?=$usrState?>" />
							</div>
							<div class="col-2">
								<label>Zip</label>
								<input type="text" class="form-control"  name="usrZip" value="<?=$usrZip?>" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>First Name</label>
								<input type="text" class="form-control"  name="usrFirstName" value="<?=$usrFirstName?>" />
							</div>
							<div class="col">
								<label>Last Name</label>
								<input type="text" class="form-control"  name="usrLastName" value="<?=$usrLastName?>" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Email Address</label>
								<input type="email" class="form-control" name="usrEmail" value="<?=$usrEmail?>" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Password</label>
								<input type="password" class="form-control"  name="password1" placeholder="Password" />
							</div>
							<div class="col">
								<label>Re-Enter Password</label>
								<input type="password" class="form-control"  name="password2" placeholder="Password" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<input type="submit" class="btn btn-dark btn-outline-light" name="upduser" value="Update User" />
							</div>
							<div class="col">
								<input type="submit" class="btn btn-dark btn-outline-light" name="delete" value="Delete User" />
							</div>
							<div class="col">
								<input type="submit" class="btn btn-dark btn-outline-light" name="remove" value="Delete Profile Image" />
							</div>
						</div>						
						<?php include('plugins/update.user.php'); ?>
						</div>
					</form>
				<div style="height: 30px"></div>
				</div>
			</div>
		</div>
	</div>
</body>	