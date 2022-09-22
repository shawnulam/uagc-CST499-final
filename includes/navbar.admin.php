<?php include('includes/session.admin.php'); ?>

<!-- Navigation Bar as default-->
<nav class="navbar navbar-expand-lg navbar-dark">
	<div class="logo"></div>
	<button class="navbar-toggler m-3 outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#defNavbar">
		<a class="btn btn-dark" role="button">Menu</a>
	</button>
	<div class="container-fluid">
		<div class="d-flex flex-grow-1">
			<span class="w-100 d-lg-none d-block"></span>
			<a class="navbar-brand d-none d-lg-inline-block" href="https://uugc.ulam.club/"><h1>UUGC Class Enrollment</h1></a>
			<div class="text-right"></div>
		</div>
		<div class="collapse navbar-collapse flex-grow-1 text-right" id="defNavbar">
			<ul class="navbar-nav ms-auto flex-nowrap">
				<li class="nav-item">
					<a href="index.php?page=home" class="nav-link m-2 menu-item nav-active">Home</a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=logout" class="nav-link m-2 menu-item nav-active">Logout</a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=addclass" class="nav-link m-2 menu-item nav-active">Add Class</a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=classlist" class="nav-link m-2 menu-item nav-active">List Classes</a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=userlist" class="nav-link m-2 menu-item nav-active">User List</a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=userprofile" class="nav-link m-2 menu-item nav-active">Profile</a>
				</li>
			</ul>
		</div>
	</div>
</nav>