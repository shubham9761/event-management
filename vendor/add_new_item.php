<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-color: cornsilk;
	}
	#main_content{
		margin: 0 auto;
		padding: 50px;
		background-color: cornsilk;
	}
	#side_bar{
		background-color: cornsilk;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
		        <a class="nav-link" href="product_status.php">Product Status</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="request_item.php">Request Item</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="view_item.php">View Item</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	
	
	<div class="row">
		
		<div class="col-md-8" id="main_content">
			<center><h3><u>Add Item</u></h3></center>
			<form action="item_added.php" method="post">
				<div class="form-group">
					<label for="name">  Product name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label for="password">Product Price:</label>
					<input type="number" name="price" class="form-control" required>
				</div>

				<!-- <div class="form-group">
					<label for="img">Product image:</label><br>
					<input type="file" name="img" accept="image/*"  required>
				</div> -->
                
                <br><br>
				<button type="submit" class="btn btn-primary">Add the product</button>	
			</form>
		</div>
	</div>
</body>
</html>