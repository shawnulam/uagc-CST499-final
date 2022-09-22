<?php include('includes/session.php'); ?>

!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">Contact Us</h1>
                <br />
                <p class="lead">Please contact the admin using the information below</p><br />
				<table class="table">
					<thead style="position: sticky;top: 0" class="thead-dark border-bottom text-light">
						<tr>
							<th class="header" scope="col">First Name</th>
							<th class="header" scope="col">Last Name</th>
							<th class="header" scope="col">Email</th>
						</tr>
					</thead>
					<tbody class="border-0">
                    <?php include('plugins/list.contact.php'); ?>
					</tbody>
				</table>
				<div style="height: 350px"></div>
			</div>
		</div>
	</div>
</body>