<?php 
include "connection.inc.php";
if (isset($_GET['id'])) {
    $orderid = $_GET['id'];
    $sqlUpdate = "DELETE FROM `lead` WHERE id = '$orderid'";
    $querySql = mysqli_query($connect,$sqlUpdate);
    if ($querySql) {
        // echo "updated";
        header("location:uncomplete-order.php");
    }else{
        header("location:uncomplete-order.php");
    }
}else{
    $msg = '<h2 class="text-error">
        403:Access Denied
    </h2><p class="text-error">Invalid access</p>';
}

?>