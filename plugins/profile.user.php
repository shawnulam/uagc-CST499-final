<?php include('includes/session.user.php'); ?>

<?php require_once("db.php"); ?>

<?php
	// Request array from database
	$db = new db();
	$dataSet = $db->executeUserSelect();
	// List users that have the admin flag changes so only admins are shown
	foreach ($dataSet as $data)
    {
		if($_POST['usrButton'] == $data->getusrEmail() OR $_SESSION['username'] == $data->getusrName())
        {
			$usrName = $data->getusrName();
			$usrFirstName = $data->getusrFirstName();
			$usrLastName = $data->getusrLastName();
			$usrEmail = $data->getusrEmail();
			$usrAddress = $data->getusrAddress();
			$usrCity = $data->getusrCity();
			$usrState = $data->getusrState();
			$usrZip = $data->getusrZip();
			$usrPassword = $data->getPassword();
			$usrAdmin = $data->getusrAdmin();
			$usrInstructor = $data->getInstructor();
			$usrImage = $data->getusrImage();
		}
	}
	
	// Set check active if user is an admin, status = 1 (on)
	if ($usrAdmin)
    {
		$checked_admin = "checked";
	}
    else
    {
		$checked_admin = "";
	}

	// Set check authorized to use system, status = 1 (on)
	if ($usrInstructor)
    {
		$checked_inst = "checked";
	}
    else
    {
		$checked_inst = "";
	}
?>