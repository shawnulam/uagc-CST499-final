<?php include('includes/session.php'); ?>

<?php require("db.php"); ?>

<?php
	// Request array from database
	$db = new db();
	$dataSet = $db->executeUserSelect();
	// List users that have the admin flag changes so only admins are shown
	foreach ($dataSet as $data)
    {
		if(!is_null($data->getusrAdmin()))
        {
			echo "<tr class='text-light'>";
			echo "<td>".$data->getusrFirstName()."</td>";
			echo "<td>".$data->getusrLastName()."</td>";
			echo "<td class='text-light'><a href=\"mailto:".$data->getusrEmail()."\" class=\"link-light\">".$data->getusrEmail()."</a></td>";
			echo "</tr>";
		}
	}
?>