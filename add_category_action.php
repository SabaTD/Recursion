<?php
	session_start();
	include_once 'Includes/connection.php';
	include_once 'Includes/functions.php';
	
	if(isset($_POST["menu_name"])){ $menu_name = $_POST["menu_name"]; }
	$filtered_var = filtertext($menu_name);
	

	if($menu_name == ''){ 
		$_SESSION['message'] = 'Can not add category';
		header("Location:add_category.php");
		exit();
	}
	else{ 
		$ins=mysql_query("insert into menus(`menu_name`, `type`) values('$filtered_var', 1)");
		$_SESSION['message'] = 'Category added successfully';
		header("Location:index.php");
		exit();
	}
