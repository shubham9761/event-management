<?php include "../scripts/database.php";?>
<?php
	$name = "";
	$query = "select * from product where vendorname = '$_POST[shop_item]' and status='AVAILABLE'";
?>


<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" href="user_style.css">
	<!-- <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css"> -->
  	<!-- <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script> -->
  	<!-- <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script> -->
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
</style>
<body>
	<div class="main">
		<div class="submain">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">

			<div class="first">
				<div class="home abox">HOME</div>
				<div class="logout abox"><a href="logout.php">Logout</a></div>
			</div>
			<div class="sec">
				<div class="welcome abox">Vendor : <?php echo $_POST['shop_item'];?></div>
			</div>
			
			<!-- <div class="navbar-header">
				<a class="navbar-brand">Maintainance Menu</a>
			</div> -->
			<form action="add_to_cart.php" method="post">
			<div class="vendorslist form-group">
                    <?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
					?>
							<div class="abox form-group">
                                <?php echo $row['name'];?>
								<input type="number" class="form-control" name="price" value="<?php echo $row['price'];?>" hidden>
								<input type="hidden" class="form-control" name="vendorid" value="<?php echo $_POST['shop_item'];?>">
								<br><br>
								&#8377;<?php echo $row['price'];?>
                                <button name="addtocart" class="smallbox form-control" value="<?php echo $row['name'];?>">Add To Cart</button>
                            </div>

					<?php
						}
					?>	
			</div>
			</form>
		    <!-- <ul class="nav navbar-nav navbar-right">
              <li class="nav-item">
		        <a class="nav-link" href="view_user.php">View User</a>
		      </li>
              <li class="nav-item">
		        <a class="nav-link" href="view_vendor.php">View Vendor</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="addupdate_user.php">Add User</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="addupdate_vendor.php">Add Vendor</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul> -->
		</div>
	</nav><br>
		</div>
	

	</div>
	
</body>
</html>
