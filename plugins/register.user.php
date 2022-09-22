<?php include('includes/session.php'); ?>

<?php require("db.php"); ?>

<?php
	if(isset($_POST['register']))
    {
		if ($_POST['password1'] === $_POST['password2'])
        {
			// Validate password strength
			$upper = preg_match('@[A-Z]@', $_POST['password1']);
			$lower = preg_match('@[a-z]@', $_POST['password1']);
			$number    = preg_match('@[0-9]@', $_POST['password1']);
			$special = preg_match('@[^\w]@', $_POST['password1']);
			if(!$upper || !$lower || !$number || !$special || strlen($_POST['password1']) < 8)
            {
				// Error message if password doesnt meet requirements
				echo "<div id=\"dialog-message\" title=\"Password Failure\">";
				echo "<p>Please ensure password contains Uppercase, Lowercase, Number, and Special Characters.</p>";
				echo "</div>";
			}
            else
            {
				$password = $_POST['password1'];
				$hash = password_hash($password, PASSWORD_DEFAULT);
				
				// Build array with input to pass to function
				$arrayReg = array($_POST['usrName'], $_POST['usrFirstName'], $_POST['usrLastName'],
                $_POST['usrEmail'],	$_POST['usrAddress'],	$_POST['usrCity'],	$_POST['usrState'],
                $_POST['usrZip'], $hash);
				
				try
                {
					// Insert data into database
					$db = new db();
					$dataSet = $db->executeRegister($arrayReg);
					// Output text for successful insert
					echo "<div id=\"dialog-message\" title=\"Complete\">";
					echo "<p>Thank you for registering on the Employee Portal</p>";
					echo "</div>";
					// Catch error odes from failed insert
				}
                catch (PDOException $e)
                {
					// Show error message if failure to input to database
					echo "<div id=\"dialog-message\" title=\"Incomplete\">";
					echo "<p>Registration failed. Please attempt again or contact support</p>";
					echo "</div>";
				}
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