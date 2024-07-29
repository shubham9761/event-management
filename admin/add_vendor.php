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
	#main_content{
		padding: 50px;
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	.box{
		margin: 7% auto;
	}
	#login{
		color:white;
	}
</style>
<body>
	
	
	<div class="row">
		
		<div class="col-md-8 box" id="main_content">
			<center><h3><u>Vendor Registration Form</u></h3></center>
			<form action="vendor_register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="userid">Email ID:</label>
					<input type="email" name="userid" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>	
			</form>
			<br><br>
			<button type="submit" name="login" class="btn btn-primary"><a id="login" style="text-decoration: none " href="maintain_vendor.php">Back</a></button>
		</div>
	</div>
</body>
</html>