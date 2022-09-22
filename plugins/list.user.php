<?php include('includes/session.admin.php'); ?>

<?php require("db.php"); ?>

<?php
	// Request array from database
	$db = new db();
	$dataSet = $db->executeUserSelect();
	// List users that have the admin flag changes so only admins are shown
	foreach ($dataSet as $data)
    {
		echo "<tr class='text-light'>";
		echo "<td>".$data->getusrFirstName()."</td>";
		echo "<td>".$data->getusrLastName()."</td>";
		echo "<td><input type=\"submit\" class=\"btn btn-xs btn-dark btn-outline-light\" name=\"usrButton\" value=".$data->getusrEmail()." /></td>";
		echo "</tr>";
	}
?>