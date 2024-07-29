<?php include "../scripts/database.php";?>
<?php
    $vendorname = $_SESSION['name'];
	$query = "update product set status = 'AVAILABLE',issuedto='' where name = '$_POST[name]' and vendorname = '$vendorname'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Request Accepted Succussfully");
	window.location.href = "vendor_dashboard.php";
</script>