<?php
	// Set index.php to only file that can open embedding each other page inside to limit access
	define('myCon', TRUE);
	include('includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Include header
<?php include('includes/header.php'); ?>
		
        <!-- Check if user logged in to provide correct navbar -->
<?php
    if (isset($_SESSION['username']))
    {
        if (!is_null($_SESSION['admin']))
        {
            include('includes/navbar.admin.php');
        }
        else if (!is_null($_SESSION['instructor']))
        {
            include('includes/navbar.instructor.php');
        }
        else
		{
            include('includes/navbar.user.php');
        }
    }
    else
    {
        include('includes/navbar.default.php');  
    }
?>
		
<!-- Check Session and embed called page -->
<?php
	if (isset($_GET['page']))
    {
		$page = $_GET['page'];
    }
	else
    {
		$page = 'home';
    }
	if (preg_match('/^[a-z0-9\-]+$/', $page))
    {
		$inserted = include($page . '.php');
		if (!$inserted)
        {
            echo('Requested page was not found.');
        }
    }
	else
    {
        echo('Invalid parameter.');
    }
?>
			
<!-- Include footer -->
<?php include('includes/footer.php'); ?>

</html>