<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("products") or die(mysql_error());

	if(isset($_GET["ID"])){ $ID=intval($_GET["ID"]);}

	$select = mysql_query("SELECT * FROM menus WHERE parent_id='$ID'");
	$result = mysql_fetch_array($select);
	$parent_id = $result['menu_name'];
	echo $parent_id;
	if($result > 0){
		$msg="You can not delete Category or Subcategory until it contains some information";
		header("Location:index.php?alert=$msg");
		echo 'qvemeniu  aris';
	}
	else{
		$del=mysql_query("DELETE FROM menus where id = '$ID' ");
		if($del){
			$msg="Deleted successfully";
			header("Location:index.php?alert=$msg");
		}
		else{
			$msg="Can not delete, try again";
			header("Location:index.php?alert=$msg");
		}
		
	}
?>