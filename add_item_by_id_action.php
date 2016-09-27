<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("products") or die(mysql_error());
	$types=array("image/jpg", "image/jpeg", "image/png");
	$types_arr_length=sizeof($types);
	$check=0;
	
	if(isset($_POST["item_name"])){ $item_name = $_POST["item_name"]; }
	if(isset($_POST["item_desc"])){ $item_desc = $_POST["item_desc"]; }
	if(isset($_POST["item_price"])){ $item_price = $_POST["item_price"]; }
	if(isset($_POST["parent_id"])){ $parent_id = intval($_POST["parent_id"]); }
	$rounded = round($item_price, 2);
	$item_price_in_cents = $rounded * 100;

	if(isset($_FILES['photo']))
	{
	  $photo=$_FILES['photo'];
	  $file_type=$_FILES['photo']['type'];
	  $file_name=$_FILES['photo']['name'];
	  $ext = pathinfo($file_name, PATHINFO_EXTENSION);
	  $file_temp_name=$_FILES['photo']['tmp_name'];
	  $file_size=$_FILES['photo']['size'];
	  for ($i=0; $i < $types_arr_length; $i++) { 
	  		if($types[$i]==$file_type)
	  		{
	  			$check=1;
	  		}
	  }
	  if($check==1 && $file_size<=300000)
	  {
	    $new_file_name="images/fulls/f_".time("U").".".$ext;
	    $new_img_name="f_".time("U").".".$ext;
	    $upl_img=move_uploaded_file($file_temp_name, $new_file_name);
	    /*list($width,$height)=getimagesize($new_file_name);
	    if ($width > $height) {
	      $newheigh = $height/($width/$max_width);
	      $newwidth = $max_width;
	    }
	    else
	    {
	      $newwidth = $width/($height/$max_height);
	      $newheigh = $max_height;
	    }

	    $smallimage=imagecreatetruecolor($newwidth, $newheigh);
	    
	    $img_source=imagecreatefromjpeg($new_file_name);

	    $resized_img=imagecopyresampled($smallimage, $img_source, 0, 0, 0, 0, $newwidth, $newheigh, $width, $height);
	    imagejpeg($smallimage,$new_file_name);
	    imagepng($smallimage,$new_file_name);*/
	    
	  }
	}

	//$select = mysql_query("SELECT * FROM menus WHERE menu_name='$ParentName'");
	//$result = mysql_fetch_array($select);
	//$menu_name = $result['id'];

	if($item_name == '' || $item_desc == '' || $item_price == '' || $parent_id == '' || $file_size>=300000 || $check==0){ 
		$msg="Can not add item";
		header("Location:add_item.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into menus(menu_name, parent_id, type, description, price, image) values('$item_name', '$parent_id', '2', '$item_desc' , '$item_price_in_cents' , '$new_file_name')");
		$msg="Item added successfully";
		header("Location:index.php?alert=$msg");
	}
?>