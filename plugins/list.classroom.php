<?php include('includes/session.instructor.php'); ?>

<?php require_once('db.php'); ?>

<?php

	$db = new db();
	$dataSet = $db->executeClassSelect();

	foreach ($dataSet as $data)
	{
		if ($data->getcrsInstructor() == $_SESSION['username'])
		{
			if (!is_null($data->getcrsMon()))
			{
				$mon = "Mon ";
			}
			else
			{
				$mon = "";
			}
			
			if (!is_null($data->getcrsTues()))
			{
				$tues = "Tues ";
			}
			else
			{
				$tues = "";
			}
			
			if (!is_null($data->getcrsWed()))
			{
				$wed = "Wed ";
			}
			else
			{
				$wed = "";
			}
			
			if (!is_null($data->getcrsThurs()))
			{
				$thur = "Thur ";
			}
				else
			{
				$thur = "";
			}
			
			if (!is_null($data->getcrsFri()))
			{
				$fri = "Fri ";
			}
			else
			{
				$fri = "";
			}
			

			echo "<tr class='text-light text-center'>";
			echo "<td><input type=\"submit\" class=\"btn btn-xs btn-dark btn-outline-light\" name=\"editButton\" value=".$data->getcrsIDCode()." /></td>";
			echo "<td>".$data->getcrsName()."</td>";
			echo "<td>".$data->getcrsSemester()."</td>";
			echo "<td>".$mon.$tues.$wed.$thur.$fri."</td>";
			echo "<td>".date("g:i a", strtotime($data->getcrsStartTime()))."</td>";
			echo "<td>".date("g:i a", strtotime($data->getcrsEndTime()))."</td>";
			echo "</tr>";
		}
	}
?>