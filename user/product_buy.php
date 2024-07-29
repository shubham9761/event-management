<?php include "../scripts/database.php";?>
<?php

	$query = "insert into productbuy values('$_POST[name]','$_POST[quantity]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Buying Request Successfully Accepted !!");
	window.location.href = "cart.php";
</script>