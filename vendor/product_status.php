<?php include "../scripts/database.php";?>
<?php
    $vendorname = $_SESSION['name'];
	
	$name = "";
	$price = "";
	$query = "select * from product where vendorname = '$vendorname'";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-color: cornsilk;
	}
	table{
		width: 100%;
	}
	table,th,td{
		border: 2px solid;
		text-align: center;
		padding: 10px;
	}
	th{
		background-color: coral;
		height: 50px;
	}
	td{
		height: 30px;
	}
	tr:hover{
		background-color: coral;
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
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
		<center><h4>Product Details</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table>
						<tr>
							<th>Name</th>
							<th>Price</th>
                            <th>Status</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['price'];?></td>
                            <td><?php echo $row['status'];?></td>
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
