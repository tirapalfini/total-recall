<?php
require("../includes/config.php");
	if(empty($_SESSION["id"])) // user not logged in
	{
		redirect("landing.php");
	}
	else 
	{
		render("home_form.php", ["title" => "Welcome"]);
	}
?>