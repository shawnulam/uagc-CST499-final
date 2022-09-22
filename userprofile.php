<?php include('includes/session.user.php'); ?>

<?php include('plugins/profile.user.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<div class="row">
					<div class="col">
						<h1 class="fw-light">User Profile</h1><br />
						<p class="lead">Please provide any updated information</p>
					</div>
					<div class="col-2">
						<a href="index.php?page=userimage">
							<?php include('includes/profile.image.php'); ?>
						</a>
						<p class="text-center fs-6">
							<small id="defaultImage" class="form-text text-muted">Click to Change</small></p>
					</div>
				</div>	
				<br />
					<!-- Input form -->
					<form method="post">
						<div class="w-75 p-3 mx-auto">
						<div class="row">
							<div class="col">
								<label>User Name</label>
								<input type="text" readonly class="form-control" name="usrName" value="<?=$usrName?>" />
							</div>
							<div class="col">
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
							</div>
							<div class="col"></div>
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
								<label>State</label>
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
								<input type="text" readonly class="form-control"  name="usrFirstName" value="<?=$usrFirstName?>" />
							</div>
							<div class="col">
								<label>Last Name</label>
								<input type="text" readonly class="form-control"  name="usrLastName" value="<?=$usrLastName?>" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Email Address</label>
								<input type="email" class="form-control" name="usrEmail" value="<?=$usrEmail?>" />
							</div>
							<div class="col">
								<input type="hidden" class="form-control" id="usrAdmin" name="usrAdmin" value="profile" />
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
						<div class="row">
							<div class="col">
								<small id="passwordHelpBlock" class="form-text text-muted">
									Your password must be 8-20 characters long, contain upper and lowercase letters, numbers, and special characters.
								</small>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<input type="submit" class="btn btn-dark btn-outline-light" name="upduser" value="Update Profile" />
							</div>
						</div>						
						<?php include('plugins/update.profile.php'); ?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>	