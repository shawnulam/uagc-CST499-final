<?php
    // Disable non admin users
	include('includes/session.user.php');
	if(is_null($_SESSION['instructor'])) {
		// Change header
		header("Location: /");
		// Kill the rest of the page
		die();
	}
?>