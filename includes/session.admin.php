<?php
    // Disable non admin users
	include('includes/session.user.php');
	if(is_null($_SESSION['admin'])) {
		// Change header
		header("Location: /");
		// Kill the rest of the page
		die();
	}
?>