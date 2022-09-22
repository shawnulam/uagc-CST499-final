<?php include('includes/session.php'); ?>

<?php
	// User list class
	class getClass
    {
		// Declaration of private variables
		private $crsIDCode, $crsName, $crsInstructor, $crsDescription, $crsSemester, $crsStartTime, $crsEndTime, $crsMon, $crsTues, $crsWed, $crsThurs, $crsFri;
		
		// Constructor function when class is called
		public function __construct($dbRow)
        {
			$this->crsIDCode = $dbRow ['crsIDCode'];
			$this->crsName = $dbRow ['crsName'];
			$this->crsInstructor = $dbRow ['crsInstructor'];
			$this->crsDescription = $dbRow ['crsDescription'];
			$this->crsSemester = $dbRow ['crsSemester'];
			$this->crsStartTime = $dbRow ['crsStartTime'];
			$this->crsEndTime = $dbRow ['crsEndTime'];
			$this->crsMon = $dbRow ['crsMon'];
			$this->crsTues = $dbRow ['crsTues'];
			$this->crsWed = $dbRow['crsWed'];
			$this->crsThurs = $dbRow['crsThurs'];
			$this->crsFri = $dbRow ['crsFri'];
		}
		
		// Retrieve variables for group
		public function getcrsIDCode()
        {
			return $this->crsIDCode;
		}
		
		public function getcrsName()
        {
			return $this->crsName;
		}
		
		public function getcrsInstructor()
        {
			return $this->crsInstructor;
		}
		
		public function getcrsDescription()
        {
			return $this->crsDescription;
		}
		
		public function getcrsSemester()
        {
			return $this->crsSemester;
		}
		
		public function getcrsStartTime()
        {
			return $this->crsStartTime;
		}
		
		public function getcrsEndTime()
        {
			return $this->crsEndTime;
		}
		
		public function getcrsMon()
        {
			return $this->crsMon;
		}
		
		public function getcrsTues()
        {
			return $this->crsTues;
		}
		
		public function getcrsWed()
        {
			return $this->crsWed;
		}
		
		public function getcrsThurs()
        {
			return $this->crsThurs;
		}
		
		public function getcrsFri()
        {
			return $this->crsMon;
		}
	}	