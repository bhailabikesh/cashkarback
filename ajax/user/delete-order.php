<?php 
include "../../content/connection.php";
if (isset($_GET['oid'])) {
    $orderId = $_GET['oid'];
    $sqlDel = "DELETE FROM `orderlist` WHERE id ='$orderId'";
    $queryDel = mysqli_query($connect, $sqlDel);
    if ($queryDel) {
        echo "
    <div class='alert alert-success p-3'>
   Order Deleted Successfully
    </div>
    ";
    } else {
        echo "
    <div class='alert alert-danger p-3'>
   Unable to Delete Order
    </div>
    ";
    }
}else{
    echo "oid isnt passed";
}
?>