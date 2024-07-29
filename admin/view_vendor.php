<?php include "../scripts/database.php";?>
<?php
	$name = "";
	$price = "";
	$query = "select * from vendor";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vendors</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Library Management System (LMS)</a>
			</div>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
		<center><h4>Vendors Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>UserID</th>
                            <th>Password</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['userid'];?></td>
                            <td><?php echo $row['password'];?></td>
						</tr>

					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
