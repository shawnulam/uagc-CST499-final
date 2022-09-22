<?php include('includes/session.admin.php'); ?>

<?php require_once('db.php'); ?>

<?php
	// Request array from database
	if (!$db) {
		$db = new db();
	}

	$dataSet = $db->executeUserSelect();
	// List users that have the admin flag changes so only admins are shown
	foreach ($dataSet as $data)
	{
		if(!is_null($data->getInstructor()))
		{
			if ($data->getusrName() == $crsInstructor)
			{
				echo "<option value=\"".$data->getusrName()."\" selected>".$data->getusrName()."</option>";
			}
			else
			{
				echo "<option value=\"".$data->getusrName()."\">".$data->getusrName()."</option>";
			}
		}
	}
?>
