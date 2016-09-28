<?php session_start(); ?>
<!doctype html>
<html>
	<?php  include_once 'Includes/head.php';?>
	<body>
		<!-- Begin : container -->
		<div class="container">
		
			<?php 
				include_once 'Includes/header1.php'; 
				include_once 'Includes/connection.php';	

				if (isset($_SESSION['message'])) {
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				}
		
				$select = mysql_query("SELECT * FROM menus WHERE type = '1' ");
				$num_rows = mysql_num_rows($select);
				
				// Begin : add_subcategory
					echo "<form action='add_subcategory_action.php'  method='post' class = 'form-group' >";
						echo "<div id='form2'>";
							echo "<h5 id = 'description1'>";
								echo "<strong>" . "Subcategory of : " . "</strong>";
								echo "<select name='ParentName'>";
									for ($i=0; $i <$num_rows; $i++) { 
										$result = mysql_fetch_array($select);
										echo "<option>" . $result["menu_name"] . "</option>";   
									}
								echo "</select>";
							echo "</h5>";	
						echo "</div>";

						echo "<input type='text' name='submenu' class = 'form-control' placeholder='Name' required = 'required'>"."<br />";
						echo "<input type='submit' value='Add' class = 'btn btn-primary'>";
					echo "</form>";
					//end of form
				echo "</div>";
				// End : add_subcategory
			?>
				
		</div>
		<!-- End : container -->
	</body>
</html>





