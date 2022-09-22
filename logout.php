<?php include('includes/session.user.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">Logout</h1>
				<div style="height: 25px"></div>
					<p class="lead">Please choose logout if you would like to end your Employee Portal session</p><br />
					<form method="post">
						<button type="submit" name="submit" class="btn btn-dark">Logout</button>
					<?php include('plugins/session.clear.php'); ?>
					</form>
				<div style="height: 300px"></div>
			</div>
		</div>
	</div>
</body>