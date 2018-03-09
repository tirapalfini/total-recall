<?php 
require("../includes/config.php"); // required for logout function

	//unset session variables
	$_SESSION = [];

	//unset cookie
	unset($_COOKIE[session_name()]);

	//destroy session
	session_destroy();

    redirect("landing.php");

?>