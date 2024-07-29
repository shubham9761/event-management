<?php include "../scripts/database.php";?>
<?php
    $userid=$_SESSION['name'];
    // $email=$_POST[email];
    // $totalprice = $_POST[quantity]*$_POST[price];

    if(isset($_POST['update']))
    {
        foreach ($_POST['cartid'] as $x => $y)
        {
            $quantity = $_POST['quantity'][$x];
            $totalprice = $_POST['quantity'][$x]*$_POST['price'][$x];
            $query = "update cart set quantity = '$quantity',totalprice = '$totalprice' where cartid = '$x'";
            $query_run = mysqli_query($connection,$query);
        }
        // $query = "update cart set quantity = '$_POST[quantity]',totalprice = '$totalprice' where userid = '$userid' AND name = '$_POST[name]'";
        // $query_run = mysqli_query($connection,$query);

        ?>
        <script type="text/javascript">
	    alert("Updation successfull");
	    window.location.href = "cart.php";
        </script>
        <?php
    }
    if(isset($_POST['delete']))
    {
	   // $query = "delete from cart where userid = '$userid' AND name = '$_POST[name]'";
         $query = "delete from cart where cartid = $_POST[delete]";
	    $query_run = mysqli_query($connection,$query);
        ?>
        <script type="text/javascript">
	    alert("Product Deleted successfully...");
	    window.location.href = "cart.php";
        </script>
        
        <?php
    }
    if(isset($_POST['deleteall']))
	{
		$query = "delete from cart where userid = '$userid'";
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
		alert("Products Deleted successfully...");
	    window.location.href = "cart.php";
		</script>
						
	    <?php
	}
    if(isset($_POST['checkout']))
	{
		$query = "insert into orders (name,email,totalvalue) values('$userid','$_POST[email]','$_POST[grandtotal]')";
	    $query_run = mysqli_query($connection,$query);
        ?>
        <script type="text/javascript">
        alert("Registration successfull...You may Login now !!");
	    window.location.href = "checkout.php";
        </script>

						
	    <?php
	}
?>
    
