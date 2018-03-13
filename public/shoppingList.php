<?php
require("../includes/config.php");

	if (empty($_SESSION["id"])) // user not logged in
    {
        redirect("landing.php");
    }

    else
    {
	    //connect to database
		$database = dbConnect();

		$id = $_SESSION["id"];
		
		//get shopping list items
		$statement = $database->query("SELECT product.id, product.name, product.quantity, product.description 
			FROM product
			WHERE product.user_id = $id AND product.list_type = 1;");

		$results = array();
		while($row = $statement->fetch_assoc())
		{
			$results[] = array(
				"id" => $row["id"],
				"name" => $row["name"],
				"quantity" => $row["quantity"],
				"description" => $row["description"]
				);
		}

		//$shoppingList = $shoppingListInfo->fetch_array(MYSQLI_ASSOC);
		//echo "hello"
		//echo $results
		//echo("<script>console.log('PHP: hello');</script>");
		//var_dump($id, $num_row, $results);
		//echo("<script>console.log('PHP: ".$results."');</script>");
		render("home_form.php", ["title" =>"Welcome", "positions" => $results]);
	}
?>