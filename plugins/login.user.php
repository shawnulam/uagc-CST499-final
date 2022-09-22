<?php include('includes/session.php'); ?>

<?php require("db.php"); ?>

<?php
	if(isset($_POST['login']))
    {
		// Test if input is empty
		$userCheck = !empty($_POST['usrName']) ? trim($_POST['usrName']) : null;
		$passCheck = !empty($_POST['usrPassword']) ? trim($_POST['usrPassword']) : null;
		// Get information from database
		$db = new db();
		$dataSet = $db->executeUserSelect();
		// List users that have the admin flag changes so only admins are shown
		foreach ($dataSet as $data)
        {
			if($userCheck == $data->getusrName())
            {
                $username = $data->getusrName();
				$password = $data->getPassword();
				$admin = $data->getusrAdmin();
				$instructor = $data->getInstructor();
		
                $validPass = password_verify($passCheck, $password);
		
                if($validPass)
                {
                    // Valid password. Set session handler
                    $_SESSION['username'] = htmlentities($userCheck);
                    $_SESSION['admin'] = $admin;
                    $_SESSION['instructor'] = $instructor;
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?page=home\">";
                }
                else
                {
                    // Invalid login message
                    echo "<div id=\"dialog-message\" title=\"Wrong Password\">";
                    echo "<p>Password is not valid. Please try again or contact helpdesk</p>";
                    echo "</div>";
                }
            }
        }
    }
?>

