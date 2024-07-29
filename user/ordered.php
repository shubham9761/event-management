<?php include "../scripts/database.php";?>
<?php
  
    $userid=$_SESSION['name'];
    $email=$_SESSION['email'];
    $totalprice = $_POST['quantity']*$_POST['price'];


    if(isset($_POST['order']))
    {
        $query = "update orders set number = '$_POST[number]',address = '$_POST[address]',paymentmethod = '$_POST[paymentmethod]' where orderid = '$_POST[orderid]'";
        $query_run = mysqli_query($connection,$query);
        $query = "update product set status = 'UNAVAILABLE',issuedto  = '$userid' where name in (select name from cart where userid = '$userid')";
        $query_run = mysqli_query($connection,$query);
        $query = "delete from cart where userid = '$userid'";
        $query_run = mysqli_query($connection,$query);
        ?>
        <script type="text/javascript">
	    alert("Thankyou...Order Successful");
	    window.location.href = "order_status.php";
        </script>
        <?php
    }
    if(isset($_POST['cancel']))
    {
	    $query = "delete from orders where orderid = '$_POST[orderid]'";
	    $query_run = mysqli_query($connection,$query);
        ?>
        <script type="text/javascript">
	    alert("Product Deleted successfully...");
	    window.location.href = "cart.php";
        </script>
        
        <?php
    }

?>
    
