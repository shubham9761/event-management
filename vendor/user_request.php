<?php include "../scripts/database.php";?>
<?php
    $vendorname=$_SESSION['name'];
    $email=$_SESSION['email'];
   

    if(isset($_POST['approve']))
    {
        $query = "update orders set orderstatus = 'DELIVERED' where orderid = '$_POST[orderid]'";
        $query_run = mysqli_query($connection,$query);
        $query = "update product set status = 'UNAVAILABLE',requestedby='',issuedto='$_POST[name]' where requestedby = '$_POST[name]' and vendorname = '$vendorname'";
        $query_run = mysqli_query($connection,$query);
        ?>
        <script type="text/javascript">
	    alert("Transaction Successful");
	    window.location.href = "transaction.php";
        </script>
        <?php
    }
    if(isset($_POST['deny']))
    {
	    $query = "update orders set orderstatus = 'REJECTED' where orderid = '$_POST[orderid]'";
	    $query_run = mysqli_query($connection,$query);
        $query = "update product set status = 'AVAILABLE',requestedby='',issuedto='' where requestedby = '$_POST[name]' and vendorname = '$vendorname'";
        $query_run = mysqli_query($connection,$query);
        ?>
        <script type="text/javascript">
	    alert("Transaction Successful");
	    window.location.href = "transaction.php";
        </script>
        
        <?php
    }
    
?>
    
