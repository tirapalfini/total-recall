<?php

	require("../includes/config.php"); // required for functions

	if (empty($_SESSION["id"])) // user not logged in
	{
		redirect("landing.php");
	}

	//Set up script variables
	$product_name = $_POST["product_name"]; //required
	$quantity = $_POST["quantity"];
	$description = $_POST["description"];
	$list_type = 1;
	$user_id = $_SESSION["id"];

	if ($product_name == "")
	{
		$error_message = "Name of Product is Required";
		render("home_form.php", ["title" => "Welcome", "addProductError" => $error_message]);
	}

	else
	{
		//connect to the database
		$database = dbConnect();

		//make sql query
		$productQuery = $database->prepare("INSERT INTO product (name, quantity, description, list_type, user_id) VALUES (?, ?, ?, ?, ?)");
		$productQuery->bind_param('sssss', $product_name, $quantity, $description, $list_type, $user_id);

		//check if insertion query failed
		if(!$productQuery->execute()) 
		{
			$error_message = "There was a problem adding your product.  We're sorry! Please try again.";
			render("home_form.php", ["title" => "Welcome", "addProductError" => $error_message]);
			exit();
		}

		//if successful, display shopping list
		redirect("shoppingList.php");
	}

?>