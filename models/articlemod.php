<?php
	function clean($value = "") {
	    $value = trim($value);
	    $value = stripslashes($value);
	    $value = strip_tags($value);
	    $value = htmlspecialchars($value);
	    
	    return $value;
	}

	// function check_length($value = "", $min, $max) {
	//     $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
	//     return !$result;
	// }

	function article_new($connect, $h1, $content) {

		$h1 = trim($h1);
		$content = trim($content);
		$h1 = mysqli_real_escape_string($connect,$h1);
		$content = mysqli_real_escape_string($connect,$content);
		
		$query = "INSERT INTO news (h1, content) VALUES ('$h1','$content')";
		$result = mysqli_query($connect, $query);
		header('location:http://localhost/blog/');
		
		return true;
	}




	function article_all_pag($connect) {

		global $pages;
		global $page;
		global $perPage;
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$perPage =  4;

		if (isset($_GET['page'])) {
			$page=(int)$_GET['page'];
		}
		else{
			$start = 1;
		}


		if ($page > 1) {
			$start = ($page * $perPage) - $perPage;
		}
		else {
			$start = 0;
		}
			
		$query = "SELECT * FROM news ORDER BY date DESC LIMIT $start, $perPage ";
		$myquery = mysqli_query($connect, $query);
		$n = mysqli_num_rows($myquery);
				$articleall = array();

				for ($i=0; $i < $n; $i++) { 
					$row = mysqli_fetch_assoc($myquery);
					$articleall[] = $row;
				}
		

		$totalquery = "SELECT * FROM news";
		$all = mysqli_query ($connect, $totalquery);
		$total = mysqli_num_rows($all);

		$pages = ceil($total / $perPage);
		
		return $articleall;
	
	}


	function article_get ($connect, $id_article) {
		$query = sprintf ("SELECT * FROM news WHERE id=%d",(int)$id_article);
		$result = mysqli_query($connect,$query);

		if (!$result) {
			echo "error".mysqli_error($connect);
		}

		$article = mysqli_fetch_assoc($result);

		
		return $article;
	}

	function article_delete ($connect, $id) {
		$id = (int)$id;
		if ($id == 0) {
			return false;
		}
		$query = "DELETE FROM news WHERE id = '$id'";
		$result = mysqli_query($connect, $query);
		if (!$result) {
			die(mysqli_error($connect));
		}
		return mysqli_affected_rows($connect);
	}

	function article_edit ($connect, $id, $h1, $content) {
		$title = trim($h1);
		$content = trim($content);
		$h1 = mysqli_real_escape_string($connect,$h1);
		$content = mysqli_real_escape_string($connect,$content);
		$id = (int)$id;
	
		$query = "UPDATE news SET h1 = '$h1', content = '$content' , date = CURRENT_TIMESTAMP WHERE id =$id ";
		$result = mysqli_query($connect, $query);

		return mysqli_affected_rows($connect);
	}
	

?>

