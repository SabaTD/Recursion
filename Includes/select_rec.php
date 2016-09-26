<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
		<link rel="stylesheet" type="text/css" href="../Style/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>

	<body>
			
			<?php 		
				mysql_connect('localhost', 'root', "") or die(mysql_error());
				mysql_select_db('products') or die(mysql_error()) ;		
	

				function display_categories($sub_category_id = 0){
					$query = mysql_query("select * from sub_category where sub_category_id = " . $sub_category_id) or die(mysql_error());
					if(mysql_num_rows($query) > 0 ){
						echo "<ul>";
							while($row = mysql_fetch_array($query)){
								echo "<li>" . $row['sub_name'];
									display_categories($row['category_id']);
								echo "</li>";
							}
						echo "</ul>";
					}
				
				}
				
				display_categories();
	
			?>
				
	</body>		
</html>