<?php include('includes/session.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">User Registration</h1>
				<div class="w-75 p-3 mx-auto">
					<!-- Input form -->
					<form method="post">
						<div class="row">
							<div class="col">
								<label>First Name</label>
								<input type="text" class="form-control" name="usrFirstName" placeholder="First Name" />
							</div>
							<div class="col">
								<label>Last Name</label>
								<input type="text" class="form-control" name="usrLastName" placeholder="Last Name" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-6">
								<label>Address</label>
								<input type="text" class="form-control"  name="usrAddress" placeholder="Address" />
							</div>
							<div class="col-2">
								<label>City</label>
								<input type="text" class="form-control"  name="usrCity" placeholder="City" />
							</div>
							<div class="col-2">
								<label>State</label>
								<input type="text" class="form-control"  name="usrState" placeholder="ST" />
							</div>
							<div class="col-2">
								<label>Zip</label>
								<input type="text" class="form-control"  name="usrZip" placeholder="Zip" />
							</div>
						</div>
						<br />
						<label>Email Address</label>
						<input type="email" class="form-control" name="usrEmail" placeholder="Email" />
						<br />
						<div class="row">
							<div class="col">
								<label>User Name</label>
								<input type="text" class="form-control" name="usrName" placeholder="username" />
							</div>
							<div class="col">
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
						<input type="submit" class="btn btn-dark btn-outline-light" name="register" value="Register" />
						<?php include('plugins/register.user.php'); ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>