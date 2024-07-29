<?php include "../scripts/database.php";?>
<?php
	$query = "update vendor set membership ='$_POST[updatemembership]' where userid = '$_POST[email]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Added successfully...");
	window.location.href = "maintain_vendor.php";
</script>