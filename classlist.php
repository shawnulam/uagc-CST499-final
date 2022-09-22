<?php include('includes/session.admin.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">Class List</h1>
				<div style="height: 25px"></div>
				<p class="lead">Select a class to edit</p><br />
				<table class="table">
					<thead style="position: sticky;top: 0" class="thead-dark border-bottom text-light">
						<tr>
							<th class="header" scope="col">Class ID</th>
							<th class="header" scope="col">Class Name</th>
							<th class="header" scope="col">Instructor</th>
							<th class="header" scope="col">Semester</th>
							<th class="header" scope="col">Description</th>
						</tr>
					</thead>
					<form action="index.php?page=classupdate" method="post">
					<tbody class="border-0">
						<?php include('plugins/list.class.php'); ?>
					</tbody>
					</form>
				</table>
				<div style="height: 350px"></div>
			</div>
		</div>
	</div>
</body>