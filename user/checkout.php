<?php include "../scripts/database.php";?>
<?php
	
    $userid=$_SESSION['name'];
    // $email=$_SESSION['email'];
	#fetch data from database
	
	$name = "";
    $email="";
    $totalvalue = "";
    $paymentmethod = "";
    $orderid = "";
	$query = "select * from orders where name = '$userid'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
        $email = $row['email'];
		$totalvalue = $row['totalvalue'];
        $paymentmethod = $row['paymentmethod'];
        $orderid = $row['orderid'];
        // $id = $row['id'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br><br><br><br><br>
		<center><h4>CHECKOUT PAGE</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="ordered.php" method="post">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" value="<?php echo $name;?>" readonly>
					</div>
                    <div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" value="<?php echo $email;?>" readonly>
					</div>
                    <div class="form-group">
						<label for="number">Mobile Number:</label>
						<input type="number" name="number" class="form-control" min="1000000000" max="10000000000" required>
					</div>
                    <div class="form-group">
						<label for="address">Address: </label>
						<input type="text" class="form-control" name="address" required>
					</div>
					<div class="form-group">
						<label for="totalvalue">Price:</label>
						<input type="number" name="totalvalue" class="form-control" value="<?php echo $totalvalue;?>" readonly>
					</div>
                    <div class="form-group">
                        <label for="paymentmethod">Payment Mode:</label>
                        <select name="paymentmethod" class="form-control">
									<option value="<?php echo $paymentmethod;?>" selected><?php echo $paymentmethod;?></option>
                        			<option value="UPI">UPI</option> 
                        </select>
                    </div>
                    <div class="form-group">
						<input type="hidden" name="orderid" class="form-control" value="<?php echo $orderid;?>">
					</div>
					<button type="submit" name="order" class="btn btn-primary">Order</button>
                    <button type="submit" name="cancel" class="btn btn-primary">Cancel</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
