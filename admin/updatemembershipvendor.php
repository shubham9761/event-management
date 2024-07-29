<?php include "../scripts/database.php";?>
<?php
	$name = "";
	$email = "";
	$password = "";
	$query = "select * from vendor where name = '$_POST[name]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['userid'];
		$password= $row['password'];
        $membership=$row['membership'];
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
		<center><h4>Update membership</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="update_mem_final_vendor.php" method="post">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" value="<?php echo $name;?>" readonly>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" class="form-control" value="<?php echo $email;?>" readonly>
					</div>
                    <div class="form-group">
						<label for="membership">Current Membership:</label>
						<input type="text" name="membership" class="form-control" value="<?php echo $membership;?>" readonly>
					</div>
					<div class="form-group">
						<label for="updatemembership">Update New Membership:</label>
						    <select name="updatemembership" id="updatemembership"> 
                                <option value="6 months" selected>6 months</option> 
                                <option value="1 year">1 year</option> 
                                <option value="2 year">2 year</option>  
                            </select>
					</div>
					
					<button type="submit" name="update" class="btn btn-primary">Update</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
