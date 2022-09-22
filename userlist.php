<?php include('includes/session.admin.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">User List</h1>
				<div style="height: 25px"></div>
				<p class="lead">Select a user to modify user details</p><br />
				<table class="table">
					<thead style="position: sticky;top: 0" class="thead-dark border-bottom text-light">
						<tr>
							<th class="header" scope="col">First Name</th>
							<th class="header" scope="col">Last Name</th>
							<th class="header" scope="col">Email</th>
						</tr>
					</thead>
					<form action="index.php?page=userupdate" method="post">
					<tbody class="border-0">
						<?php include('plugins/list.user.php'); ?>
					</tbody>
					</form>
				</table>
				<div style="height: 350px"></div>
			</div>
		</div>
	</div>
</body>