<?php include('includes/session.php'); ?>

<?php
	// Database login information
	$dbType = 'MySQL';
	$dbHost = 'localhost';
	$dbUser = 'uugc';
	$dbPass = 'dbpasswordhere';
	$dbName = 'uugc';
	$dbOpts = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,);
?>