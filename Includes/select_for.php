<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
		<link rel="stylesheet" type="text/css" href="../Style/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>

	<body>
			
			<?php 		
				$conn = mysql_pconnect('localhost', 'root');
				$dbconn = mysql_select_db('products');		
				$select = mysql_query("select * from category");
				$num_rows = mysql_num_rows($select);
				
				
				for ($i=0; $i <$num_rows ; $i++) { 
					$result = mysql_fetch_array($select);
					$category_id = $result['id'];
					
					
					$selectsub = mysql_query("select * from sub_category where category_id='$category_id'");
					$sub_num_rows = mysql_num_rows($selectsub);
					echo '<ul>';
						echo '<li>';
							echo '<div id="output">';   
								echo '<div id="leftoutput">';	    
										echo '<p>' . $result['category_name'] . '</p>' ;
								echo '</div>';
								echo '<div id="rightoutput">';     
									echo '<div id="leftimage">';
										echo '<img src="Images/update.png" />';
									echo '</div>';
									echo '<div id="rightimage">';
										echo '<img src="Images/delete.png" />';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</li>';




						echo '<ul>';
						for ($j=0; $j < $sub_num_rows; $j++) { 
							$sub_result = mysql_fetch_array($selectsub);

							echo '<li>';
								echo '<div id="output2">';   
									echo '<div id="leftoutput2">';	    
											echo '<p>'. $sub_result['sub_name'] . '</p>';
									echo '</div>';
									echo '<div id="rightoutput2">';     
										echo '<div id="leftimage">';
											echo '<img src="Images/update.png" />';
										echo '</div>';
										echo '<div id="rightimage">';
											echo '<img src="Images/delete.png" />';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</li>';
						}
							echo "</br>";echo "</br>";

							echo '<li>';
								echo '<div id="leftoutput3">';
									echo '<p>' . "<a href = 'add_subcategory.php?ID=$category_id'> Add subcategory </a>" . '</p>';
								echo '</div>';
							echo '</li>';

							echo '<li>';
								echo '<div id="leftoutput4">';
									echo '<p>' . "<a href = 'add_item.php?ID=$category_id'> Add item </a>" . '</p>';
								echo '</div>';
							echo '</li>';

						echo '</ul>';
					echo '</ul>';
				}
				
			?>
			


		
			
				
	</body>		
</html>