<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["menu_name"])){ $menu_name = $_POST["menu_name"]; }
	if(isset($_POST["parent_id"])){ $parent_id = intval($_POST["parent_id"]); }
	$string_menu_name = mysql_real_escape_string($menu_name);

	if($menu_name == ''){ 
		$msg="Could not add Subcategory";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into menus(menu_name, parent_id, type) values('$string_menu_name', '$parent_id', 1)");
		$msg="Subategory added successfully";
		header("Location:index.php?alert=$msg");
	}
?>