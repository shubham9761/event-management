<?php include "../scripts/database.php";?>
<?php
	
	$vendorid = $_SESSION['name'];
	$email=$_SESSION['email'];
	#fetch data from database

	$name = "";
	$price = "";
	$query = "select name,issuedto from product where vendorname = '$vendorid' and status='UNAVAILABLE'";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="user_style.css"> -->
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
	/* select:nth-child(1){
		background-color: black;
		color: white;
	} */
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
		<center><h4>User Requests</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="user_request.php" method="post">
					<table>
						<tr>
							
							<th>Product Name</th>
							<th>Issue TO</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td>
								<?php echo $row['name'];?>
								<!-- <input type="hidden" name="orderid" value="<?php// echo $row['orderid'];?>"> -->
							</td>
                            <td>
                                <?php echo $row['issuedto'];?>
                                <!-- <input type="hidden" name="name" value="<?php// echo $row['name'];?>"> -->
                            </td>
                            <!-- <td><?php// echo $row['email'];?></td>
                            <td><?php// echo $row['number'];?></td>
                            <td><?php// echo $row['address'];?></td>
                            <td><?php// echo $row['totalvalue'];?></td>
                            <td><?php// echo $row['paymentmethod'];?></td>
							<td>
                                <button name="approve" value="approve">APPROVE</button><br>
								<button name="deny" value="deny">DENY</button>
							</td> -->
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
