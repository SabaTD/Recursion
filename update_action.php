<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["menu_name"])){ $menu_name = $_POST["menu_name"]; }
	if(isset($_POST["id"])){ $id = $_POST["id"]; }
	if($menu_name == ''){ 
		$msg="Could not add Subcategory";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("UPDATE menus SET menu_name = '$menu_name', type = 1  WHERE id = '$id' ");
		$msg="Subategory added successfully";
		header("Location:index.php?alert=$msg");
	}
?>