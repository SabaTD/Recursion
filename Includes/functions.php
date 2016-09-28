<?php 

	function filtertext($var){
		if(trim($var) != ''){
			$string_menu_name = mysql_real_escape_string($var);
			$filterd_string_menu_name = trim ($string_menu_name);
			return $filterd_string_menu_name;
		}
		else {}
	}

?>