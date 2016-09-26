<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["menu_name"])){ $menu_name = $_POST["menu_name"]; }
	if(isset($_POST["parent_id"])){ $parent_id = $_POST["parent_id"]; }
	if($menu_name == ''){ 
		$msg="Could not add Subcategory";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into menus(menu_name, parent_id, type) values('$menu_name', '$parent_id', 1)");
		$msg="Subategory added successfully";
		header("Location:index.php?alert=$msg");
	}
?>