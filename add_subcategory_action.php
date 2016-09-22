<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["sub_category"])){ $sub_category = $_POST["sub_category"]; }
	if(isset($_POST["category_id"])){ $category_id = $_POST["category_id"]; }
	if($sub_category == ''){ 
		$msg="Can not add Sub category";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into sub_category(sub_name, category_id) values('$sub_category', '$category_id')");
		$msg="Sub category added successfully";
		header("Location:index.php?alert=$msg");
	}
?>