<?php include "../scripts/database.php";?>
<?php
	$name = "";
	$query = "select * from user";
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="select_style.css">
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
</style>
<body>
	
	
	<div class="row">
		
    <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="edit_user_profile.php" method="post">
                <div class="form-group">
                    <label for="name">Users:</label>
                    <select name="name" id="category"> 
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option> 

					<?php
						}
					?>	
                    </select>
                </div>

                
				<button type="submit" name="update" class="btn btn-primary">Update</button>	
				</form>
				
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>