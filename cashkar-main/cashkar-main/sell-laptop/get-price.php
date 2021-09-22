<?php
session_start();
ob_start();
include "../content/connection.php";
include "../content/function.inc.php";
//header("location:https://cashkar.in/");
if (isset($_GET['slug'])) {
    $slug = mysqli_real_escape_string($connect,$_GET['slug']);
}else{
    header("location:https://cashkar.in");
}
if (isset($_GET['brand'])) {
    $brandName =mysqli_real_escape_string($connect,$_GET['brand']);
    //echo $brandName;
}else{
    header("location:https://cashkar.in");
}

if (isset($_GET['v'])) {
     $storageVariation = mysqli_real_escape_string($connect,$_GET['v']);
}else{
    header("location:https://cashkar.in");
}
if (isset($_GET['r'])) {
     $ramVariation = mysqli_real_escape_string($connect,$_GET['r']);
}else{
    $ramVariation = ' ';
}

//geting price from database
$getOriginalPrice = "SELECT * from model where slug = '$slug' and storage = '$storageVariation' and ram ='$ramVariation'";
$queryOriginalPrice = mysqli_query($connect, $getOriginalPrice);
$resultData = $queryOriginalPrice->fetch_array();
$priceOfDevice = $resultData['price'];
$modelName = $resultData['model_name'];
$brandId = $resultData['id'];
//getting price of device to cut price
$warranty0To3 = $resultData['0To3Warranty'];
$warranty3To6 = $resultData['3To6Warranty'];
$warranty6To6 = $resultData['6To11Warranty'];
$noWarranty = $resultData['noWarranty'];
$scratchlessBody = $resultData['scratchlessBody'];
$goodBody = $resultData['good'];
$averageBOdy = $resultData['average'];
$bellowAverage = $resultData['bellowAverage'];
$screenScratchless = $resultData['screenScratchless'];
$crackedScreen = $resultData['crackedScreen'];
$blank = $resultData['blank/notWorking'];
$lines = $resultData['lines/spots/dc'];
$scratchOnScreen = $resultData['scratchesOnScreen'];
$fCam = $resultData['frontCamera'];
$bCam = $resultData['backCamera'];
$battery = $resultData['battery'];
$sensor = $resultData['fingerSensor'];
$faceID = $resultData['faceId'];
$bluetooth = $resultData['bluetooth/wifi'];
$bentPhone = $resultData['bentPhone'];
$display = $resultData['displayChanged'];
$speaker = $resultData['SpeakerProblem'];
$mic = $resultData['MIC problem'];
$network = $resultData['networkProblem'];
$charging = $resultData['chargingProblem'];
$backGlassBroken = $resultData['backGlassBroken'];
$nanCharger = $resultData['notHavingCharger'];
$nanEarphone = $resultData['notHavingEarphones'];
$nanBox = $resultData['notHavingBox'];
$nanBill = $resultData['notHavingBill'];

//declaring variables to store data
$err_msg = "";
$success_msg = "";
$success1 = "";
$success2 = "";
$success3 = "";
$success4 = "";
$success4 = "";

?>
<?php
if (isset($_POST['submit-btn'])) {
    function agree(){
        echo $isAgree = isset($_POST['agree']);
        if(!($isAgree)){
            $GLOBALS['err_msg_agree'] = "<div class='alert alert-danger p-3 col-lg-6 col-sm-12'>
            <strong>
            Kindly agree the check box.
            </strong>
            </div>
            ";
            return false;
            echo "false";
        }else{
            return true;
            echo "true";
        }
    }
$phn = $_REQUEST['phn'];
$_SESSION["phoneNumber"] = $phn;
    if (isset($_POST['radio1'])) {
        //for warranty condition
        $getValueFromRadio1 = $_POST['radio1'];
        //echo "original price ".$priceOfDevice."<br>";
        if ($getValueFromRadio1 == '1') {
            $getValueFromRadio1 = 1;
            $priceAfterDeduction1 = $priceOfDevice - $warranty0To3;
            //echo "original price ".$priceOfDevice."<br>";

        } elseif ($getValueFromRadio1 == '2') {
            $getValueFromRadio1 = 2;
            $priceAfterDeduction1 = $priceOfDevice - $warranty3To6;
        }elseif ($getValueFromRadio1 == '3') {
            $getValueFromRadio1 = 3;
            $priceAfterDeduction1 = $priceOfDevice - $warranty6To11;
        } else {
            $getValueFromRadio1 = 0;
            $priceAfterDeduction1 = $priceOfDevice - $noWarranty;
        }
        $success1 = 1;
    } else {
    }
    if (isset($_POST['radio2'])) {
        //for body condition
        $getValueFromRadio2 = $_POST['radio2'];
        if ($getValueFromRadio2 == '4') {
            $getValueFromRadio2 = 4;
            $priceAfterDeduction2 = $priceAfterDeduction1 - $scratchlessBody;
        } elseif ($getValueFromRadio2 == '5') {
            $getValueFromRadio2 = 5;
            $priceAfterDeduction2 = $priceAfterDeduction1 - $goodBody;
        } elseif ($getValueFromRadio2 == '6') {
            $getValueFromRadio2 = 6;
            $priceAfterDeduction2 = $priceAfterDeduction1 - $averageBOdy;
        } else {
            $getValueFromRadio2 = 7;
            $priceAfterDeduction2 = $priceAfterDeduction1 - $bellowAverage;
            //echo "price after deduction ".$priceAfterDeduction2;
        }
        $success2 = 1;
    } else {
    }
//  condition 3rd 
    if(isset($_POST['chk3_1'])){
        $valueOfChk3_1 = $_POST['chk3_1'];
        $getValueFromRadio3 = '/'.$valueOfChk3_1.'/';
        $priceAfterDeduction3 = $priceAfterDeduction2 - $screenScratchless;
    }else{
        $priceAfterDeduction3 = $priceAfterDeduction2;
    }
     if(isset($_POST['radio3_2'])){
        $valueOfChk3_2 = $_POST['radio3_2'];
        $getValueFromRadio3 = $getValueFromRadio3.$valueOfChk3_2.'/';
        $priceAfterDeduction3 = $priceAfterDeduction3 - $scratchOnScreen;
    }else{
        $priceAfterDeduction3 = $priceAfterDeduction3;
    }
     if(isset($_POST['radio3_3'])){
        $valueOfChk3_3 = $_POST['radio3_3'];
        $getValueFromRadio3 = $getValueFromRadio3.$valueOfChk3_3.'/';
        $priceAfterDeduction3 = $priceAfterDeduction3 - $crackedScreen;
    }else{
        $priceAfterDeduction3 = $priceAfterDeduction3;
    }
    if(isset($_POST['radio3_4'])){
        $valueOfChk3_4 = $_POST['radio3_4'];
        $getValueFromRadio3 = $getValueFromRadio3.$valueOfChk3_4.'/';
        $priceAfterDeduction3 = $priceAfterDeduction3 - $lines;
    }else{
        $priceAfterDeduction3 = $priceAfterDeduction3;
    }
    if(isset($_POST['radio3_5'])){
        $valueOfChk3_5 = $_POST['radio3_5'];
        $getValueFromRadio3 = $getValueFromRadio3.$valueOfChk3_5.'/';
        $priceAfterDeduction3 = $priceAfterDeduction3 - $blank;
    }else{
        $priceAfterDeduction3 = $priceAfterDeduction3;
    }
    
    // checking value from check box for condition 5 or checking accessories
    if (isset($_REQUEST['chk5_1'])) {
        $valueOfChk5_1 = $_REQUEST['chk5_1'];
        $checkboxArray2 = '/'.$valueOfChk5_1.'/';
        $priceAfterDeduction4 = $priceAfterDeduction3;
        //echo $priceAfterDeduction4;
    }else{
        
            $priceAfterDeduction4 = $priceAfterDeduction3 - $nanCharger;
    }
    if (isset($_REQUEST['chk5_2'])) {
        $valueOfChk5_2 = $_REQUEST['chk5_2'];
        $getValueFrmoCheck5 = $checkboxArray2.$valueOfChk5_2.'/';
        $priceAfterDeduction4 = $priceAfterDeduction4;
    }else{
        $priceAfterDeduction4 = $priceAfterDeduction4 - $nanEarphone;
    }
    if (isset($_REQUEST['chk5_3'])) {
        $valueOfChk5_3 = $_REQUEST['chk5_3'];
        $priceAfterDeduction4 = $priceAfterDeduction4;
        $checkboxArray2 = $checkboxArray2.$valueOfChk5_3.'/';
    }else{
        $priceAfterDeduction4 = $priceAfterDeduction4 - $nanBox;
    }
    if (isset($_REQUEST['chk5_4'])) {
        $valueOfChk5_4 = $_REQUEST['chk5_4'];
        $checkboxArray2 = $checkboxArray2.$valueOfChk5_4;
        $priceAfterDeduction4 = $priceAfterDeduction4;
    }else{
        $priceAfterDeduction4 = $priceAfterDeduction4 - $nanBill;
    }
    // checkboxArray2 returns a value of selection of accessories
    //echo $checkboxArray2;
    // checking value from checkbox for condition 4
    if (isset($_REQUEST['chk1'])) {
       $getValueFrmoCheck1 = $_REQUEST['chk1'];
       $checkboxArray = '/'.$getValueFrmoCheck1.'/';
       $priceAfterDeduction5 = $priceAfterDeduction4 - $fCam;
            //Does deduction only the checkbox are selected from the price gain after doing deduction from check box of condition 4
    }else{
        $priceAfterDeduction5 = $priceAfterDeduction4;
        //else return value from condition 4
    }
    if (isset($_REQUEST['chk2'])) {
        $getValueFrmoCheck2 = $_REQUEST['chk2'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck2.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $bCam;
    }else{
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }
    if (isset($_REQUEST['chk3'])) {
        $getValueFrmoCheck2 = $_REQUEST['chk3'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck2.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $battery;
    }else{
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }
     if (isset($_REQUEST['chk4'])) {
        $getValueFrmoCheck4 = $_REQUEST['chk4'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck4.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $sensor;
     }else{
        $priceAfterDeduction5 = $priceAfterDeduction5;

     }

     if (isset($_REQUEST['chk5'])) {
        $getValueFrmoCheck5 = $_REQUEST['chk5'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck5.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $faceID;
     }
     else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
         
     }
     if (isset($_REQUEST['chk6'])) {
        $getValueFrmoCheck6 = $_REQUEST['chk6'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck6.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $bluetooth;
     }else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
         
     }

     if (isset($_REQUEST['chk7'])) {
        $getValueFrmoCheck7 = $_REQUEST['chk7'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck7.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $bentPhone;
     }else {
         $priceAfterDeduction5 = $priceAfterDeduction5;
     }

     if (isset($_REQUEST['chk8'])) {
        $getValueFrmoCheck8 = $_REQUEST['chk8'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck8.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $display;
     }
     else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }

     if (isset($_REQUEST['chk9'])) {
        $getValueFrmoCheck9 = $_REQUEST['chk9'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck9.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $speaker;
     }
     else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }

     if (isset($_REQUEST['chk10'])) {
        $getValueFrmoCheck10 = $_REQUEST['chk10'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck10.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $mic;
     }
     else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }

     if (isset($_REQUEST['chk11'])) {
        $getValueFrmoCheck11 = $_REQUEST['chk11'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck11.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $network;
     }
     else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }

     if (isset($_REQUEST['chk12'])) {
        $getValueFrmoCheck12 = $_REQUEST['chk12'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck12.'/';
        $priceAfterDeduction5 = $priceAfterDeduction5 - $charging;
     }
     else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }
    if (isset($_REQUEST['chk13'])) {
        $getValueFrmoCheck13 = $_REQUEST['chk13'];
        $checkboxArray = $checkboxArray.$getValueFrmoCheck13;
        $priceAfterDeduction5 = $priceAfterDeduction5 - $backGlassBroken;
     }
     else {
        $priceAfterDeduction5 = $priceAfterDeduction5;
    }

     //echo $checkboxArray;
    if ($success1 == 1 && $success2 == 1) {
        $tokenKey = rand(10000, 999999);
        $checkToken = "SELECT tokenKey from orderlist";
        $getKey = mysqli_query($connect, $checkToken);
        $getRows = mysqli_num_rows($getKey);
        //echo "total rows = ". $getRows;
        if ($getRows < 1) {
            $uniqueTokenKey = $tokenKey;
        } else {
            $tokenKey = rand(1000000, 9999999);
        }
        $deductedAmount = $priceOfDevice - $priceAfterDeduction5;
        $_SESSION['SELL_TYPE'] = 'SELL_MOBILE';$_SESSION['BRAND_NAME'] = $brandName;$_SESSION['MODEL_ID'] = $brandId;$_SESSION['STORAGE'] = $storageVariation;$_SESSION['RAM'] = $ramVariation;
        $_SESSION['INI_PRICE'] = $priceOfDevice;$_SESSION['WARRANTY'] = $getValueFromRadio1;$_SESSION['BODY'] = $getValueFromRadio2;$_SESSION['SCREEN'] = $getValueFromRadio3;$_SESSION['ACCESSORIES'] = $checkboxArray2;$_SESSION['DEDUCTED_AMT'] = $deductedAmount;
                                                                                                                                                                     $_SESSION['PROBLEMS'] = $checkboxArray;$_SESSION['FINAL_AMT'] = $priceAfterDeduction5;                                           
        $queryIns = "INSERT INTO `lead`(`brand`, `model_id`, `storage`,`ram`, `original_price`, `warrantyStatus`, `bodyCondition`, `screenCondition`, `Accessories`, `deductedAmount`,`problems`, `finalPrice`, `tokenKey`,`phoneNumber`) 
							 VALUES ('$brandName',$brandId,'$storageVariation','$ramVariation',$priceOfDevice,'$getValueFromRadio1','$getValueFromRadio2','$getValueFromRadio3','$checkboxArray2',$deductedAmount,'$checkboxArray',$priceAfterDeduction5,$tokenKey,'$phn')"; 

        $insertToDB = mysqli_query($connect, $queryIns);
        if ($insertToDB) {
            $sqlS = "select * from lead where tokenKey = '$tokenKey'";
            $querySql = mysqli_query($connect,$sqlS);
            $resID = mysqli_fetch_array($querySql);
            $orderID = $resID['id'];
            $_SESSION['mobile_sell_order'] = $orderID;
            //echo $priceAfterDeduction5.'<br>'.$priceOfDevice;
            if(agree() == true){
                
            
            if(($priceAfterDeduction5 < 0 )){
                header("location:https://cashkar.in/sorry/");
                //echo "it is true";
            }else{
                if(agree() == true){
            if(sessionCheck()){
                header("location:https://cashkar.in/checkout/");
            }else {
                header("location:https://cashkar.in/register/?cart=true");
            }
            }
            }
            //header("location:https://cashkar.in/register/");
            //echo "success";
        }
        } else {
            $success_msg = "<p style='color:red;'>Submit fail. Error Code #NID2D. Contact us with this code</p>";
        }

        //insert into database after validating radio box
    } else {
        $err_msg = "<p style='color:red;'>Please choose atleast one option from first two conditions</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Cashkar" />
    <meta property="og:url" content="https://www.cashkar.in/sell-phone/calculate.php" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://cashkar.in/images/site-logo.png" type="image/x-icon">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- links for css start here -->
    <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
    <link rel="stylesheet" href="https://cashkar.in/css/sell-phone.css">

    <link rel="stylesheet" type="text/css" href="https://cashkar.in/css/calculate.css">
    <title>Sell Your Old <?php echo $brandName . ' ' . $modelName; ?> Mobile | Unlock Better Price | Cashkar</title>
          <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
</head>

<body style="background-color:#eee;">
<?php //include "../content/pre-loader.html";?>

    <div class="container-fluid set-mar" >
    <?php include '../content/menu.php'; ?>
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-12 col-12 m-auto">
                <div class="ask-mbl-feature">
                    <!-- right side bar  for feature selection-->
                    <form action="" method="POST">
                        <div class="condition">
                            <?php echo $err_msg; ?>
                            <?php echo $success_msg; ?>
                            <?php echo $err_msg_agree; ?>
                            <h3>1. Device Warranty Status</h3><br>
                            <label class="rdo-lvl">0 to 3 Months Warranty
                                <input type="radio" name="radio1" value="1" onchange="chkWarranty(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                            <label class="rdo-lvl">3 to 6 Months Warranty
                                <input type="radio" name="radio1" value="2" onchange="chkWarranty(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                            <label class="rdo-lvl">6 to 11 Months Warranty
                                <input type="radio" name="radio1" value="3" onchange="chkWarranty(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                            <label class="rdo-lvl">No Warranty
                                <input type="radio" name="radio1" value="0" onchange="chkWarranty(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                            <div class="alert alert-warning p-2" style="display:none" id="billInfo">
                                
                            </div>
                            <script>
                                function chkWarranty(data){
                                    var isCheck = data;
                                    if(isCheck == '1' || isCheck == '2' || isCheck == '3'){
                                        var billInfoTxt = "<p class='m-0'>For this bill is required!</p>";
                                        document.getElementById('billInfo').style.display = "block";
                                        document.getElementById('billInfo').innerHTML = billInfoTxt;
                                    }else{
                                        document.getElementById('billInfo').style.display = "none";
                                    }
                                }
                            </script>
                        </div><br>
                        <div class="condition">
                            <h3>2. Device Body Condition.</h3><br>
                            <label class="rdo-lvl">Scratchless (No Usage Signs / Like New)
                                <input type="radio" name="radio2" value="4" onchange="checkrdo2(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                            <label class="rdo-lvl">Good (Light Usage Signs / No Dents / No Body Cracks)
                                <input type="radio" name="radio2" value="5" onchange="checkrdo2(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                            <label class="rdo-lvl">Average (Less than two dents / No Body Cracks / Moderate Scratches)
                                <input type="radio" name="radio2" value="6" onchange="checkrdo2(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                            <label class="rdo-lvl">Below Average (More than 2 dents / Body Cracks / Heavy Scratches on Body)
                                <input type="radio" name="radio2" value="7" onchange="checkrdo2(this.value);">
                                <span class="checkmark"></span>
                            </label><br><br>
                        </div><br>
                        <div class="condition">
                            <h3>3. Screen Condition.</h3><br>
                            <label class="container-checkbox">Scratch-Less Working Screen
                                <input type="checkbox" name="chk3_1" value="8" onclick="checkrdo3(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Scratches On Screen
                                <input type="checkbox" name="radio3_2" value="12" onchange="checkrdo3(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Cracked Screen
                                <input type="checkbox" name="radio3_3" value="11" onchange="checkrdo3(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Lines / Spots / Discolouration
                                <input type="checkbox" name="radio3_4" value="9" onchange="checkrdo3(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Blank Screen / Non - Working
                                <input type="checkbox" name="radio3_5" value="10" onchange="checkrdo3(this.value);">
                                <span class="checkbox"></span>
                            </label>
                        </div><br>
                        <div class="condition">
                            <h3>4. Select if any problems exist.</h3><br>
                            <label class="container-checkbox">Front Camera
                                <input type="checkbox" name="chk1" value="17" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Back Camera
                                <input type="checkbox" name="chk2" value="18" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Battery
                                <input type="checkbox" name="chk3" value="19" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Finger Sensor
                                <input type="checkbox" name="chk4" value="20" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Face ID
                                <input type="checkbox" name="chk5" value="21" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Bluetooth
                                <input type="checkbox" name="chk6" value="22" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Bent phone
                                <input type="checkbox" name="chk7" value="23" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Display Changed
                                <input type="checkbox" name="chk8" value="24" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Speaker Problem
                                <input type="checkbox" name="chk9" value="25" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">MIC problem
                                <input type="checkbox" name="chk10" value="26" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Network Problem
                                <input type="checkbox" name="chk11" value="27" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Charging problem
                                <input type="checkbox" name="chk12" value="28" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Back glass broken
                                <input type="checkbox" name="chk13" value="29" onclick="checkrdo5(this.value);">
                                <span class="checkbox"></span>
                            </label>
                        </div><br>
                        <div class="condition">
                            <h3>5. Select Accessories You Have</h3><br>
                            <label class="container-checkbox">Charger
                                <input type="checkbox" name="chk5_1" value="13" onclick="checkrdo4(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Earphone
                                <input type="checkbox" name="chk5_2" value="14" onclick="checkrdo4(this.value);">
                                <span class="checkbox"></span>
                            </label>

                            <label class="container-checkbox">Box
                                <input type="checkbox" name="chk5_3" value="15" onclick="checkrdo4(this.value);">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container-checkbox">Bill
                                <input type="checkbox" name="chk5_4" value="16" onclick="checkrdo4(this.value);">
                                <span class="checkbox"></span>
                            </label>
                        </div><br>
                        <!-- <div class="condition">
    			<h3>condition 4</h3>
    			<label class="container">Yes
				  <input type="radio"  name="radio5"  value="yes" onchange="checkrdo5(this.value);">
				  <span class="checkmark"></span>
			  </label>
			  <label class="container">No
				  <input type="radio"  name="radio5" value="no" onchange="checkrdo5(this.value);">
				  <span class="checkmark"></span>
			  </label>
			</div> -->
                        <!--<input type="submit" value="Done"  class="">-->
                        <button type="button" name="submit-btnn" class="btn btn-success pl-4 pr-4 pt-2 pb-2" data-toggle="modal" data-target="#myModal">Done</button>
                  <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header alert-warning">
                                    <h4 class="modal-title display-5">The best value for your old device is:</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                  <div class="col-lg-10 col-sm-12 col-12 p-0">
                                      <div class="form-group col-12 p-0">
                                          <label class="container-checkbox" style="font-size:15px">I agree, there are no issues/problems with device apart from the things mentioned.
                                            <input type="checkbox" name="agree" value="1">
                                            <span class="checkbox"></span>
                                          </label>
                                        </div>
                                      <div class="row">
                                         <div class="form-group col-7">
                                          <label for="phn">Phone:</label>
                                          <input type="text" class="form-control" id="phn" name="phn" placeholder="Phone Number" onKeyUp="onlyNumberKey()" required minlength ="10" maxlength='10'>
                                        </div>
                                        <div class="col-5 m-auto">
                                         <button type="submit" name="submit-btn" class="btn btn-success mt-3">Let's GO</button> 
                                         </div>
                                      </div>
                                      <!---->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--model ends-->

                    </form><br>
                </div>
            </div>
    
            <!--<div class="col-lg-4 col-md-4 col-sm-12 col-12">-->
            <!--    <div class="feature-info">-->
            <!--        <h3 id="details_head">Device details </h3>-->
            <!--        <p id="details1"></p>-->
            <!--        <p id="details2"></p>-->
            <!--        <p id="details3"></p>-->
            <!--        <p id="charger"></p>-->
            <!--        <p id="earphone"></p>-->
            <!--        <p id="box"></p>-->
            <!--        <p id="bill"></p>-->
            <!--        <p id="frontCamera"></p>-->
            <!--        <p id="backCamera"></p>-->
            <!--        <p id="battary"></p>-->
            <!--        <p id="fingerSensor"></p>-->
            <!--        <p id="faceId"></p>-->
            <!--        <p id="bluetooth"></p>-->
            <!--        <p id="bentPhone"></p>-->
            <!--        <p id="changedDisplay"></p>-->
            <!--        <p id="speakerProblem"></p>-->
            <!--        <p id="mic"></p>-->
            <!--        <p id="network"></p>-->
            <!--        <p id="charging"></p>-->
                    <!-- right sidebar to show feature about the selection -->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
     <script>
    //     // for condition 1
    //     function checkrdo1(data) {
    //         switch (data) {
    //             case "1":
    //                 var s1 = "more than 6 months warranty";
    //                 break;
    //             case "2":
    //                 var s1 = "less than 6 months warranty";
    //                 break;
    //             case '3':
    //                 var s1 = "no warranty";
    //                 break;
    //             default:
    //                 var s1 = "";

    //                 break;
    //         }

    //         document.getElementById('details1').innerHTML = "-I have " + s1;
    //     } // for condition 2
    //     function checkrdo2(data) {
    //         switch (data) {
    //             case "4":
    //                 var s1 = "Scratch less";
    //                 break;
    //             case "5":
    //                 var s1 = "Good(not much scratch)";
    //                 break;
    //             case "6":
    //                 var s1 = "Average(Less than two dent)";
    //                 break;
    //             case "7":
    //                 var s1 = "More than 2 dents/Body Cracks/Heavy Scratches on Body";
    //                 break;
    //             default:
    //                 var s1 = "";
    //                 break;
    //         }
    //         document.getElementById('details2').innerHTML = "-" + s1;
    //     }
    //     // for condition 3
    //     function checkrdo3(data) {
    //         switch (data) {
    //             case "8":
    //                 var s1 = "Scratch-Less Working Screen";
    //                 break;
    //             case "9":
    //                 var s1 = "Lines / Spots / Discolouration";
    //                 break;
    //             case "10":
    //                 var s1 = "Blank Screen / Non - Working";
    //                 break;
    //             case "11":
    //                 var s1 = "Cracked Screen";
    //                 break;
    //             case "12":
    //                 var s1 = "Scratches On Screen";
    //                 break;
    //             default:
    //                 var s1 = "";
    //                 break;
    //         }
    //         document.getElementById('details3').innerHTML = "- " + s1;
    //     }
    //     // for condition 4 for checking accesories s
    //     function checkrdo4(data) {
    //         switch (data) {
    //             case "13":
    //                 var s1 = "Charger";
    //                 document.getElementById('charger').innerHTML = "I have " + s1;
    //                 break;
    //             case "14":
    //                 var s1 = "Earphones";
    //                 document.getElementById('earphone').innerHTML = "I have " + s1;
    //                 break;
    //             case "15":
    //                 var s1 = "Box";
    //                 document.getElementById('box').innerHTML = "I have " + s1;
    //                 break;
    //             default:
    //                 var s1 = "Bill";
    //                 document.getElementById('bill').innerHTML = "I have " + s1;
    //                 break;
    //         }

    //     }
    //     // for condition 5
    //     function checkrdo5(data) {
    //         switch (data) {
    //             case "17":
    //                 document.getElementById('frontCamera').innerHTML = "Front camera is not working";
    //                 break;
    //             case "18":
    //                 document.getElementById('backCamera').innerHTML = "Back Camera is not working";
    //                 break;
    //             case "19":
                    
    //                 document.getElementById('battary').innerHTML = "Battery is not working";
    //                 break;
    //             case "20":
                   
    //                 document.getElementById('fingerSensor').innerHTML = "Finger sensor is not working";
    //                 break;
    //             case "21":
                    
    //                 document.getElementById('faceId').innerHTML = "Face id is not working";
    //                 break;
    //             case "22":
                    
    //                 document.getElementById('bluetooth').innerHTML = "Bluetooth/wifi is not working";
    //                 break;
    //             case "23":
                   
    //                 document.getElementById('bentPhone').innerHTML = "I have Bent Phone";
    //                 break;
    //             case "24":
                   
    //                 document.getElementById('changedDisplay').innerHTML = "I have changed display of phone";
    //                 break;
    //             case "25":
                
    //                 document.getElementById('speakerProblem').innerHTML = "Have Problem Of Speaker";
    //                 break;
    //             case "26":
                   
    //                 document.getElementById('mic').innerHTML = "Problem in MIC";
    //                 break;
    //             case "27":
                   
    //                 document.getElementById('network').innerHTML = "Have Network Problem";
    //                 break;

    //             default:
    //                 document.getElementById('charging').innerHTML = "Problem While Charging";
    //                 break;
    //         }

    //     }
    // </script>
    <div class="container">
    <?php include "../footer.php"; ?>
    </div>
</body>

</html>