<?php 
	require_once ("models/articlemod.php");

	function db_connect () { 
	
		$connect = mysqli_connect('localhost','root','','blog');
			if (!$connect) {
				echo "error";
			}

			if (!mysqli_set_charset($connect, "utf8")) {
		 		printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($connect));
			} 
		

		return $connect;
	}

	