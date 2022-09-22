<?php include('includes/session.user.php'); ?>

<?php
	// Check if form submitted
	if(isset($_POST['upduser']))
	{
		// Ensure same password has been entered for both options
		if ($_POST['password1'] === $_POST['password2'])
		{
			// Check if password has been entered for update
			if (!empty($_POST['password1'])) {
				$usrPassword = password_hash($_POST['password1'], PASSWORD_DEFAULT);
			}
			// Build array with input to pass to function for update
			$arrayUsr = array($_POST['usrEmail'], $_POST['usrAddress'],
			$_POST['usrCity'], $_POST['usrState'], $_POST['usrZip'], $usrPassword, $usrName,);
			try
			{
				// Update data in database
				// new db() called by profile.user.php
				// $db = new db();
				$dataAdm = $db->executeUserUpdate($arrayUsr);
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
?>