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
				$rows = mysql_num_rows($select);
				$result = mysql_fetch_array($select);
				$category_id = $result['id'];
				print_r($result);

				/*
				function getTree($category_id)
				{
							$arr = array();

							$result = mysql_query("select * from sub_category where category_id='$category_id'");
							while ($row = mysql_fetch_array($result)) { 
								$arr[] = array(
									"Title" => $row["sub_name"],
									"Children" => getTree($row["sub_name"])
								);
							}
							return $arr;
							echo $arr;
				}
				*/

				function buildTree(array $elements, $parentId = 0) {
				    $branch = array();

				    foreach ($elements as $element) {
				        if ($element['category_id'] == $category_id) {
				            $children = buildTree($elements, $element['	sub_category_id']);
				            if ($children) {
				                $element['children'] = $children;
				            }
				            $branch[] = $element;
				        }
				    }

				    return $branch;
				}

				//$tree = buildTree($result);


							echo '<li>';
								echo '<div id="output2">';   
									echo '<div id="leftoutput2">';	    
											echo '<p>'. $children['sub_name'] . '</p>';
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
						
				
				
				for ($i=0; $i <$num_rows ; $i++) { 
					$result = mysql_fetch_array($select);
					$category_id = $result['id'];
					
					//categoryChild($category_id);

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

						echo '<li>';
								echo '<div id="output2">';   
									echo '<div id="leftoutput2">';	    
											echo '<p>'. categoryChild($category_id) . '</p>';
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