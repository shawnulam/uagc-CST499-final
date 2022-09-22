<?php include('includes/session.instructor.php'); ?>

<?php
	// Check if form submitted
	if(isset($_POST['dropClass']))
	{
		// Build array with input to pass to function for update
		$arrayDelCourse = array($_POST['usrName'], $_POST['crsIDCode']);

		try
		{
			// Update data in database
			// $db = new db();
			$dataSet = $db->executeSchedDelete($arrayDelCourse);
			// Output text for successful update
			echo "<div id=\"dialog-message\" title=\"Complete\">";
			echo "<p>The user has been dropped successfully</p>";
			echo "</div>";
			// Catch error codes from failed update
		}
		catch (PDOException $e)
		{
			// Show error message if failure to update database
			echo "<div id=\"dialog-message\" title=\"Incomplete\">";
			echo "<p>User removal was not possible. Please contact support</p>";
			echo "</div>";
		}
	}
?>