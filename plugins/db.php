<?php include('includes/session.php'); ?>

<?php
	// Database information connection class
	class db
    {
		// Declaration of private variables
		private $con;
		// Constructor function when class is called
		public function __construct()
        {
			require_once("db.info.php");
			// Connect to the database
			try
            {
				$this->con = new PDO("mysql:host=".$dbHost.";dbname=".$dbName, $dbUser, $dbPass, $dbOpts);
			}
            catch (PDOException $e)
            {
				echo $e->getMessage();
			}
		}
		
		// User DB connections
		
		// Database selection query
		public function executeUserSelect()
        {
			// Require Selection Class for the Contact page
			require_once("select.user.php");
			$sql = "SELECT * FROM tblUser";
			$stmt = $this->con->prepare($sql);
			$stmt->execute();
			// Fetch row
			while($row = $stmt->fetch())
            {
				$dataSet[] = new getUser($row);
			}
			if(!empty($dataSet))
				return $dataSet;
			else
				return null;
		}
		
        		// Database insert function
		public function executeRegister($arrayReg)
        {
			$sql1 = "INSERT INTO tblUser (usrName, usrFirstName, usrLastName, usrEmail, usrAddress, usrCity, usrState, usrZip, usrPassword) VALUES (?,?,?,?,?,?,?,?,?)";
			$stmt1 = $this->con->prepare($sql1);
			$stmt1->execute([$arrayReg[0], $arrayReg[1], $arrayReg[2], $arrayReg[3], $arrayReg[4], $arrayReg[5], $arrayReg[6], $arrayReg[7], $arrayReg[8]]);
		}
		
		// Database insert image function
		public function executeImage($arrayImg)
        {
			$sql = "UPDATE tblUser SET usrImage=? WHERE usrName=?";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$arrayImg[0], $arrayImg[1]]);
		}
		
		// Database delete user function
		public function executeUserDelete($usrName)
        {
			$sql1 = "DELETE FROM tblUser WHERE usrName=?";
			$stmt1 = $this->con->prepare($sql1);
			$stmt1->execute([$usrName]);
		}

		// Database Update function
		public function executeUserUpdate($arrayUpd)
        {
			$sql = "UPDATE tblUser SET usrEmail=?, usrAddress=?, usrCity=?, usrState=?, usrZip=?, usrPassword=? WHERE usrName=?";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$arrayUpd[0], $arrayUpd[1], $arrayUpd[2], $arrayUpd[3], $arrayUpd[4], $arrayUpd[5], $arrayUpd[6]]);
		}
		
		// Modify admin function
		public function executeAdmin($arrayAdm)
        {
			$sql = "UPDATE tblUser SET usrFirstName=?, usrLastName=?, usrEmail=?, usrAddress=?, usrCity=?, usrState=?, usrZip=?, usrPassword=?, usrAdmin=?, usrInstructor=? WHERE usrName=?";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$arrayAdm[0], $arrayAdm[1], $arrayAdm[2], $arrayAdm[3], $arrayAdm[4], $arrayAdm[5], $arrayAdm[6], $arrayAdm[7], $arrayAdm[8], $arrayAdm[9], $arrayAdm[10]]);
		}

		// Course DB connections
		
		// Database selection query
		public function executeClassSelect()
        {
			// Require Selection Class for the Contact page
			require_once("select.class.php");
			$sql = "SELECT * FROM tblCourse";
			$stmt = $this->con->prepare($sql);
			$stmt->execute();
			// Fetch row
			while($row = $stmt->fetch())
            {
				$dataSet[] = new getClass($row);
			}
			if(!empty($dataSet))
				return $dataSet;
			else
				return null;
		}
		
		// Database insert function
		public function executeAddClass($arrayAddClass)
        {
			$sql1 = "INSERT INTO tblCourse (crsIDCode, crsName, crsInstructor, crsDescription, crsSemester, crsStartTime,
			crsEndTime, crsMon, crsTues, crsWed, crsThurs, crsFri) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt1 = $this->con->prepare($sql1);
			$stmt1->execute([$arrayAddClass[0], $arrayAddClass[1], $arrayAddClass[2], $arrayAddClass[3],
			$arrayAddClass[4], $arrayAddClass[5], $arrayAddClass[6], $arrayAddClass[7], $arrayAddClass[8],
			$arrayAddClass[9], $arrayAddClass[10], $arrayAddClass[11]]);
		}
		
		// Database Update function
		public function executeUpdateClass($arrayUpdateClass)
        {
			$sql = "UPDATE tblCourse SET crsIDCode=?, crsName=?, crsInstructor=?, crsDescription=?, crsSemester=?, crsStartTime=?,
			crsEndTime=?, crsMon=?, crsTues=?, crsWed=?, crsThurs=?, crsFri=? WHERE crsIDCode=?";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$arrayUpdateClass[0], $arrayUpdateClass[1], $arrayUpdateClass[2], $arrayUpdateClass[3],
			$arrayUpdateClass[4], $arrayUpdateClass[5], $arrayUpdateClass[6], $arrayUpdateClass[7], $arrayUpdateClass[8],
			$arrayUpdateClass[9], $arrayUpdateClass[10], $arrayUpdateClass[11], $arrayUpdateClass[0]]);
		}
		
		// Database delete class function
		public function executeClassDelete($crsIDCode)
        {
			$sql1 = "DELETE FROM tblCourse WHERE crsIDCode=?";
			$stmt1 = $this->con->prepare($sql1);
			$stmt1->execute([$crsIDCode]);
		}
	
		// Course DB connections

		// Database selection query
		public function executeUserSchedule($usrName)
        {
			// Require Selection Class for the Contact page
			require_once("select.class.php");
			$sql = "SELECT * FROM tblCourse INNER JOIN tblSchedule ON tblCourse.crsIDCode=tblSchedule.course WHERE tblSchedule.courseUser=?";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$usrName]);
			// Fetch row
			while($row = $stmt->fetch())
            {
				$dataSet[] = new getClass($row);
			}
			if(!empty($dataSet))
				return $dataSet;
			else
				return null;
		}
		
		// Database selection query
		public function executeInstructorClass($className)
        {
			// Require Selection Class for the Contact page
			require_once("select.user.php");
			$sql = "SELECT * FROM tblUser INNER JOIN tblSchedule ON tblUser.usrName=tblSchedule.courseUser WHERE tblSchedule.course=?";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$className]);
			// Fetch row
			while($row = $stmt->fetch())
            {
				$dataSet[] = new getUser($row);
			}
			if(!empty($dataSet))
				return $dataSet;
			else
				return null;
		}
		
		// Database insert function
		public function executeAddSchedule($arrayAddCourse)
        {
			$sql = "INSERT INTO tblSchedule (courseUser, course) VALUES (?,?)";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$arrayAddCourse[0], $arrayAddCourse[1]]);
		}
		
		// Database delete class function
		public function executeSchedDelete($arrayDelCourse)
        {
			$sql = "DELETE FROM tblSchedule WHERE courseUser=? and course=?";
			$stmt = $this->con->prepare($sql);
			$stmt->execute([$arrayDelCourse[0], $arrayDelCourse[1]]);
		}	
	
	}
?>

