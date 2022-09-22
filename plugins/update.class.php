<?php include('includes/session.admin.php'); ?>

<?php
	// Update class
	if(isset($_POST['updateClass']))
    {
		// Weekday tinyint settings for checkboxes
		if ($_POST['crsMon'] == 'on') {
			$crsMon = '1';
		} else {
			$crsMon = null;
		}
        
		if ($_POST['crsTues'] == 'on') {
			$crsTues = '1';
		} else {
			$crsTues = null;
		}
        
		if ($_POST['crsWed'] == 'on') {
			$crsWed = '1';
		} else {
			$crsWed = null;
		}
        
		if ($_POST['crsThurs'] == 'on') {
			$crsThurs = '1';
		} else {
			$crsThurs = null;
		}
        
		if ($_POST['crsFri'] == 'on') {
			$crsFri = '1';
		} else {
			$crsFri = null;
		}
		
		// Build array with input to pass to function for update
		$arrayUpdateClass = array($_POST['crsIDCode'], $_POST['crsName'], $_POST['crsInstructor'],
		$_POST['crsDescription'], $_POST['crsSemester'], $_POST['crsStartTime'], $_POST['crsEndTime'],
		$crsMon, $crsTues, $crsWed, $crsThurs, $crsFri,);
		try
        {
				// Update data in database
				//$dbclass = new dbclass();
				$updateClass = $db->executeUpdateClass($arrayUpdateClass);
				// Output text for successful update
				echo "<div id=\"dialog-message\" title=\"Complete\">";
				echo "<p>The class has been updated successfully</p>";
				echo "</div>";
				// Catch error codes from failed update
		}
        catch (PDOException $e)
        {
				// Show error message if failure to update database
				echo "<div id=\"dialog-message\" title=\"Incomplete\">";
				echo "<p>Class update was not possible. Please check entries</p>";
				echo "</div>";
		}
	}
    
    // Delete class
	if(isset($_POST['deleteClass']))
    {
		try
        {
				// Update data in database
				// $db = new db();
				$deleteClass = $db->executeClassDelete($_POST['crsIDCode']);
				// Output text for successful update
				echo "<div id=\"dialog-message\" title=\"Complete\">";
				echo "<p>The class has been removed from the database</p>";
				echo "</div>";
				// Catch error codes from failed update
		}
        catch (PDOException $e)
        {
				// Show error message if failure to update database
				echo "<div id=\"dialog-message\" title=\"Incomplete\">";
				echo "<p>Class removal was not possible. Please check entries</p>";
				echo "</div>";
		}
	}

?>