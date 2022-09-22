<?php

    // Session start and maintain session variables
	session_start();
	
    // Force page to be embedded in index.php
	if(!defined('myCon'))
    {
		// Change header
		header("Location: /");
		// Kill the rest of the page
		die();
	}
?>