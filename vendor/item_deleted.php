<?php include "../scripts/database.php";?>
<?php
	$query = "delete from product where name = '$_POST[name]' and vendorname = '$vendorname'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Product Deleted successfully...");
	window.location.href = "your_item.php";
</script>