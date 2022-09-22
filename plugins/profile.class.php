<?php include('includes/session.user.php'); ?>

<?php require_once('db.php'); ?>

<?php
	// Request array from database
	$db = new db();
	$dataSet = $db->executeClassSelect();
	// List users that have the admin flag changes so only admins are shown
	foreach ($dataSet as $data)
    {
   		if($_POST['editButton'] == $data->getcrsIDCode())
        {
            $crsIDCode = $data->getcrsIDCode();
            $crsName = $data->getcrsName();
            $crsInstructor = $data->getcrsInstructor();
            $crsDescription = $data->getcrsDescription();
            $crsSemester = $data->getcrsSemester();
            $crsStartTime = $data->getcrsStartTime();
            $crsEndTime = $data->getcrsEndTime();
            $crsMon = $data->getcrsMon();
            $crsTues = $data->getcrsTues();
            $crsWed = $data->getcrsWed();
            $crsThurs = $data->getcrsThurs();
            $crsFri = $data->getcrsFri();
        
            // Days checked test
            if ($crsMon)
            {
                $checked_crsMon = "checked";
				$day_crsMon = "Mon";
            }
            else
            {
                $checked_crsMon = "";
				$day_crsMon = "";
            }
            
            if ($crsTues)
            {
                $checked_crsTues = "checked";
 				$day_crsTues = "Tues";
            }
            else
            {
                $checked_crsTues = "";
				$day_crsTues = "";
             }
            
            if ($crsWed)
            {
                $checked_crsWed = "checked";
				$day_crsWed = "Wed";
             }
            else
            {
                $checked_crsWed = "";
				$day_crsWed = "";
             }
            
            if ($crsThurs)
            {
                $checked_crsThurs = "checked";
				$day_crsThurs = "Thur";
             }
            else
            {
                $checked_crsThurs = "";
				$day_crsThurs = "";
             }
            
            if ($crsFri)
            {
                $checked_crsFri = "checked";
 				$day_crsFri = "Fri";
            }
            else
            {
                $checked_crsFri = "";
 				$day_crsFri = "";
            }
            
        }
    }
?>