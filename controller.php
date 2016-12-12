<?php 
	$connect = db_connect();
	

	if (isset($_GET['action'])) {
	$action = $_GET['action'];
	}
	else {
		$action = "";
	}
	if ($action =="add") {
		if (!empty($_POST)) {
				article_new ($connect, $_POST['h1'], $_POST ['content']);
		}
		include ("view/articleadd.php");
	}
	
	elseif ($action == "delete") {
		$id = $_GET['id'];
		$article = article_delete($connect, $id);
		header("Location: index.php");
	}

	elseif ($action == "edit") {
		
	if(!isset($_GET['id'])){
		header("Location: index.php");
	}
	$id = (int)$_GET['id'];
	if (!empty($_POST) && $id > 0) {
		article_edit ($connect, $id, $_POST['h1'], $_POST['content']);
		header("Location: index.php");
	}
	$article = article_get($connect, $id);
	include ("view/articleedit.php");
	}

	else {

	$articleall = article_all_pag($connect);
	include ("view/articleview.php");
	}



 ?>