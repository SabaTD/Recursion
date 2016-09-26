<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["item_name"])){ $item_name = $_POST["item_name"]; }
	if(isset($_POST["item_price"])){ $item_price = $_POST["item_price"]; }
	if(isset($_POST["item_desc"])){ $item_desc = $_POST["item_desc"]; }
	if(isset($_POST["photo"])){ $photo = $_POST["photo"]; }
	if(isset($_POST["id"])){ $id = $_POST["id"]; }
	if($item_name == '' || $item_price = '' || $item_desc = '' || $photo = ''){ 
		$msg="Could not update item";
		header("Location:update_item.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("UPDATE menus SET menu_name = '$item_name', description = '$item_desc', price = '$item_price',  type = 2  WHERE id = '$id' ");
		$msg="Item updated successfully";
		header("Location:index.php?alert=$msg");
	}
?>