<?php
	$conn=mysql_pconnect('localhost','root');
	$dbconn=mysql_select_db('products');
	
	if(isset($_POST["category_name"])){ $category_name = $_POST["category_name"]; }
	if($category_name == ''){ 
		$msg="Can not add category";
		header("Location:index.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into category(category_name) values('$category_name')");
		$msg="Category added successfully";
		header("Location:index.php?alert=$msg");
	}
?>