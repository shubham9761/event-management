<?php include "../scripts/database.php";?>
<?php
	
	$userid = $_SESSION['name'];
	$email=$_SESSION['email'];
	#fetch data from database

	$query = "select * from cart where userid = '$userid'";
	$query_run = mysqli_query($connection,$query);
	$row = mysqli_fetch_assoc($query_run);
	if($row == NULL)
	{
		?>
		<script type="text/javascript">
			alert("Cart is Empty!");
			window.location.href = "user_dashboard.php";
		</script>
		<?php
	}
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
		font-weight: bolder;
	}
	tr:hover{
		background-color: coral;
	}
	/* select:nth-child(1){
		background-color: black;
		color: white;
	} */
	button{
		background-color: white;
		border: 2px solid black;
		font-size: large;
	}
	button:hover{
		background-color:black;
		color: white;
	}
	.grandtotal{
		padding: 10px;
		margin: 20px auto;
		display: flex;
		justify-content: space-between;
		font-size: x-large;
		border: 3px solid black;
		font-weight: bolder;
		background-color: coral;
	}
	.checkout{
		padding: 5px;
		margin: 60px auto;
		display: flex;
		justify-content: space-between;
		font-size: x-large;
		border: 3px solid black;
		font-weight: bolder;
		/* background-color: coral; */
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
				<form action="cart_update.php" method="post">
					<table>
						<tr>
							<th>Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
									<input type="hidden" name="cartid[<?php echo $row['cartid'];?>]" value="<?php echo $row['cartid'];?>">
							<tr>
							<td>
								<?php echo $row['name'];?>
								<input type="hidden" name="name" value="<?php echo $row['name'];?>">
								<!-- <input type="hidden" name="vendorid" value="<?php// echo $row['vendorid'];?>"> -->
								<input type="hidden" name="email" value="<?php echo $email;?>">
							</td>
							<td>
								&#8377;<?php echo $row['price'];?>
								<input type="hidden" name="price[<?php echo $row['cartid'];?>]" value="<?php echo $row['price'];?>">
							</td>
							<td>
								<select name="quantity[<?php echo $row['cartid'];?>]">
									<option class="fixed" value="<?php echo $row['quantity'];?>" selected readonly><?php echo $row['quantity'];?></option>
                        			<option value="1">1</option> 
                        			<option value="2">2</option> 
                        			<option value="3">3</option> 
                    			</select>
							</td>
							<td>
								&#8377;<?php echo $row['totalprice']?>
								<input type="hidden" name="totalprice" value="<?php echo $row['totalprice'];?>">
							</td>
							<td><button name="update" value="UPDATE">UPDATE</button>
								<br>
								<button name="delete" value="<?php echo $row['cartid'];?>">DELETE</button> 
								
								<!-- <button hidden name="deleteall" value="DELETE ALL">DELETE ALL</button> -->
							</td>
						</tr
						>

					<?php
						}
					?>	
					</table>

					<div class="grandtotal">
						GrandTotal &#8377;
						<?php
							$query = "select sum(totalprice) from cart where userid = '$userid'";
							$query_run = mysqli_query($connection,$query);
							$row = mysqli_fetch_assoc($query_run);
							$grandtotal = $row['sum(totalprice)'];
							echo $grandtotal;
						?>
					<input type="hidden" name="grandtotal" value="<?php echo $grandtotal;?>">
					<button name="deleteall" value="DELETE ALL">DELETE ALL</button>
					</div>
					<div class="">
						<div class=""><button class="checkout" name="checkout" value="checkout">PROCEED TO CHECKOUT</button></div>
					</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
