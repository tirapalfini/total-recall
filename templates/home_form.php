<?php
    require("addProductModal.php");
   if(isset($_POST['delete'])){
        $product_id = $_POST['delete'];
        $database = dbConnect();
        $database->query("DELETE FROM product WHERE id='".$product_id."'");
        redirect("shoppingList.php");
    }
?>

<div id="main-content" class="container">
	<!-- Title -->
    <div class="row">
		<h1 class="centered-header landing-text">Total Recall</h1>
        <hr class="underline">
    </div>
    <!-- Shopping List -->
    <div class="row">
        <a href="shoppingList.php" style="color: #ffffff">Shopping List</a>
    </div>
    <div>
        <table class="table table-striped" id="shoppingList">
        	<thead>
        		<tr>
        			<th>Name</th>
        			<th>Quantity</th>
        			<th>Description</th>
        		</tr>
        	</thead>
        	<tbody align="left">
        		<?php
                    if(isset($positions))
                    {
            			foreach($positions as $position)
            			{
                            print( "<form action='' method='post'>");
            				print ("<tr>");
        					print ("<td>{$position["name"]}</td>");
        					print ("<td>{$position["quantity"]}</td>");
       						print ("<td>{$position["description"]}</td>");
                            print ("<td><button type='submit' name='delete' value='".$position["id"]."'>Delete</button><td>");
        					print ("</tr>");
                            print( "</form>");
            			}
                    }
        		?>
                <tr>
                    <td>
                        <button type = 'button' id='addProductModal' data-toggle='modal' data-target='#addProductModal'>Add Item</button>
                    </td>
                </tr>
        	</tbody>
        </table>
    </div>
	<!-- Dummy button for triggering modal -->
	<div class="row landing-button">
	<a href="logout.php"><button type="button" class="btn btn-secondary btn-lg btn-block btn-blue" id="logout">Logout</button></a>
	</div>
</div>
