<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["menu_name"])){ $menu_name = $_POST["menu_name"]; }
	if($menu_name == ''){ 
		$msg="Can not add category";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into menus(menu_name) values('$menu_name')");
		$msg="Category added successfully";
		header("Location:index.php?alert=$msg");
	}
?>