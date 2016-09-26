<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("products") or die(mysql_error());;
	
	if(isset($_POST["item_name"])){ $item_name = $_POST["item_name"]; }
	if(isset($_POST["item_desc"])){ $item_desc = $_POST["item_desc"]; }
	if(isset($_POST["item_price"])){ $item_price = $_POST["item_price"]; }
	if(isset($_POST["ParentName"])){ $ParentName = $_POST["ParentName"]; }
	$item_price_in_cents = $item_price * 100;

	$max_height = 400;
	$max_width = 500;
	if(isset($_FILES['photo']))
	{
	  $photo=$_FILES['photo'];
	  $file_type=$_FILES['photo']['type'];
	  $file_name=$_FILES['photo']['name'];
	  $file_temp_name=$_FILES['photo']['tmp_name'];
	  $file_size=$_FILES['photo']['size'];

	  if($file_type=="image/jpeg")
	  {
	    $new_file_name="images/fulls/f_".time("U").".jpg";
	    $new_img_name="f_".time("U").".jpg";
	    $upl_img=move_uploaded_file($file_temp_name, $new_file_name);
	    list($width,$height)=getimagesize($new_file_name);
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
	    
	  }
	}

	//$select = mysql_query("SELECT * FROM menus WHERE menu_name='$ParentName'");
	//$result = mysql_fetch_array($select);
	//$menu_name = $result['id'];

	if($item_name == '' || $item_desc == '' || $item_price == ''){ 
		$msg="Can not add item";
		header("Location:add_item.php?alert=$msg");
	}
	else{ 
		$ins=mysql_query("insert into menus(menu_name, parent_id, type, description, price, image) values('$item_name', $_POST[ParentName], '2', '$item_desc' , '$item_price_in_cents' , '$new_file_name')");
		$msg="Item added successfully";
		header("Location:index.php?alert=$msg");
	}
?>