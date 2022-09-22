<?php include('includes/session.user.php'); ?>

<?php require_once('db.php'); ?>

<?php
	// Check if form submitted
	if(isset($_POST['addButton']))
    {
		// Build array with input to pass to function for update
		$arrayAddCourse = array($_SESSION['username'], $_POST['crsIDCode']);
		
		try
        {
				// Update data in database
				//$db = new db();
				$addclass = $db->executeAddSchedule($arrayAddCourse);
				// Output text for successful update
				echo "<div id=\"dialog-message\" title=\"Complete\">";
				echo "<p>The course has been added to your schedule</p>";
				echo "</div>";
				// Catch error codes from failed update
		}
        catch (PDOException $e)
        {
				// Show error message if failure to update database
				echo "<div id=\"dialog-message\" title=\"Incomplete\">";
				echo "<p>Course addition was not possible. Please contact support</p>";
				echo "</div>";
		}
	}
	
	// Check if form submitted
	if(isset($_POST['dropButton']))
    {
		// Build array with input to pass to function for update
		$arrayDelCourse = array($_SESSION['username'], $_POST['crsIDCode']);
		
		try
        {
				// Update data in database
				//$db = new db();
				$delclass = $db->executeSchedDelete($arrayDelCourse);
				// Output text for successful update
				echo "<div id=\"dialog-message\" title=\"Complete\">";
				echo "<p>The course has been removed from your schedule</p>";
				echo "</div>";
				// Catch error codes from failed update
		}
        catch (PDOException $e)
        {
				// Show error message if failure to update database
				echo "<div id=\"dialog-message\" title=\"Incomplete\">";
				echo "<p>Course removal was not possible. Please contact support</p>";
				echo "</div>";
		}
	}
?>