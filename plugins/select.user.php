<?php include('includes/session.php'); ?>

<?php
	// User list class
	class getUser
    {
		// Declaration of private variables
		private $usrName, $usrFirstName, $usrLastName, $usrEmail, $usrAddress, $usrCity, $usrState, $usrZip, $usrPassword, $usrAdmin, $usrInstructor, $usrImage;
		
		// Constructor function when class is called
		public function __construct($dbRow)
        {
			$this->usrName = $dbRow ['usrName'];
			$this->usrFirstName = $dbRow ['usrFirstName'];
			$this->usrLastName = $dbRow ['usrLastName'];
			$this->usrEmail = $dbRow ['usrEmail'];
			$this->usrAddress = $dbRow ['usrAddress'];
			$this->usrCity = $dbRow ['usrCity'];
			$this->usrState = $dbRow ['usrState'];
			$this->usrZip = $dbRow ['usrZip'];
			$this->usrPassword = $dbRow ['usrPassword'];
			$this->usrAdmin = $dbRow['usrAdmin'];
			$this->usrInstructor = $dbRow['usrInstructor'];
			$this->usrImage = $dbRow ['usrImage'];
		}
		
		// Retrieve variables for group
		public function getusrName()
        {
			return $this->usrName;
		}
		
		public function getusrFirstName()
        {
			return $this->usrFirstName;
		}
		
		public function getusrLastName()
        {
			return $this->usrLastName;
		}
		
		public function getusrEmail()
        {
			return $this->usrEmail;
		}
		
		public function getusrAddress()
        {
			return $this->usrAddress;
		}
		
		public function getusrCity()
        {
			return $this->usrCity;
		}
		
		public function getusrState()
        {
			return $this->usrState;
		}
		
		public function getusrZip()
        {
			return $this->usrZip;
		}
		
		public function getPassword()
        {
			return $this->usrPassword;
		}
		
		public function getusrAdmin()
        {
			return $this->usrAdmin;
		}
		
		public function getInstructor()
        {
			return $this->usrInstructor;
		}
		
		public function getusrImage()
        {
			return $this->usrImage;
		}
	}	