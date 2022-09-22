<?php include('includes/session.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">User Login</h1>
				<p class="lead">Please login with your User Name and Password</p><br />
				<div class="w-75 p-3 mx-auto">
					<form method="post">
						<label>User Name</label>
						<input type="text" class="form-control" name="usrName" placeholder="User Name"><br />
						<label>Password</label>
						<input type="password" class="form-control" name="usrPassword" placeholder="Password"><br />
						<input type="submit" class="btn btn-dark btn-outline-light" name="login" value="Login" />
						<?php include('plugins/login.user.php'); ?>
					</form>
				</div>
				<div style="height: 200px"></div>
			</div>
		</div>
	</div>
</body>