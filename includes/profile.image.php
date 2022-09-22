<?php include('includes/session.user.php'); ?>

<?php
	// Test if image exists in database. Use default if user has not inserted one
	if(is_null($usrImage)) {
		echo "<img src=\"images/default.jpg\" id=\"defaultImage\" class=\"img-thumbnail img-responsive\" />";
	} else {
		// Encode image from Long Blob database entry for user
		echo "<img src=\"data:image/jpeg;base64,".base64_encode($usrImage)."\" class=\"img-thumbnail img-responsive\" />";
	}
?>