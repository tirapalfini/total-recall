<div id="main-content" class="container">
	<!-- Title -->
    <div class="row">
		<h1 class="centered-header landing-text">Total Recall</h1>
        <hr class="underline">
    </div>
    <!-- Shopping List -->
    <div>
        <table class="table" id="shopping-list">
        	<thead>
        		<tr>
        			<th>Name</th>
        			<th>Quantity</th>
        			<th>Description</th>
        		</tr>
        	</thead>
        	<tbody align="center">
        		<?php
        			foreach($positions as $position)
        			{
        				print ("<tr>");
    					print ("<td>{$position["name"]}</td>");
    					print ("<td>{$position["quanitity"]}</td>");
   						print ("<td>{$position["description"]}</td>");
    					print ("</tr>");
        			}
        		?>
        	</tbody>
        </table>
    </div>
	<!-- Dummy button for triggering modal -->
	<div class="row landing-button">
			<a href="logout.php"><button type="button" class="btn btn-secondary btn-lg btn-block btn-blue" id="logout">Logout</button></a>
	</div>
</div>