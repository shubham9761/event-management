<?php include "../scripts/database.php";?>
<?php
	$query = "insert into user(name,userid,password) values('$_POST[name]','$_POST[userid]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "user_login.php";
</script>