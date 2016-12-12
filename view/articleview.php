<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/bootstrap.css">

	<script type="text/javascript" src="js/bootstrap.min.js"> </script>
	<script type="text/javascript" src="js/jquery-3.1.0.min"> </script>
	<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
	<meta charset="UTF-8">

	<title>SoftGrupe</title>
</head>
<body>
	<div class="bg">	
		<div class= "container">
			<div class="header"><h1>SoftGrupe</h1></div>
			<div class="main">
				<div class="login">
				</div>
				<div class = "add"><a class="btn btn-default" href="index.php?action=add">Add article</a></div>
				
				<?php foreach ($articleall as $a) :	 ?>

				<div class="article">
					<div class =  "title" >
						<div class="titleart"> 
							<a href="article.php?id=<?= $a['id'] ?>"> <?= $a['h1'] ?></a>
						</div>
						<div class="eddel">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<a class="glyphicon glyphicon-edit" href="index.php?action=edit&id=<?=$a['id']?>"></a>
						<i class="fa fa-times" aria-hidden="true"></i>
						<a class="glyphicon glyphicon-trash" onclick = "return confirm('Are you sure?')" href="index.php?action=delete&id=<?=$a['id']?>"></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="date"><p><?= $a['date']?></p> </div>
					<div class="clearfix"></div>
					
					<div class="content"><?=  $a['content']?></div>
					<div class="more"><a class = "btn btn-info" href="article.php?id=<?= $a['id']?>">Read more</a> </div>
					<div class="clearfix"></div>	
			</div>
				<hr></hr>
				<?php endforeach ?>
				<div class="pag">
				
					<?php for($x=1; $x<=$pages; $x++): ?>
						
						<a  href="?page=<?php echo $x; ?>" <?php 
						if ($page === $x) {
							echo 'class= "btn btn-primary"';
							}
						else {
							echo 'class = "btn btn-default"';
							} ?>><?php echo $x; ?></a>
					
				<?php endfor; ?>
				</div>	
			</div>
			<footer>Created by Vadim Polishchuk</footer>
		</div>
	</div>	
</body>
</html>