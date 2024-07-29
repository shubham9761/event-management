<?php include "../scripts/database.php";?>
<?php
	$query = "update product set name = '$_POST[name]',price = '$_POST[price]' where id = '$_POST[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "your_item.php";
</script>