<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["menu_name"])){ $menu_name = $_POST["menu_name"]; }
	$string_menu_name = mysql_real_escape_string($menu_name);

	if($menu_name == ''){ 
		$msg="Can not add category";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into menus(menu_name, type) values('$string_menu_name', 1)");
		$msg="Category added successfully";
		header("Location:index.php?alert=$msg");
	}
?>