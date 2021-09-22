<?php 
$msg = '';
include "connection.inc.php";
if (isset($_GET['oid'])) {
    $orderId = $_GET['oid'];
    $sqlUpdate = "UPDATE `orderlist` SET `states`= 1 WHERE id = '$orderId'";
    $querySql = mysqli_query($connect,$sqlUpdate);
    if ($querySql) {
    header("location: order-list.php");
    }
}else{
    $msg = '<h2 class="text-error">
        403:Access Denied
    </h2><p class="text-error">Invalid access</p>';
}

?>
<style>
    .text-error{
        margin-left: 30%;
        font-size: 40px;
    }
</style>
<?php echo $msg;?>