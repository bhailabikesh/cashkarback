<?php 
include "../../content/connection.php";
$newDate = $_GET['new-date'];
$orderId = $_GET['oid'];
$sqlUpdate = "UPDATE orderlist SET `pickUpDate`='$newDate' where id = '$orderId'";
$queryUpdate = mysqli_query($connect,$sqlUpdate);
if($queryUpdate){
    echo "
    <div class='alert alert-success p-3'>
    Schedule date updated for ".$newDate."
    </div>
    ";
}else{
    echo "
    <div class='alert alert-danger p-3'>
   Unable to re-schedule
    </div>
    ";
}
?>
