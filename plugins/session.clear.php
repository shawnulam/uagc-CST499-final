<?php include('includes/session.user.php'); ?>

<?php
	if(isset($_POST['submit']))
    {
		// Remove session variables
		session_start();
		session_unset();
		session_destroy();
        // Reload home page
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?page=home\">";
	}
?>