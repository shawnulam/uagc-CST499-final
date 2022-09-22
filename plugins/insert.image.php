<?php include('includes/session.php'); ?>

<?php 
	// Include the database configuration file  
	require_once 'db.php';
	
	// If file upload form is submitted 
	if(isset($_POST['submit']))
    { 
		if(!empty($_FILES['usrImage']['name']))
        { 
			// Get file info 
			$fileName = basename($_FILES['usrImage']['name']); 
			$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
			// Allow certain file formats 
			$allowTypes = array('jpg','png','jpeg','gif'); 

			if(in_array($fileType, $allowTypes))
            { 
				$usrImage = $_FILES['usrImage']['tmp_name']; 
				$imgContent = (file_get_contents($usrImage));
				
				$arrayImg = array($imgContent, $usrName,);
         
				try
                {
					// Update data in database
					// new db() called by usrSelect
					// $db = new db();
					$insert = $db->executeImage($arrayImg); 
             
					// Output text for successful image upload
					echo "<div id=\"dialog-message\" title=\"Complete\">";
					echo "<p>Your image was uploaded successfully</p>";
					echo "</div>";
				}
                catch (PDOException $e)
                {
					// Show error message if failure to upload image
					echo "<div id=\"dialog-message\" title=\"Incomplete\">";
					echo "<p>Image unable to be uploaded. Please attempt again or contact support</p>";
					echo "</div>";
				}
			}
            else
            {
				// Error message if image not added to upload
				echo "<div id=\"dialog-message\" title=\"Upload Failure\">";
				echo "<p>File is not a compatible image file</p>";
				echo "</div>";
			}
		}
        else
        {
			// Error message if image not added to upload
			echo "<div id=\"dialog-message\" title=\"Upload Failure\">";
			echo "<p>Please add a compatible image</p>";
			echo "</div>";
		}
	}
	
	if(isset($_POST['remove']))
    { 

		$arrayImg = array(null, $usrName,);
         
		try
        {
			// Update data in database
			$insert = $db->executeImage($arrayImg); 

			// Output text for successful image upload
			echo "<div id=\"dialog-message\" title=\"Complete\">";
			echo "<p>The image has been removed</p>";
			echo "</div>";
		}
        catch (PDOException $e)
        {
			// Show error message if failure to upload image
			echo "<div id=\"dialog-message\" title=\"Incomplete\">";
			echo "<p>Unable to remove the image. Please attempt again or contact support</p>";
			echo "</div>";
		}
	}
?>