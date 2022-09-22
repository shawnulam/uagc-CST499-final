<?php include('includes/session.instructor.php'); ?>

<?php require_once("db.php"); ?>

<?php
	// Request array from database
	$db = new db();
	$dataSet = $db->executeInstructorClass($_POST['editButton']);

	// List users that have the admin flag changes so only admins are shown
	foreach ($dataSet as $data)
    {
		echo "<tr class='text-light text-center'>";
		echo "<td><input type=\"submit\" class=\"btn btn-xs btn-dark btn-outline-light\" name=\"dropStudent\" value=".$data->getusrName()." /></td>";
		echo "<td>".$data->getusrFirstName()."</td>";
		echo "<td>".$data->getusrLastName()."</td>";
		echo "<input type=\"hidden\" class=\"form-control\" id=\"crsIDCode\" name=\"crsIDCode\" value=".$_POST['editButton']." />";
		echo "</tr>";
	}
?>