<?php include('includes/session.instructor.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-2 bg-dark text-light">
				<h1 class="fw-light">Class Schedule</h1>
				<div style="height: 25px"></div>
				<p class="lead">Select the Class ID to see enrolled students</p><br />
				<table class="table">
					<thead style="position: sticky;top: 0" class="thead-dark border-bottom text-light">
						<tr class='text-light text-center'>
							<th class="header" scope="col">Class ID</th>
							<th class="header" scope="col">Class Name</th>
							<th class="header" scope="col">Semester</th>
							<th class="header" scope="col">Weekdays</th>
							<th class="header" scope="col">Start Time</th>
							<th class="header" scope="col">End Time</th>
						</tr>
					</thead>
					<form action="index.php?page=editclassroom" method="post">
					<tbody class="border-0">
						<?php include('plugins/list.classroom.php'); ?>
					</tbody>
					</form>
				</table>
				<div style="height: 350px"></div>
			</div>
		</div>
	</div>
</body>