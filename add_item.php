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
				if(isset($_GET["ID"])){ $ID=$_GET["ID"];}
				$conn = mysql_pconnect('localhost', 'root');
				$dbconn = mysql_select_db('products');		
				$select = mysql_query("select * from category where id='$ID' ");
				$num_rows = mysql_num_rows($select);
				$result = mysql_fetch_array($select);

				// Begin : add_subcategory
				echo "<div id='add_subcategory'>";
					echo "<div id='form2'>";
						echo "<h5 id = 'description1'>"."<strong>"."Item of : "."</strong>".$result['category_name']."</h5>";
					echo "</div>";
					
					echo "<form action='add_item_action.php'  method='post' class = 'form-group' >";
						echo "<input type='text' name='item_name' class = 'form-control'>"."<br />";
						echo "<input type='text' name='item_desc' class = 'form-control'>"."<br />";
						echo "<input type='text' name='item_price' class = 'form-control'>"."<br />";
						echo "<input type='file' name='item_desc' class = 'form-control'>"."<br />";
						echo "<input type='hidden' name='category_id' value=\"$ID\">";
						echo "<input type='submit' value='Add' class = 'btn btn-primary'>";
					echo "</form>";//end of form

				echo "</div>";
				// End : add_subcategory
			?>
				
		</div>
		<!-- End : container -->
	</body>
</html>