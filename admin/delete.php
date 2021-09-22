<?php 
include "connection.inc.php";
if (isset($_GET['oid'])) {
    $orderid = $_GET['oid'];
    $sqlUpdate = "DELETE FROM `orderlist` WHERE id = '$orderid'";
    $querySql = mysqli_query($connect,$sqlUpdate);
    if ($querySql) {
        // echo "updated";
        header("location:order-list.php");
    }else{
        header("location:order-list.php");
    }
}else{
    $msg = '<h2 class="text-error">
        403:Access Denied
    </h2><p class="text-error">Invalid access</p>';
}

?>