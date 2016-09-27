<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add category</title>
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
				echo "<div id='add_subcategory'>";
					echo "<form action='add_item_action.php' enctype='multipart/form-data'  method='post' class = 'form-group' >";
						echo "<div id='form2'>";
							echo "<h5 id = 'description1'>";
								echo "<strong>" . "Item of : " . "</strong>";
								echo "<select name='ParentName'>";
									for ($i=0; $i <$num_rows; $i++) { 
										$result = mysql_fetch_array($select);
										echo "<option value=".$result["id"]."> " . $result["menu_name"] . "</option>";   
									}
								echo "</select>";
							echo "</h5>";	
						echo "</div>";
						echo '<input type="text" name="item_name" class ="form-control" placeholder="Name" maxlength="50" required="required" /><br/>';
						echo '<textarea name="item_desc" class ="form-control" placeholder="Description" maxlength="255" required="required"></textarea> <br/>';
						echo '<input type="number" min="0" step="0.00000000001" max="9999999" name="item_price" class ="form-control" placeholder="Price" required="required"/><br />';
						echo '<input type="file" name="photo" class ="form-control" required="required"><br />';
						echo "<input type='submit' value='Add' class = 'btn btn-primary'>";
					echo "</form>";//end of form

				echo "</div>";
				// End : add_subcategory
			?>
				
		</div>
		<!-- End : container -->
	</body>
</html>