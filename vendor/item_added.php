<?php include "../scripts/database.php";?>
<?php
	
	$vendorname = $_SESSION['name'];

	$query = "insert into product (name,price,vendorname) values('$_POST[name]','$_POST[price]','$vendorname')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Product added successfully !!");
	window.location.href = "add_new_item.php";
</script>