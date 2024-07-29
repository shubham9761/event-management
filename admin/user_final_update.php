<?php include "../scripts/database.php";?>
<?php
	$query = "update user set name = '$_POST[name]',password = '$_POST[password]' where userid = '$_POST[email]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "maintain_user.php";
</script>