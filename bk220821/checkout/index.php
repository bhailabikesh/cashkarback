<?php
session_start();
ob_start();
include "../content/connection.php";
include "../content/function.inc.php";
if (!(isset($_SESSION['USER-LOGIN']))) {
    header("location:https://cashkar.in/register?cart=true");
} else {
    $userID = $_SESSION['USER-LOGIN'];
if(isset($_SESSION['METHOD']) && isset($_SESSION['STORE_ID'])){
    if($_SESSION['METHOD'] == 'store' && $_SESSION['STORE_ID'] != ''){
        header("location:https://cashkar.in/store-checkout/");
    }
}

if (isset($_SESSION['MODEL_ID'])) {
//    echo $_SESSION['MODEL_ID'];
    $modelId = $_SESSION['MODEL_ID'];
    $getModelData = "SELECT * FROM model where id = '$modelId'";
    $queryModelData = mysqli_query($connect, $getModelData);
    $resModelData = mysqli_fetch_array($queryModelData);
    $modelName = $resModelData['model_name'];
    $img = $resModelData['img'];
    $price = $resModelData['price'];
    $cat = $resModelData['category'];
    $brandName = $resModelData['brand'];
    $storage = $resModelData['storage'];
    $ram = $resModelData['ram'];
    $warranty0To3 = $resModelData['0To3Warranty'];
    $warranty3To6 = $resModelData['3To6Warranty'];
    $warranty6To11 = $resModelData['6To11Warranty'];
    $noWarranty = $resModelData['noWarranty'];
    $scratchlessBody = $resModelData['scratchlessBody'];
    $goodBody = $resModelData['good'];
    $averageBOdy = $resModelData['average'];
    $bellowAverage = $resModelData['bellowAverage'];
    $screenScratchless = $resModelData['screenScratchless'];
    $crackedScreen = $resModelData['crackedScreen'];
    $blank = $resModelData['blank/notWorking'];
    $lines = $resModelData['lines/spots/dc'];
    $scratchOnScreen = $resModelData['scratchesOnScreen'];
    $fCam = $resModelData['frontCamera'];
    $bCam = $resModelData['backCamera'];
    $battery = $resModelData['battery'];
    $sensor = $resModelData['fingerSensor'];
    $faceID = $resModelData['faceId'];
    $bluetooth = $resModelData['bluetooth/wifi'];
    $bentPhone = $resModelData['bentPhone'];
    $display = $resModelData['displayChanged'];
    $speaker = $resModelData['speakerProblem'];
    $mic = $resModelData['MICproblem'];
    $network = $resModelData['networkProblem'];
    $charging = $resModelData['chargingProblem'];
    $backGlassBroken = $resModelData['backGlassBroken'];
    $nanCharger = $resModelData['notHavingCharger'];
    $nanEarphone = $resModelData['notHavingEarphones'];
    $nanBox = $resModelData['notHavingBox'];
    $nanBill = $resModelData['notHavingBill'];

    // checking all the user's selection
    $doesDeviceSwitchOn = $_SESSION['DOES-SWITCH-ON'];
    // checking accessories 
    if (isset($_SESSION['accessories'])) {
        if (isset($_SESSION['BILL'])) {
            $accessoriesArray = '/' . $_SESSION['BILL'] . '/';
        } else {
            $accessoriesArray = '/';
        }
        if (isset($_SESSION['CHARGER'])) {
            $accessoriesArray = $accessoriesArray . $_SESSION['CHARGER'] . '/';
        }
        if (isset($_SESSION['EARPHONE'])) {
            $accessoriesArray = $accessoriesArray . $_SESSION['EARPHONE'] . '/';
        }
        if (isset($_SESSION['BOX'])) {
            $accessoriesArray = $accessoriesArray . $_SESSION['BOX'] . '/';
        } else {
            $accessoriesArray = $accessoriesArray;
        }
        
        $accessories = $accessoriesArray;
        $accessoriesArr = explode('/',$accessoriesArray);
        if(!(in_array(13,$accessoriesArr))){
            $priceToShowAcc = $price - $nanCharger;
        }else{
            $priceToShowAcc = $price;
        }
        if(!(in_array(14,$accessoriesArr))){
            $priceToShowAcc = $priceToShowAcc - $nanEarphone;
        }else{
            $priceToShowAcc = $priceToShowAcc;
        }
        if(!(in_array(15,$accessoriesArr))){
            $priceToShowAcc = $priceToShowAcc - $nanBox;
        }
        else{
            $priceToShowAcc = $priceToShowAcc;
        }
        if(!(in_array(16,$accessoriesArr))){
            $priceToShowAcc = $priceToShowAcc - $nanBill;
        }else{
            $priceToShowAcc = $priceToShowAcc;
        }
        $priceToShow = $priceToShowAcc;
        // echo '<br>'.$priceToShow.'<br>';
    }
    // warranty case
    if (isset($_SESSION['0-3'])) {
        $warranty = $_SESSION['0-3'];
    }
    if (isset($_SESSION['3-6'])) {
        $warranty = $_SESSION['3-6'];
    }
    if (isset($_SESSION['6-11'])) {
        $warranty = $_SESSION['6-11'];
    }
    if (isset($_SESSION['no'])) {
        $warranty = $_SESSION['no'];
    }
    // echo $warranty;
    if($warranty == '0'){
        $priceToShow = $priceToShow - $noWarranty;
    }
    if($warranty == '1'){
        $priceToShow = $priceToShow - $warranty0To3;
    }
    if($warranty == '2'){
        $priceToShow = $priceToShow - $warranty3To6;
    }
    if($warranty == '3'){
        $priceToShow = $priceToShow - $warranty6To11;
    }
    // echo $priceToShow.'<br>';
    // body case
    if (isset($_SESSION['overAllBodyCase'])) {
        $body = $_SESSION['overAllBodyCase'];
        if($body == '4'){
            $priceToShow = $priceToShow - $scratchlessBody;
        }
        if($body == '5'){
            $priceToShow = $priceToShow - $goodBody;
        }
        if($body == '6'){
            $priceToShow = $priceToShow - $averageBOdy;
        }
        if($body == '7'){
            $priceToShow = $priceToShow - $bellowAverage;
        }
    }
    // echo $priceToShow.'<br>';
    // screen case 
    if (isset($_SESSION['screenCondition'])) {
        $screen = $_SESSION['screenCondition'];
    }
    if($screen == '8'){
        $priceToShow = $priceToShow - $screenScratchless;
    }
    if($screen == '9'){
        $priceToShow = $priceToShow - $lines;
    }
    if($screen == '10'){
        $priceToShow = $priceToShow - $blank;
    }
    if($screen == '11'){
        $priceToShow = $priceToShow - $crackedScreen;
    }
    if($screen == '12'){
        $priceToShow = $priceToShow - $scratchOnScreen;
    }
    // echo '<br>'.$priceToShow;
    //other problems
    if (!(isset($_SESSION['noProblem']))) {
        if (isset($_SESSION['backCamera'])) {
            $problem1 = '/' . $_SESSION['backCamera'] . '/';
        } else {
            $problem1 = '/';
        }
        if (isset($_SESSION['fingerprintSensor'])) {
            $problem1 = $problem1 . $_SESSION['fingerprintSensor'] . '/';
        }
        if (isset($_SESSION['speaker-vibrator'])) {
            $problem1 = $problem1 . $_SESSION['speaker-vibrator'] . '/';
        }
        if (isset($_SESSION['faceSanner'])) {
            $problem1 = $problem1 . $_SESSION['faceSanner'] . '/';
        }
        if (isset($_SESSION['battery'])) {
            $problem1 = $problem1 . $_SESSION['battery'] . '/';
        }
        if (isset($_SESSION['wifi'])) {
            $problem1 = $problem1 . $_SESSION['wifi'] . '/';
        }
        if (isset($_SESSION['network'])) {
            $problem1 = $problem1 . $_SESSION['network'] . '/';
        }
        if (isset($_SESSION['microphone'])) {
            $problem1 = $problem1 . $_SESSION['microphone'] . '/';
        }
        if (isset($_SESSION['displayChanged'])) {
            $problem1 = $problem1 . $_SESSION['displayChanged'] . '/';
        }
        if (isset($_SESSION['chargingProblem'])) {
            $problem1 = $problem1 . $_SESSION['chargingProblem'] . '/';
        }
        if (isset($_SESSION['bluetooth'])) {
            $problem1 = $problem1 . $_SESSION['bluetooth'] . '/';
        }
        if (isset($_SESSION['backGlass'])) {
            $problem1 = $problem1 . $_SESSION['backGlass'] . '/';
        }
        if (isset($_SESSION['frontCamera'])) {
            $problem1 = $problem1 . $_SESSION['frontCamera'] . '/';
        } else {
            $problem1 = $problem1;
        }
        $problems = $problem1;
        $problemArr = explode('/',$problems);
        if(in_array(17 ,$problemArr)){
            $priceToShow = $priceToShow - $fCam;
        }
        if(in_array(18 ,$problemArr)){
            $priceToShow = $priceToShow - $bCam;
        }
        if(in_array(19 ,$problemArr)){
            $priceToShow = $priceToShow - $battery;
        }
        if(in_array(20 ,$problemArr)){
            $priceToShow = $priceToShow - $sensor;
        }
        if(in_array(21 ,$problemArr)){
            $priceToShow = $priceToShow - $faceID;
        }
        if(in_array(22 ,$problemArr)){
            $priceToShow = $priceToShow - $bluetooth;
        }
        if(in_array(23 ,$problemArr)){
            $priceToShow = $priceToShow - $bentPhone;
        }
        if(in_array(24 ,$problemArr)){
            $priceToShow = $priceToShow - $display;
        }
        if(in_array(25 ,$problemArr)){
            $priceToShow = $priceToShow - $speaker;
        }
        if(in_array(26 ,$problemArr)){
            $priceToShow = $priceToShow - $mic;
        }
        if(in_array(27 ,$problemArr)){
            $priceToShow = $priceToShow - $network;
        }
        if(in_array(28 ,$problemArr)){
            $priceToShow = $priceToShow - $charging;
        }
        if(in_array(29 ,$problemArr)){
            $priceToShow = $priceToShow - $backGlassBroken;
        }
        $deducted_amt = $price - $priceToShow;
        if($priceToShow <= 0){
            // redirect if conditional price is less than zero
            header("location:https://cashkar.in/sorry");
        }
        // echo $deducted_amt;
    }
    // echo $problems;
    // phone number 
    if (isset($_SESSION['phn'])) {
        $phone = $_SESSION['phn'];
    }
    if (isset($_SESSION['promoApplied'])) {
        $showPriceAfterPromo = $priceToShow + $_SESSION['promoValue'];
        $_SESSION['finalAmt'] = $showPriceAfterPromo;
    
        $final_amt = $_SESSION['finalAmt'];
    } else {
        $final_amt =  $priceToShow;
    }
    
     if(!isset($_SESSION['PURCHASE-KEY'])){
     $sqlKey = "SELECT * FROM orderlist";
     $queryKey = mysqli_query($connect,$sqlKey);
     $resKey = mysqli_fetch_array($queryKey);
     $sEssionId = $resKey['id'];
     $byUserIdSession = $userID;
     $tokenKey = 'CK-MO-MUM-'.$sEssionId.'-'.$byUserIdSession.'-'.rand(10,100);
     $_SESSION['PURCHASE-KEY'] = $tokenKey;
         $sqlOrder = "INSERT INTO `lead`(`brand`, `category`, `model_id`, `storage`, `ram`,`original_price`, `warrantyStatus`, `bodyCondition`, `screenCondition`, `Accessories`, `problems`, `deductedAmount`, `finalPrice`, `byUser`, `phoneNumber`, `tokenKey`) 
               VALUES ('$brandName','$cat','$modelId','$storage','$ram','$price','$warranty','$body','$screen','$accessories','$problems','$deducted_amt','$final_amt','$userID','$phone','$tokenKey')";
        $queryOrder = mysqli_query($connect, $sqlOrder);
     }
    $tokenKey = $_SESSION['PURCHASE-KEY'];
        if($priceToShow <= 0){
            // redirect if conditional price is less than zero
            header("location:https://cashkar.in/sorry");
        }
    // submiting checkout form
    if (isset($_POST['checkout'])) {
        $address_opt = $_POST['apt/building'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];
        $area = $_POST['address'];
        $city = 'Mumbai';
        $landmark = $_POST['landmark'];
        $address = $address . ' ' . $landmark;
        $pickup = $_POST['pickupDate'];
        $finalAmT  = $_SESSION['finalAmt'];
        //payment method
        if (isset($_POST['paytmF']) and strlen($_POST['paytmF']) > 5) {
            $paymentMethod = "Paytm=>" . $_POST['paytmF'];
        } else if (isset($_POST['upiF']) and strlen($_POST['upiF']) > 5) {
            $paymentMethod = "UPI=>" . $_POST['upiF'];
        } else if (isset($_POST['gpayF']) and strlen($_POST['gpayF']) > 5) {
            $paymentMethod = "Gpay=>" . $_POST['gpayF'];
        } else if (isset($_POST['bankACNF']) and isset($_POST['acc-holderName']) and strlen($_POST['bankACNF']) > 5) {

            $bankName = $_POST['bankACNF'];
            $accName = $_POST['acc-holderName'];
            $accNumber = $_POST['bankACNoF'];
            $code = $_POST['icfcF'];
            $paymentMethod = 'Bank Name=>' . $bankName . '/' . 'Account holder name=>' . $accName . '/' . 'Account Number=>' . $accNumber . '/' . 'ICFC Code=>' . $code;
        } else {
            $paymentMethod = "Cash";
        }
       
        // echo $paymentMethod;
        $sqlOrder = "INSERT INTO `orderlist`(`brand`, `category`, `model_id`, `storage`, `ram`, `address`, `opt_address`,`paymentMethod`, `city`, `zip`,`addressSavedBy`,`original_price`, `warrantyStatus`, `bodyCondition`, `screenCondition`, `Accessories`, `problems`, `deductedAmount`, `finalPrice`, `byUser`, `phoneNumber`, `pickUpDate`,`tokenKey`) 
               VALUES ('$brandName','$cat','$modelId','$storage','$ram','$address','$address_opt','$paymentMethod','$city','$zip','$userID','$price','$warranty','$body','$screen','$accessories','$problems','$deducted_amt','$final_amt','$userID','$phone','$pickup','$tokenKey')";
        $queryOrder = mysqli_query($connect, $sqlOrder);
        if ($queryOrder) {
            unset($_SESSION['PLACE-A-ORDER']);
            
                unset($_SESSION['PURCHASE-KEY']);
                unset($_SESSION['METHOD']);
                unset($_SESSION['STORE_ID']);
            
            header("location:https://cashkar.in/thankyou");
        } else {
            echo "submit fail";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Cashkar - Checkout With Your Request - Sell Your old Device And Get Cash</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!--  -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
        <link rel="stylesheet" href="https://cashkar.in/css/home-page.css">
        <link rel="stylesheet" href="https://cashkar.in/css/sell-phone.css">
              <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
        <script src="https://cashkar.in/js/main.js"></script>
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- animate css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgCfiJdjiRbMkcwP4sf2Rf-g46nDwLmOs&callback=initMap"-->
<!--  type="text/javascript"></script>-->
  <script src="https://cashkar.in/js/address-complete.js">
  </script>
    </head>
    <?php
    if (isset($_SESSION['promoAppliedTime'])) {
        date_default_timezone_set("Asia/Kathmandu");
        $promoAppliedTime = new DateTime($_SESSION['promoAppliedTime']);
        $currentTime = new DateTime();
        $timediff = $promoAppliedTime->diff($currentTime);
        if ($timediff->format('%i') > 30) {
            unset($_SESSION['promoApplied']);
            unset($_SESSION['promoValue']);
            unset($_SESSION['code']);
            unset($_SESSION['promoId']);
        }
    }

    ?>

    <body style="background:#fff">
        <?php include "../content/menu.php"; ?>
        <div class="container" id="main">
            <?php 
            if(isset($_GET['ava']) and $_GET['ava'] == '0'){
                ?>
                <div class="row my-2">
                        <div class="col-lg-6 col-sm-6 col-12 m-auto">
                            <img src="https://cashkar.in/images/cityNotAva.svg" alt="not avaible" class="img-fluid"/>
                            <h3 class="font-work-sans text-center" style="font-size:21.2px;">Sorry! We only provide sevice in Mumbai</h3>
                        </div>
            
                    </div>
                <?php
            }else{
            
            ?>
            <div class="row mx-auto mt-3">
                <div class="col-lg-6 col-sm-12">
                    <img src="https://cashkar.in/images/model/mobile/<?php echo $img; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 font-work-sans px-2">
                    <h2 class="text-center mb-3 bg-warning py-2">Sell Your <?php echo $modelName; ?></h2>
                    <div class="d-flex center flow-col checkout-main-section">

                        <h3 class="txt-underline mb-3 text-center">Best Value We Offer</h3>
                        <h1 class="font-price font-oswald"><i class="fa fa-inr"></i>
                            <?php
                            if (isset($_SESSION['promoApplied'])) {
                                $showPriceAfterPromo = $priceToShow + $_SESSION['promoValue'];
                                $_SESSION['finalAmt'] = $showPriceAfterPromo;

                                echo $showPriceAfterPromo;
                            } else {
                                echo $priceToShow;
                            }

                            ?>
                            <span>*</span></h1>
                        <p class="text-center px-3">
                            Above Value Is Based On The Condition Selected.<br>
                            Enter The Details Below To Confirm Pickup.
                        </p>
                        <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code" name="code" id="promoCodes" value="<?php if (isset($_SESSION['code'])) {
                                                                                                                                        echo $_SESSION['code'];
                                                                                                                                    } ?>">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary" name="addPromo" onclick="validatePromo()">Redeem</button>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
            <div class="container bg-light p-2">
                <h2 class="text-center"> 
                <p class="font-work sans">
                    Enter Pickup Address
                </h2>
                <p class="text-center">
                    Note: Accurate Address Saves Time
                </p>
                <div class="col-lg-8 col-sm-12 m-auto">
                    <form method="post">
                        <div class="row m-auto">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="building">Address Line 1<span class="text-danger">*</span></label><p class="font-work sans">
                                    <input type="text" class="form-control" placeholder="Room, Building and Street" name="apt/building" id="apt" required minlength="5">
                                </div>
                                
                                <div class="form-group">
                                    <label for="area">Address Line 2<span class="text-danger">*</span></label><p class="font-work sans">
                                    <input type="text" class="form-control" placeholder="Area" name="address" id="area" required onfocus="geolocate" minlength="6">
                                </div>
                                <div class="form-group">
                                    <label for="zip">Pin Code<span class="text-danger">*</span></label><p class="font-work sans">
                                    <input type="text" class="form-control" placeholder="Area Pin Code" name="zip" id="zip" required minlength="4" maxlength="10">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                
                                <div class="form-group">
                                    <label for="landmark">Landmark<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Popular Place Nearby" name="landmark" id="landmark" required minlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="landmark">City<span class="text-danger">*</span></label>
                                    <select class="form-select form-control" onchange="checkCity(this.value);">
                                      <option selected disabled>Select your city</option>
                                      <option value="Mumbai">Mumbai</option>
                                      <option value="False">Not Listed</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group" id="datepicker">
                                    <label for="pickupDate">Schedule PickUp<span class="text-danger">*</span></label><p class="font-work sans">
                                    <input type="date" required class="form-control" placeholder="Zip / postal code of your pickup area" name="pickupDate" id="pickupDate" required minlength="4" maxlength="10">
                                </div>
                            </div>
                        </div>

                        <div class="payment-method mt-3">
                            <h3 class="text-center mb-4">Select Payment Method</h3>
                            <div class="form-group" id="mbl-Payment-Method">
                                    <label for="payment-method">Payment Method<span class="text-danger">*</span></label>
                                    <select class="form-select form-control" onchange="showPaymentMethod(this.value);">
                                      <option selected disabled>Select Your Payment Method</option>
                                      <option value="paytm">Paytm</option>
                                      <option value="gpay">Gpay</option>
                                      <option value="upi">UPI</option>
                                      <option value="bank">Bank</option>
                                      <option value="cash">Cash</option>
                                    </select>
                                    
                                </div>
                    <!--payment mthd btn-->
                            <div class="d-flex center row" id="Payment-Method">
                                <div class="col-lg-2 col-sm-3 col-4 mb-2">
                                <button type="button" id="paytm-btn" class="paytm payment-btn px-4 border-black-2 border-black-2 py-2 mr-3" onclick="chkpaytm(this.id)">Paytm</button>
                                </div>
                                <div class="col-lg-3 d-flex center col-sm-3 col-6 mb-2">
                                <button type="button" id="gpay-btn" class="googlePay payment-btn px-2 border-black-2 border-black-2 py-2 mr-3" onclick="chkGpay(this.id)">Google Pay</button>
                               </div>
                               <div class="col-lg-2 col-sm-3 col-4 mb-2">
                                <button type="button" id="upi-btn" class="upi payment-btn px-4 border-black-2 border-black-2 py-2 mr-3" onclick="chkUpi(this.id)">UPI</button>
                                </div>
                                <div class="col-lg-2 col-sm-3 col-4 mb-2">
                                <button type="button" id="bank-btn" class="Bank payment-btn px-4 border-black-2 border-black-2 py-2 mr-3" onclick="chkBank(this.id)">Bank</button>
                                </div>
                                <div class="col-lg-2 col-sm-3 col-4 mb-2">
                                <button type="button" id="cash-btn" class="cash payment-btn px-4 border-black-2 border-black-2 py-2 mr-3" onclick="chkCash(this.id)">Cash</button>
                            </div>
                            </div>
                            <div class="input-feilds d-flex flow-col center">
                                <div class="form-group col-12 py-2" style="display: none;" id="paytm">
                                    <label for="feildForPaytm">Paytm A/C No:</label>
                                    <input type="number" name="paytmF" id="feildForPaytm" placeholder="Enter Paytm Account No:" class="form-control" maxlength="20">
                                </div>
                                <div class="form-group col-12 py-2" style="display: none;" id="gpay">
                                    <label for="feildForPaytm">Google Pay A/C No:</label>
                                    <input type="number" name="gpayF" id="feildForGpay" placeholder="Enter GPay Account No:" class="form-control" maxlength="20">
                                </div>
                                <div class="form-group col-12 py-2" style="display: none;" id="upi">
                                    <label for="feildForPaytm">UPI A/C No:</label>
                                    <input type="number" name="upiF" id="feildForUpi" placeholder="Enter UPI Account No:" class="form-control" maxlength="20">
                                </div>
                                <div id="bank" style="display: none;" class="col-12">
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-sm-12 py-2" id="bank">
                                            <label for="bnkName">Bank Name:</label>
                                            <input type="text" name="bankACNF" placeholder="Enter Bank Name" id="bnkName" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-12 py-2" id="bank">
                                            <label for="acc-holderName">Account Holder Name:</label>
                                            <input type="text" name="acc-holderName" placeholder="Enter account holder name:" id="acc-holderName" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-12 py-2" id="bank">
                                            <label for="acc-no">Bank A/C No:</label>
                                            <input type="number" name="bankACNoF" placeholder="Enter Bank Account No:" id="acc-no" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-12 py-2" id="bank">
                                            <label for="icfc">IFSC Code:</label>
                                            <input type="number" name="icfcF" placeholder="Enter Bank ICFC code:" id="icfc" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- price summary -->
                        <div class="mb-3 px-4 py-4 mt-3 bg-light shadow d-block">
                            <h4 class="d-flex justify-content-between align-items-center mb-3 text-center">
                                <span class="text-muted text-center">Price Summary</span>

                                <!--<span class="badge badge-secondary badge-pill">3</span>-->
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed p-2">
                                    <div>
                                        <h6 class="my-0">
                                            <?php echo $modelName; ?>
                                        </h6>
                                        <small class="text-muted">Offered Phone Value</small>
                                    </div>
                                    <span class="text-muted"><i class="fa fa-inr"></i> <?php echo $priceToShow; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed p-2">
                                    <div>
                                        <h6 class="my-0">Extra Charge</h6>
                                        <small class="text-muted">PickUp charge</small>
                                    </div>
                                    <span class="text-success">Free</span>
                                </li>
                                <!--Promo code starts-->
                                <li class="list-group-item d-flex justify-content-between bg-light p-2" id="promoBar">
                                    <?php
                                    if (isset($_SESSION['promoApplied'])) {
                                        echo $_SESSION['promoActiveShow'];
                                    } else {
                                    ?>
                                        <div class="text-success">
                                            <h6 class="my-0">Promo code</h6>
                                            <!-- code here  -->
                                            <small>No Code </small>

                                        </div>
                                        <span class="text-success">+<i class="fa fa-inr"></i>0</span>

                                    <?php
                                    }

                                    ?>
                                </li>
                                <!--Promo code ends-->
                                <li class="list-group-item d-flex justify-content-between p-2">
                                    <span >Total (INR)</span>
                                    <strong><i class="fa fa-inr"></i><?php
                                                                        if (isset($_SESSION['promoApplied'])) {
                                                                            $showPriceAfterPromo = $priceToShow + $_SESSION['promoValue'];
                                                                            $_SESSION['finalAmt'] = $showPriceAfterPromo;

                                                                            echo $showPriceAfterPromo;
                                                                        } else {
                                                                            echo $priceToShow;
                                                                        }

                                                                        ?></strong>
                                </li>
                            </ul>

                            

                        </div>
                        <!-- check out btn -->
                        <div class="d-flex center">
                            <button type="submit" class="cash payment-btn is-selected px-4 border-black-2 border-black-2 py-2 mr-3" name="checkout">Continue To Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
    // ava status check finished this check avaibility of city
} 
            
            ?>
        </div>
        <script>
        function showPaymentMethod(val){
            // console.log(val);
            if(val == 'paytm'){
                document.getElementById('paytm').style.display = 'block';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'none';
            }
            if(val == 'upi'){
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'block';
                document.getElementById('bank').style.display = 'none';
            }
            if(val == 'gpay'){
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'block';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'none';
            }
            if(val == 'bank'){
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'block';
            }
            if(val == 'cash'){
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'none';
            }
        }
            function chkpaytm(id) {
                document.getElementById(id).classList.add('is-selected');
                document.getElementById('gpay-btn').classList.remove('is-selected');
                document.getElementById('upi-btn').classList.remove('is-selected');
                document.getElementById('bank-btn').classList.remove('is-selected');
                document.getElementById('paytm').style.display = 'block';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'none';
                document.getElementById('paymentCheck').checked = true;
                document.getElementById('paymentCheck').value = 'paytm';
            };

            function chkUpi(id) {
                document.getElementById(id).classList.add('is-selected');
                document.getElementById('gpay-btn').classList.remove('is-selected');
                document.getElementById('paytm-btn').classList.remove('is-selected');
                document.getElementById('bank-btn').classList.remove('is-selected');
                document.getElementById('cash-btn').classList.remove('is-selected');
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'block';
                document.getElementById('bank').style.display = 'none';
                document.getElementById('paymentCheck').checked = true;
                document.getElementById('paymentCheck').value = 'upi';
            }

            function chkGpay(id) {
                document.getElementById(id).classList.add('is-selected');
                document.getElementById('paytm-btn').classList.remove('is-selected');
                document.getElementById('upi-btn').classList.remove('is-selected');
                document.getElementById('bank-btn').classList.remove('is-selected');
                document.getElementById('cash-btn').classList.remove('is-selected');
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'block';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'none';
                document.getElementById('paymentCheck').checked = true;
                document.getElementById('paymentCheck').value = 'gpay';
            }

            function chkBank(id) {
                document.getElementById(id).classList.add('is-selected');
                document.getElementById('paytm-btn').classList.remove('is-selected');
                document.getElementById('upi-btn').classList.remove('is-selected');
                document.getElementById('gpay-btn').classList.remove('is-selected');
                document.getElementById('cash-btn').classList.remove('is-selected');
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'block';
                document.getElementById('paymentCheck').checked = true;
                document.getElementById('paymentCheck').value = 'bank'
            }

            function chkCash(id) {
                document.getElementById(id).classList.add('is-selected');
                document.getElementById('paytm-btn').classList.remove('is-selected');
                document.getElementById('upi-btn').classList.remove('is-selected');
                document.getElementById('bank-btn').classList.remove('is-selected');
                document.getElementById('gpay-btn').classList.remove('is-selected');
                document.getElementById('paytm').style.display = 'none';
                document.getElementById('gpay').style.display = 'none';
                document.getElementById('upi').style.display = 'none';
                document.getElementById('bank').style.display = 'none';
                document.getElementById('paymentCheck').checked = true;
                document.getElementById('paymentCheck').value = 'cash'
            }
        </script>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
          
        <!--footer-->
        <?php include "../footer.php"; ?>
        <style>
            .checkout-main-section{
                height:65vh;
            }
            #mbl-Payment-Method{
                display:none!important;
            }
            @media(max-width:600px){
              .checkout-main-section{
                height:initial;
            }
             #Payment-Method{
                display:none!important;
            }
            #mbl-Payment-Method{
                display:block!important;
            }
            }
             @media(min-width:600px) and (max-width:768px){
              .checkout-main-section{
                height:42vh!important;
            }  
            #Payment-Method{
                display:none!important;
            }
            #mbl-Payment-Method{
                display:block!important;
            }
            }
            
        </style>
        <?php } ?>
        <script>
            function checkCity(cityName){
                if(cityName != 'Mumbai'){
                    window.location.href = "?ava=0";
                    // var mainDoc = document.getElementById('main');
                    // var checkCity = new XMLHttpRequest();
                    // checkCity.open("GET","https://cashkar.in/ajax/checkcity.php?city="+cityName, "TRUE");
                    // checkCity.send();
                    // if(checkCity.readyState == 4 && checkCity.status == 200){
                    //     mainDoc.innerHTML = checkCity.responseText; 
                    //     console.log(checkCity.responseText);
                    // }else{
                    //     console.log(checkCity.readyState);
                    // }
                }
            }
        </script>
        
    </body>
    </html>
    <?php } ?>