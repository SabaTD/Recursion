<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("products") or die(mysql_error());;
	
	if(isset($_POST["submenu"])){ $submenu = $_POST["submenu"]; }
	if(isset($_POST["ParentName"])){ $ParentName = $_POST["ParentName"]; }

	$select = mysql_query("SELECT * FROM menus WHERE menu_name='$ParentName'");
	$result = mysql_fetch_array($select);
	$menu_name = $result['id'];

	if($submenu == ''){ 
		$msg="Can not add Sub category";
		header("Location:add_subcategory.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into menus(menu_name, parent_id, type) values('$submenu', '$menu_name', 1)");
		$msg="Sub category added successfully";
		header("Location:index.php?alert=$msg");
	}
?>