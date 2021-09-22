<?php 
session_start();
ob_start();
// $_SESSION['ABCD'] = "abcd";
// echo $_SESSION['ABCD'];
?>
<?php 
include "../content/connection.php";
include "../content/function.inc.php";
 $vendorKey = $_SESSION['STORE_ID'];
 $userID = $_SESSION['USER-LOGIN'];
if(isset($_SESSION['MODEL_ID'])){
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

// store details
$sid = $_SESSION['STORE_ID'];
$sqlStoreInfo = "SELECT * FROM vendor where encryptedId = '$sid'";

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
            //header("location:https://cashkar.in/sorry");
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
    //generating token key
    $sqlKey = "SELECT * FROM orderlist";
     $queryKey = mysqli_query($connect,$sqlKey);
     $resKey = mysqli_fetch_array($queryKey);
     $sEssionId = $resKey['id'];
     $byUserIdSession = $userID;
     $tokenKey = $sEssionId.$byUserIdSession;
     $_SESSION['TOKEN-KEY'] = $tokenKey;
     
     if(!isset($_SESSION['TOKEN-KEY'])){
     
         $sqlOrder = "INSERT INTO `lead`(`brand`, `category`, `model_id`, `storage`, `ram`,`original_price`, `warrantyStatus`, `bodyCondition`, `screenCondition`, `Accessories`, `problems`, `deductedAmount`, `finalPrice`, `byUser`, `phoneNumber`, `token key`) 
               VALUES ('$brandName','$cat','$modelId','$storage','$ram','$price','$warranty','$body','$screen','$accessories','$problems','$deducted_amt','$final_amt','$userID','$phone','$tokenKey')";
        $queryOrder = mysqli_query($connect, $sqlOrder);
     }
    if($priceToShow <= 0){
            // redirect if conditional price is less than zero
            header("location:https://cashkar.in/sorry");
        }
    // submiting checkout form
    if (isset($_POST['checkout'])) {
        // $address_opt = $_POST['apt/building'];
        // $address = $_POST['address'];
        // $zip = $_POST['zip'];
        // $area = $_POST['address'];
        $city = 'Mumbai';
        // $landmark = $_POST['landmark'];
        $address = $address . ' ' . $landmark;
        // $pickup = $_POST['pickupDate'];
        $finalAmT  = $_SESSION['finalAmt'];
        //payment method
        
            $paymentMethod = "Cash";
        //fetch vendor details
        $sqlVendor = "SELECT * FROM vendor where encryptedid = '$vendorKey'";
        $queryVendor = mysqli_query($connect,$sqlVendor);
        $resVendor = mysqli_fetch_array($queryVendor);
        $vendorId = $resVendor['id'];
        $email = $resVendor['email'];
        $assignToTxt = 'Assigned to '.$email;
        $status = 'pending';
        $address = $resVendor['storeAddress'];
        $lankmark = $resVendor['storeName'];
        $zip = $resVendor['zip'];
        $pickup = date("Y-M-d");
        $address_opt = $address;
        // echo $paymentMethod;
        echo $sqlOrder = "INSERT INTO `orderlist`(`brand`, `category`, `model_id`, `storage`, `ram`, `address`, `opt_address`,`paymentMethod`, `city`, `zip`,`addressSavedBy`,`original_price`, `warrantyStatus`, `bodyCondition`, `screenCondition`, `Accessories`, `problems`, `deductedAmount`, `finalPrice`, `byUser`, `phoneNumber`, `pickUpDate`,`token key`,`assignTo`,`status`,`reason`) 
              VALUES ('$brandName','$cat','$modelId','$storage','$ram','$address','$address_opt','$paymentMethod','$city','$zip','$userID','$price','$warranty','$body','$screen','$accessories','$problems','$deducted_amt','$final_amt','$userID','$phone','$pickup','$tokenKey','$vendorId','$status','$assignToTxt')";
        $queryOrder = mysqli_query($connect, $sqlOrder);
        if ($queryOrder) {
            unset($_SESSION['PLACE-A-ORDER']);
            $sqlToDel = "DELETE FROM where tokenKey = '$tokenKey'";
            $queryToDel = mysqli_query($connect,$sqlToDel);
            if($queryToDel){
                unset($_SESSION['PURCHASE-KEY']);
                unset($_SESSION['METHOD']);
                unset($_SESSION['STORE_ID']);
            }
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
        <div class="container">
            <div class="row mx-auto mt-3">
                <div class="col-lg-6 col-sm-12">
                    <img src="https://cashkar.in/images/model/mobile/<?php echo $img; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 font-work-sans px-2">
                    <h2 class="text-center mb-3 bg-warning py-2">Sell Your <?php echo $modelName; ?></h2>
                    <div class="d-flex center flow-col checkout-main-section">

                        <h3 class="txt-underline mb-3">Best Value We Offer</h3>
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
                <!--<h2 class="text-center"> -->
                <!--<p class="font-work sans">-->
                <!--    Pickup Address Detail-->
                <!--    </p>-->
                <!--</h2>-->
                <!--<p class="text-center">-->
                <!--    Note: Accurate Address Saves Time-->
                <!--</p>-->
                <div class="col-lg-8 col-sm-12 m-auto">
                    <form method="post">
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
        </div>
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
            @media(max-width:600px){
              .checkout-main-section{
                height:38vh;
            }  
            }
             @media(min-width:600px) and (max-width:768px){
              .checkout-main-section{
                height:42vh!important;
            }  
            }
        </style>
        
    </body>
    </html>
    <?php
}
    ?>