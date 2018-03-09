<?php
require("../includes/config.php");

	if(!empty($_SESSION["id"])) // user not logged in
	{
		redirect("home.php");
	}
	else
	{
		render("landing_form.php", ["title" => "Welcome"]);
	}
?>