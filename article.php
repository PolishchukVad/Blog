<?php 

	require_once ("database.php");
	require_once ("models/articlemod.php");

	$connect = db_connect();
	$articleget = article_get($connect, $_GET['id']);
	include ("view/articleviewone.php");

 ?>