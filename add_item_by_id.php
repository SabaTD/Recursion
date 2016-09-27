<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add Subcategory</title>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	
	<body>
		<!-- Begin : container -->
		<div class="container">
		
			<?php 
				include 'Includes/header.php'; 
				mysql_connect("localhost", "root", "") or die(mysql_error());
				mysql_select_db("products") or die(mysql_error());;

				if(isset($_GET["alert"])){ $msg=$_GET["alert"]; echo $msg;}
				if(isset($_GET["ID"])){ $ID=intval($_GET["ID"]);}
				$select = mysql_query("SELECT * FROM menus WHERE id='$ID'");
				$result = mysql_fetch_array($select);
				$menu_name = $result['menu_name'];

				// Begin : add_category
				echo "<div id='add_category'>";
					echo "<strong id='title'>"." Adding Item of : " . "</strong>" . $menu_name;
					echo "<form action='add_item_by_id_action.php' enctype='multipart/form-data' method='post' class = 'form-group' >";
						echo "<input type='hidden' name='parent_id' value='$ID' >";
						echo '<input type="text" name="item_name" class ="form-control" placeholder="Name" maxlength="50" required="required" /><br />';
						echo '<textarea name="item_desc" class ="form-control" placeholder="Description" maxlength="255" required="required"></textarea> <br/>';
						echo '<input type="number" min="0" step="0.00000000001" max="9999999" name="item_price" class ="form-control" placeholder="Price" required="required"/><br />';
						echo '<input type="file" name="photo" class ="form-control" required="required" /><br />';
						echo "<input type='submit' value='Add' class = 'btn btn-primary'>";
					echo "</form>";
				echo "</div>";
				// End : add_category
			?>
				
		</div>
		<!-- End : container -->
	</body>
</html>