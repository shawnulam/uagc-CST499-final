<?php include('includes/session.admin.php'); ?>

<?php require_once('db.php'); ?>

<?php
	// Request array from database
	$db = new db();
	$dataSet = $db->executeClassSelect();
	// List Classes for Edit
	foreach ($dataSet as $data)
    {
		echo "<tr class='text-light'>";
		echo "<td><input type=\"submit\" class=\"btn btn-xs btn-dark btn-outline-light\" name=\"editButton\" value=".$data->getcrsIDCode()." /></td>";
		echo "<td>".$data->getcrsName()."</td>";
		echo "<td>".$data->getcrsInstructor()."</td>";
		echo "<td>".$data->getcrsSemester()."</td>";
		echo "<td>".$data->getcrsDescription()."</td>";
		echo "</tr>";
	}
?>