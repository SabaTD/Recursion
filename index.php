<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>

	<body>
		<!-- Begin : container -->
		<div class="container">
			
			<?php 
				include 'Includes/header.php'; 
				if(isset($_GET["alert"])){ $msg=$_GET["alert"]; echo $msg;}
				// Begin : add_category
				echo "<div id='add_category'>";
					echo "<strong id='title'>"." Add category "."</strong>";
					echo "<form action='add_category_action.php'  method='post' class = 'form-group' >";
						echo "<input type='text' name='category_name' class = 'form-control' >"."<br />";
						echo "<input type='submit' value='Add' class = 'btn btn-primary'>";
					echo "</form>";
				echo "</div>";
				// End : add_category
			?>
			
			<?php// include_once 'Includes/select.php'; ?>
			
		</div>
		<!-- End : container -->
	</body>		
</html>