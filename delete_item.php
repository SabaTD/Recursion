<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("products") or die(mysql_error());
	
	if(isset($_GET["ID"])){ $ID=intval($_GET["ID"]);}
	if($ID == ''){ 
		$msg="Could not delete item";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("UPDATE menus SET status = 1 WHERE id = '$ID' ");
		$msg="Item updated successfully";
		header("Location:index.php?alert=$msg");
	}
?>