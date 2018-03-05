<!--
Names: Group 10
Assignment: Total Recall
Class: CS361-400-W2018
-->

<?php


//connect to the database
function dbConnect()
{

	// Database
	$servername = "classmysql.engr.oregonstate.edu";
	$username = "cs361_wicklant";
	$password = "7681";
	$db = "cs361_wicklant";
	
	static $database;
	if(!isset($database)) // create new db connection if one does not already exist
	{
	//connect to database
	$database = new mysqli($servername, $username, $password, $db);

	if($database->connect_errno)
	{
		printf("Connect failed: " . $database->connect_error);
	}
}
	return $database;
	
}

//render  template and pass in error codes
function render($template)
{
	//if template exists, render
	if(file_exists("templates/$template"))
	{

		//render header
		require("templates/header.php");
		
		//render template
		require("templates/$template");

		//render footer
		require("templates/footer.php");
	}

	//else err
	else
	{
		trigger_error("Invalid template: $template", E_USER_ERROR);
	}
}

?>