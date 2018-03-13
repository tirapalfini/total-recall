<!--
Names: Group 10
Assignment: Total Recall
Class: CS361-400-W2018
-->
		<!--Scripts -->

		<script src="js/jquery-1.11.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/scripts.js"></script>
		
		<!--On login error display modal immediately on load-->
		<?php if (isset($loginError)): ?>
			<script type="text/javascript">
				$(window).load(function() {
					$('#loginModal').modal('show');
				});

				$(document).ready(function() {
					$("#closeLogin").click(function() {
						$("#loginError").remove();
					});
				});
			</script>
		<?php endif ?>

		<!--On register error display register modal immediately on load-->
		<?php if (isset($registerError)): ?>

			<script type="text/javascript">
				$(window).load(function() {
					$('#createAccountModal').modal('show');
				});

				$(document).ready(function() {
					$("#closeRegister").click(function() {
						$("#registerError").remove();
					});
				});
			</script>
		
		<?php endif ?>

		<!--On addProduct error display addProduct modal immediately on load-->
		<?php if (isset($addProductError)): ?>

			<script type="text/javascript">
				$(window).load(function() {
					$('#addProductModal').modal('show');
				});

				$(document).ready(function() {
					$("#closeAddProductMdal").click(function() {
						$("#addProductError").remove();
					});
				});
			</script>
		
		<?php endif ?>

	</body>
</html>
