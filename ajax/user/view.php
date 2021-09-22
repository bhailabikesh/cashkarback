<?php 
include "../../content/connection.php";
$orderId = $_GET['oid'];
$sqlOrder = "SELECT * FROM orderlist where id = '$orderId'";
$queryOrder = mysqli_query($connect,$sqlOrder);
$resOrder = mysqli_fetch_array($queryOrder);
$warrantyStatus = $resOrder['warrantyStatus'];
$bodyCondition = $resOrder['bodyCondition'];
$screenCondition =$resOrder['screenCondition'];
$Accessories = $resOrder['Accessories'];
$problems = $resOrder['problems'];

?>
<div class="order-info-tbl row">
    <div class="col-lg-4 col-sm-12">
        <h4 class="heading-info-t">1. Warranty Status</h4>
        <?php 
        $warrantyInfo = "SELECT * FROM mblproblems where problemId = '$warrantyStatus'";
        $queryWarranty = mysqli_query($connect,$warrantyInfo);
        $resWarranty = mysqli_fetch_array($queryWarranty);
        $warrantyText = $resWarranty['txtDetails'];
        echo "Had ".$warrantyText.'.';
        ?>
    </div>
    <div class="col-lg-4 col-sm-12">
        <h4 class="heading-info-t">2. Body Status</h4>
        <?php 
        $warrantyInfo = "SELECT * FROM mblproblems where problemId = '$bodyCondition'";
        $queryWarranty = mysqli_query($connect,$warrantyInfo);
        $resData = mysqli_fetch_array($queryWarranty);
        $resTxt = $resData['txtDetails'];
        echo "Had ".$resTxt.'.';
        ?>
    </div>
    <div class="col-lg-4 col-sm-12">
        <h4 class="heading-info-t">3. Screen Status</h4>
        <?php 
        $warrantyInfo = "SELECT * FROM mblproblems where problemId = '$screenCondition'";
        $queryWarranty = mysqli_query($connect,$warrantyInfo);
        $resData = mysqli_fetch_array($queryWarranty);
        $resTxt = $resData['txtDetails'];
        echo "Had ".$resTxt.'.';
        ?>
    </div>
    <div class="col-lg-4 col-sm-12">
        <h4 class="heading-info-t">4. Accessories</h4>
        <?php 
        // echo '<pre>';
        $Accessories= explode('/',$Accessories);
        $accLength = count($Accessories);
        $x = 0;
        while ($x < $accLength) {
        //    var_dump($x);
            $AccessoriesId = $Accessories[$x];
            if (!empty($Accessories) and $AccessoriesId != '') {
            $warrantyInfo = "SELECT * FROM mblproblems where problemId = '$AccessoriesId'";
            $queryWarranty = mysqli_query($connect, $warrantyInfo);
            $resData = mysqli_fetch_array($queryWarranty);
            $resTxt = $resData['txtDetails'];
            echo "Had ".$resTxt.'.<br>';
        }
            $x++;
        }
        ?>
    </div>
    <div class="col-lg-4 col-sm-12">
        <h4 class="heading-info-t">5. Other Problme</h4>
        <?php 
        // echo '<pre>';
        $problems = explode('/',$problems);
        $accLength = count($problems);
        $x = 0;
        while ($x < $accLength) {
        //    var_dump($x);
            $problemsID = $problems[$x];
            if (!empty($problems) and $problemsID != '') {
            $warrantyInfo = "SELECT * FROM mblproblems where problemId = '$problemsID'";
            $queryWarranty = mysqli_query($connect, $warrantyInfo);
            $resData = mysqli_fetch_array($queryWarranty);
            $resTxt = $resData['txtDetails'];
            echo "Had ".$resTxt.'.<br>';
        }
            $x++;
        }
        ?>
    </div>
</div>
<style>
    .heading-info-t{
        font-size: 16px;
    }
</style>