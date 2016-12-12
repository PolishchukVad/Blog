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
			<div class="main mainone">
				<div class = "add">
					<a class="btn btn-success" href="index.php"> Home</a> 
				</div>
				
				<div class="article articleone">
					<div class = "title titleone" >
							<h3><?= $articleget['h1'] ?> </h3>
					</div>
					<div class="date"><p><?= $articleget['date']?></p> </div>
					<div class="clearfix"></div>
					<div class="content contentone"><?= $articleget['content'] ?></div>
					<div class="clearfix"></div>
				</div>
					
			</div>
			<footer>Created by Vadim Polishchuk</footer>
		</div>
	</div>
</div>	
</body>
</html>