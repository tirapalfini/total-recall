<!--
Names: Group 10
Assignment: Total Recall
Class: CS361-400-W2018
-->

<?php
	require("../includes/config.php");

	if($_SERVER["REQUEST_METHOD"] == "GET") // user tried to access via 
	{
		render("landing_form.php");
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["email"])) // user omitted email
		{
			render("landing_form.php");
		}
		
		else if(empty($_POST["password"])) // user omitted password
		{
			render("landing_form.php");
		}

		else
		{
			$database = dbConnect();

			// verify username does not already exist
			$checkUser = $database->prepare("SELECT email FROM user WHERE email = ?");
			$checkUser->bind_param('s', $_POST["email"]);
			
			$checkUser->execute();
			$checkUser->store_result();
			$num_row = $checkUser->num_rows;
			$checkUser->close();

			if($num_row == 1) // email does exist
			{
				render("landing_form.php");
			}
			
			else // all information good
			{
				$email = $_POST["email"];

				$statement = $database->prepare("INSERT INTO user (email, password, location, severity) VALUES (?, ?, ?, ?)");
				$statement->bind_param('sss', $_POST["email"], $_POST["password"], $_POST["location"], $_POST["severity"]);
				$statement->execute();

				// log user in using newly created account
				#$_SESSION["id"] = $statement->insert_id;
				#$_SESSION["email"] = $_POST["email"];
				#$statement->close();

				render("home.php");
			}
		}
	}
?>