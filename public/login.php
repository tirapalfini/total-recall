<?php
	//config
	require("../includes/config.php");

	//if reached by GET request
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		//render landing page
		redirect("landing.php");
	}
	else if (isset($_SESSION["id"])) // user already logged in
	{
		redirect("home.php");
	}
	else if ($_SERVER["REQUEST_METHOD"]=="POST") 	//if reached by POST request 
	{
		// check if username entered
		if(empty($_POST["email"]))
		{
			render("landing_form.php", ["title" =>"Welcome", "loginError" => " You must enter your email."]);
		}

		// check if password entered
		else if(empty($_POST["password"]))
		{
			render("landing_form.php", ["title" =>"Welcome", "loginError" => " Password is required." ]);
		}
		else 
		{
			//connect to database
			$database = dbConnect();

			// prepare statement
			$statement = $database->prepare("SELECT id, password FROM user WHERE email = ?");
			$statement->bind_param('s', $_POST["email"]);

			// execute and get results
			$statement->execute();
			$statement->store_result();
			$num_row = $statement->num_rows;
			$statement->bind_result($id, $password);
			$statement->fetch();

			if($num_row == 1) // response is valid
			{
				if($_POST["password"] == $password) // user entered valid password
				{
					$_SESSION["id"] = $id;
					$_SESSION["email"] = $email;
					$statement->close();
					redirect("home.php");
				}
				else // invalid password
				{
					render("landing_form.php", ["title" =>"Welcome", "loginError" => " Invalid password."]);
					$statement->close();
				}
			}
			else // username not found
			{
				$statement->close();
				render("landing_form.php", ["title" =>"Welcome",  "loginError" => " Email not found.  Please create an account."]);
			}
		}
	}
?>