<?php session_start(); ?>
<!doctype html>
<html>	
	<?php  include_once 'Includes/head.php';?>
	<body>
		<!-- Begin : container -->
		<div class="container">
		
			<?php 
				include_once 'Includes/header1.php';

				if (isset($_SESSION['message'])) {
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				}

				// Begin : add_category
				echo "<div id='add_category'>";
					echo "<strong id='title'>"." Add category "."</strong>";
					echo "<form action='add_category_action.php'  method='post' class = 'form-group' >";
						echo "<input type='text' name='menu_name' class = 'form-control'>"."<br />";
						echo "<input type='submit' value='Add' class = 'btn btn-primary'>";
					echo "</form>";
				echo "</div>";
				// End : add_category
			?>
				
		</div>
		<!-- End : container -->
	</body>
</html>