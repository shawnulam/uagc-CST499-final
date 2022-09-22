<?php include('includes/session.instructor.php'); ?>

<?php include('plugins/profile.drop.php'); ?>

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
						<?php include('includes/profile.image.php'); ?>
					</div>
				</div>	
				<br />
					<!-- Input form -->
					<form method="post">
						<div class="w-75 p-3 mx-auto">
						<div class="row">
							<div class="col">
								<label>User Name</label>
								<input type="text" readonly class="form-control" name="usrName" value="<?=$usrName?>" readonly />
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
							<div class="col">
								<label>First Name</label>
								<input type="text" readonly class="form-control"  name="usrFirstName" value="<?=$usrFirstName?>" readonly />
							</div>
							<div class="col">
								<label>Last Name</label>
								<input type="text" readonly class="form-control"  name="usrLastName" value="<?=$usrLastName?>" readonly />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Email Address</label>
								<input type="email" class="form-control" name="usrEmail" value="<?=$usrEmail?>" readonly />
							</div>
							<div class="col">
								<input type="hidden" class="form-control" id="usrAdmin" name="usrAdmin" value="profile" />
								<input type="hidden" class="form-control" id="crsIDCode" name="crsIDCode" value="<?=$crsIDCode?>" />
							</div>
						</div>
						<br />
						<br />
						<div class="row">
							<div class="col">
								<input type="submit" class="btn btn-dark btn-outline-light" name="dropClass" value="Drop Student" />
							</div>
						</div>						
						<?php include('plugins/drop.user.php'); ?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>	