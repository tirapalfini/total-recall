<!--
Names: Group 10
Assignment: Total Recall
Class: CS361-400-W2018
-->

<?php


//render  template and pass in values
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