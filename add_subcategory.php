<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add Subcategory</title>
		<link rel="stylesheet" type="text/css" href="Includes/Style/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	
	<body>
		<!-- Begin : container -->
		<div class="container">
		
			<?php 
				include 'Includes/header.php'; 
				if(isset($_GET["alert"])){ $msg=$_GET["alert"]; echo $msg;}
				$conn = mysql_pconnect('localhost', 'root');
				$dbconn = mysql_select_db('products');		
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





