<?php include('includes/session.admin.php'); ?>

<?php
	// Check if form submitted
	if(isset($_POST['upduser']))
    {
		// Ensure same password has been entered for both options
		if ($_POST['password1'] === $_POST['password2'])
        {
			// Check if password has been entered for update
			if (!empty($_POST['password1']))
            {
				$usrPassword = password_hash($_POST['password1'], PASSWORD_DEFAULT);
			}
			// Check if user is an Instructor
			if ($_POST['usrInstructor'] == 'profile')
            {
				$usrInstructor = $usrInstructor;
			}
            elseif ($_POST['usrInstructor'] == 'on')
            {
				$usrInstructor = '1';
			}
            else
            {
				$usrInstructor = null;
			}
			// Check if user has been granted admin access
			if ($_POST['usrAdmin'] == 'profile')
            {
				$usrAdmin = $usrAdmin;
			}
            elseif ($_POST['usrAdmin'] == 'on')
            {
				$usrAdmin = '1';
			}
            else
            {
				$usrAdmin = null;
			}
			// Build array with input to pass to function for update
			$arrayAdm = array($_POST['usrFirstName'], $_POST['usrLastName'], $_POST['usrEmail'],
			$_POST['usrAddress'], $_POST['usrCity'], $_POST['usrState'], $_POST['usrZip'],
            $usrPassword, $usrAdmin, $usrInstructor, $_POST['usrName'],);
			try
            {
				// Update data in database
				// new dbuser() called by profile.user.php
				// $dbuser = new dbuser();
				$dataAdm = $db->executeAdmin($arrayAdm);
				// Output text for successful update
				echo "<div id=\"dialog-message\" title=\"Complete\">";
				echo "<p>The user's profile has been updated successfully</p>";
				echo "</div>";
				// Catch error codes from failed update
			}
            catch (PDOException $e)
            {
				// Show error message if failure to update database
				echo "<div id=\"dialog-message\" title=\"Incomplete\">";
				echo "<p>Profile update was not possible. Please check entries</p>";
				echo "</div>";
			}
		}
        else
        {
			// Error message if passwords do not match
			echo "<div id=\"dialog-message\" title=\"Password Failure\">";
			echo "<p>Passwords do not match. Please try again.</p>";
			echo "</div>";
		}
	}
	// Check if remove image button used
	if(isset($_POST['remove']))
    { 
		// Build array with input to pass to function for update
		$arrayImg = array(null, $_POST['usrName'],);
         
		try
        {
			// Update data in database
			$removeImage = $db->executeImage($arrayImg); 
			// Output text for successful image reset to default
			echo "<div id=\"dialog-message\" title=\"Complete\">";
			echo "<p>The image has been removed</p>";
			echo "</div>";
		}
        catch (PDOException $e)
        {
			// Show error message if failure to reset image
			echo "<div id=\"dialog-message\" title=\"Incomplete\">";
			echo "<p>Unable to remove the image. Please attempt again or contact support</p>";
			echo "</div>";
		}
	}
	// Check if delete user button was used
	if(isset($_POST['delete']))
    { 
		try
        {
			// Delete user from database
			$deleteUser = $db->executeUserDelete($_POST['usrName']); 
			// Output text for successful image reset to default
			echo "<div id=\"dialog-message\" title=\"Complete\">";
			echo "<p>The user has been deleted from the system</p>";
			echo "</div>";
		}
        catch (PDOException $e)
        {
			// Show error message if failure to reset image
			echo "<div id=\"dialog-message\" title=\"Incomplete\">";
			echo "<p>Unable to delete user. Please attempt again or contact support</p>";
			echo "</div>";
		}
	}
?>