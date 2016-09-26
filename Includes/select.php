<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
		<link rel="stylesheet" type="text/css" href="../Style/style.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
			
			<?php 		
				mysql_connect("localhost", "root", "") or die(mysql_error());
				mysql_select_db("products") or die(mysql_error());

				function display_menus($parent_id = 0){

					$query = mysql_query("SELECT * FROM menus WHERE parent_id = "  .$parent_id. "  ORDER BY type") or die(mysql_error());

					if(mysql_num_rows($query) > 0){
						echo "<ul>";
							while($row = mysql_fetch_array($query)){
								$status = $row['status'];
								if( $status == '0'){
									echo '<li id="borders">';

										// Begin : output2;
										echo '<div id="output2">'; 
											$type = $row['type'];
											$main_id = $row['id']; 

											

											// Begin : rightoutput2;
											echo '<div id="mainoutput">';  
												if($type == '1'){ 
													// Begin : leftoutput2;

													echo '<div id="leftoutput">';	  
														echo '<a href="void:(0)" data-toggle="collapse" data-target="#row'. $row['id'] . '"><p>'. $row['menu_name'] . '</p></a>';
													echo '</div>';
													// End : leftoutput2;

													echo '<div id="rightoutput">';
														echo '<div id="addimage">';
															echo "<a href='add_subcategory_by_id.php?ID=$main_id'>" . '<i class="fa fa-lg fa-plus-square" aria-hidden="true" title="Add subcategory"></i>' . "</a>";
														echo '</div>';

														echo '<div id="addimage">';
															echo "<a href='add_item_by_id.php?ID=$main_id'>" . '<i class="fa fa-lg fa-plus-square-o" aria-hidden="true" title="Add item"></i>' . "</a>";
														echo '</div>';	

														echo '<div id="leftimage">';
															echo "<a href='update.php?ID=$main_id'>" . '<i class="fa fa-lg fa-pencil" aria-hidden="true" title="Update"></i>' . "</a>";
														echo '</div>';

														echo '<div id="leftimage">';
															echo "<a href='delete_category.php?ID=$main_id' onclick=\"return confirm('are you sure?')\">" . '<i class="fa fa-lg  fa-trash" aria-hidden="true" title="Delete"></i>' . "</a>";
														echo '</div>';
													echo '</div>';
												}//End : if ($type == '1'); 
												else{
													// Begin : leftoutput2;
													echo '<div id="leftoutput2">';	
														echo '<div id="leftnameoutput">';
															echo '<strong>' . '<p>'. $row['menu_name'] . '</p>' . '</strong>';
														echo '</div>';
														echo '<div id="leftimageoutput">';	  
															echo '<img src="'.$row["image"].'" />';
														echo '</div>';
														echo '<div id="leftdescriptionoutput">';	  
															echo '<p>'. $row['description'] . '</p>';
														echo '</div>';
														echo '<div id="leftpriceoutput">';	  
															echo '<p>'. ' Price : ' .$row['price'] / 100 . '</p>';
														echo '</div>';
													echo '</div>';
													// End : leftoutput2;

													echo '<div id="rightoutput2">';
														echo '<div id="rightimage">';
															echo "<a href='update_item.php?ID=$main_id'>" . '<i class="fa fa-lg fa-pencil" aria-hidden="true"></i>' . "</a>";
														echo '</div>';

														echo '<div id="rightimage">';
															echo "<a href='delete_item.php?ID=$main_id' onclick=\"return confirm('are you sure?')\">" . '<i class="fa fa-lg  fa-trash" aria-hidden="true" title="Delete"></i>' . "</a>";
														echo '</div>';
													echo '</div>';
												}
											echo '</div>';
											// End : mainoutput;

										echo '</div>';
										// End : output2;

									echo '</li>';
									echo '<div id="row'. $row['id'] . '" class="collapse">';
										display_menus($row['id']);
									echo "</div>";
								}// End : if( $status == '0');		
							}
						echo "</ul>";
					}// End : if(mysql_num_rows($query) > 0);
				}// End : function display_menus();

				display_menus();


			?>		
	</body>		
</html>