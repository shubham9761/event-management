<?php include "../scripts/database.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS | Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
    #signup{
        
        color: white;

    }
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../index.php">Library Management System (LMS)</a>
			</div>
		</div>
	</nav><br>
	<div class="row">
		<div class="col-md-8" id="main_content">
			<center><h3><u>Admin Login Form</u></h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="userid">User ID:</label>
					<input type="text" name="userid" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>	
			</form>
            <br><br>
            <button type="submit" name="signup" class="btn btn-primary"><a id="signup" style="text-decoration: none " href="admin_signup.php">Signup</a></button>
			<?php 
				if(isset($_POST['login'])){
					$query = "select * from admin where userid = '$_POST[userid]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['userid'] == $_POST['userid']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
				
						?>
		<script type="text/javascript">
			window.location.href = "admin_dashboard.php";
		</script>
		<?php
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
