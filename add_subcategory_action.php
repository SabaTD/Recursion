<?php
	include_once 'Includes/connection.php';
	include_once 'Includes/functions.php';
	
	if(isset($_POST["submenu"])){ $submenu = $_POST["submenu"]; }
	if(isset($_POST["ParentName"])){ $ParentName = $_POST["ParentName"]; }

	$filtered_submenu = filtertext($submenu);
	$filtered_ParentName = filtertext($ParentName);

	$select = mysql_query("SELECT * FROM menus WHERE menu_name='$filtered_ParentName'");
	$result = mysql_fetch_array($select);
	$menu_name = $result['id'];

	if($submenu == ''){ 
		$_SESSION['message'] = 'Can not add Sub category';
		header("Location:add_subcategory.php");
		exit();
	}
	else{ 
		$ins=mysql_query("insert into menus(`menu_name`, `parent_id`, `type`) values('$filtered_submenu', '$menu_name', 1)");
		$_SESSION['message'] = 'Subategory added successfully';
		header("Location:index.php");
		exit();
	}
?>