<?php include "../scripts/database.php";?>
<?php
	$query = "update user set membership ='$_POST[membership]' where userid = '$_POST[email]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Added successfully...");
	window.location.href = "maintain_user.php";
</script>