<?php
session_start();
include "../content/connection.php";
if (isset($_GET['code'])) {
    $code = htmlentities($_GET['code']);
    $sqlCode = "SELECT * FROM `couponCode` where code = '$code'";
    $queryCode = mysqli_query($connect, $sqlCode);
    if (mysqli_num_rows($queryCode) > 0) {
        // echo "exist";
        $resData = mysqli_fetch_array($queryCode);
        $createdOn = $resData['createdOn'];
        $expiresOn = $resData['expiresOn'];
        $value = $resData['value'];
        $id = $resData['id'];
        $todayDate = date("Y-m-d");
        $validTill = date_create($expiresOn);
        $createdOn = date_create($todayDate);
        $isActive = date_diff($createdOn, $validTill);
        $isExpired = $isActive->format("%R%a");
         $_SESSION['promoApplied'] = true;
        if ($isExpired > 0) {
           
            $_SESSION['promoValue'] = $value;
            $_SESSION['promoId'] = $id;
            $_SESSION['code'] = $code;
            date_default_timezone_set("Asia/Kathmandu");
            $currentTime = date("Y-m-d h:i:s");
            $_SESSION['promoAppliedTime'] = $currentTime;
            $_SESSION['promoActiveShow'] = '
            <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <!-- code here  -->
            <small>' . $code . '</small>

        </div>
        <span class="text-success">+<i class="fa fa-inr"></i> ' . $value . '</span>';
        } else {
            $_SESSION['promoActiveShow'] = '<div class="text-danger">
            <h6 class="my-0">Promo code</h6>
            <!-- code here  -->
            <small>Code expired. Try another if you have </small>

        </div>
        <span class="text-danger">+<i class="fa fa-inr"></i>0</span>';
            // echo $throwBack;
        }
    } else {
        $_SESSION['promoActiveShow'] = '<div class="text-danger">
            <h6 class="my-0">Promo code</h6>
            <!-- code here  -->
            <small>Invalid code. Try another if you have </small>

        </div>
        <span class="text-danger">+<i class="fa fa-inr"></i>0</span>';
        // echo $throwBack;
        // echo "2";

    }
}
// echo "done";
?>