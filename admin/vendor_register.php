<?php include "../scripts/database.php";?>
<?php
	$query = "insert into vendor (name,userid,password) values('$_POST[name]','$_POST[userid]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "maintain_vendor.php";
</script>