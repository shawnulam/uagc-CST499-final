<?php
    // Disable non admin users
	include('includes/session.php');
	if(is_null($_SESSION['username'])) {
		// Change header
		header("Location: /");
		// Kill the rest of the page
		die();
		}
?>