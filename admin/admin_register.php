<?php include "../scripts/database.php";?>
<?php
	$query = "insert into admin values('$_POST[name]','$_POST[userid]','$_POST[password]','$_POST[category]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "admin_login.php";
</script>