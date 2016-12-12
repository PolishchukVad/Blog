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

					<form class="form-horizontal formadd" role="form" method="post" action="index.php?action=<?=$_GET['action']?>" enctype="multipart/form-data">
						<div class="form-group">
						    <label  class="col-sm-2 control-label">Title</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="h1"  placeholder="Title" required>
						    </div>
						</div>
							<div class="form-group">
						    	<label class="col-sm-2 control-label">Content</label>
						    	<div class="col-sm-8">
						      	<textarea name="content" class="form-control"  cols="20" rows="20" ></textarea>
						    	</div>
						</div>
						<div class="row">
							
							</div>
						<div class="submit">
							<input class="btn btn-success" type="submit" value = "Create post">
							<a href="index.php" class="btn btn-danger">Cancel</a>
						</div>
					</form>
				</div>
				<footer>Created by Vadim Polishchuk</footer>
			</div>
		</div>
</body>
</html>
