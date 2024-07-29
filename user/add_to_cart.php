<?php include "../scripts/database.php";?>
<?php
    $userid=$_SESSION['name'];
	$prodname = "$_POST[addtocart]";
	$query = "select name from cart where name = '$prodname' and vendorid = '$_POST[vendorid]'";
	$query_run = mysqli_query($connection,$query);
	$row = mysqli_fetch_assoc($query_run);
	if($row == NULL)
	{
		$query = "select price from product where name = '$prodname' and vendorname = '$_POST[vendorid]'";
		$query_run = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($query_run);
		$prodprice = $row['price'];
		$query = "insert into cart (userid,vendorid,name,price,totalprice) values('$userid','$_POST[vendorid]','$prodname','$prodprice','$prodprice')";
		$query_run = mysqli_query($connection,$query);
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Product Already Added in Cart");
			window.location.href = "vendor.php";
		</script>
		<?php
	}
?>
<script type="text/javascript">
	alert("Product Successfully Added to Cart");
	window.location.href = "vendor.php";
</script>