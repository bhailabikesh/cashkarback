<?php
session_start();
ob_start();
$err_msg = '';
$success_msg = '';
include "../content/connection.php";
if (!(isset($_SESSION['VENDOR-LOGIN']))) {
    header("location:https://cashkar.in/vendor/login/index.php");
} else {
    $vendorID = $_SESSION['VENDOR-LOGIN'];
}
if (isset($_GET['order'])) {
    $oid = $_GET['order'];
    $sqlOrder = "SELECT * FROM orderlist where id = '$oid'";
    $queryOrder = mysqli_query($connect, $sqlOrder);
    $resOrder = mysqli_fetch_array($queryOrder);
    $brandName = $resOrder['brand'];
    $modelId = $resOrder['model_id'];
    $userId = $resOrder['byUser'];
    $modelSql = "SELECT * FROM model where id = '$modelId'";
    $queryModel = mysqli_query($connect, $modelSql);
    $resModelName = mysqli_fetch_array($queryModel);
    $modelName = $resModelName['model_name'];
    $warranty = $resOrder['warrantyStatus'];
    $bodyCondition = $resOrder['bodyCondition'];
    $screenCondition = $resOrder['screenCondition'];
    $Accessories = $resOrder['Accessories'];
    $problems = $resOrder['problems'];

    // all details of order
    $getOriginalPrice = "SELECT * from model where id = '$modelId'";
    $queryOriginalPrice = mysqli_query($connect, $getOriginalPrice);
    $resultData = $queryOriginalPrice->fetch_array();
    $priceOfDevice = $resultData['price'];
    $modelName = $resultData['model_name'];
    $brandId = $resultData['id'];
    //getting price of device to cut price
    $warranty0To3 = $resultData['0To3Warranty'];
    $warranty3To6 = $resultData['3To6Warranty'];
    $warranty6To11 = $resultData['6To11Warranty'];
    $noWarranty = $resultData['noWarranty'];
    $scratchlessBody = $resultData['scratchlessBody'];
    $goodBody = $resultData['good'];
    $averageBOdy = $resultData['average'];
    $belowAverage = $resultData['bellowAverage'];
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
    $speaker = $resultData['speakerProblem'];
    $mic = $resultData['MICproblem'];
    $network = $resultData['networkProblem'];
    $charging = $resultData['chargingProblem'];
    $backGlassBroken = $resultData['backGlassBroken'];
    $nanCharger = $resultData['notHavingCharger'];
    $nanEarphone = $resultData['notHavingEarphones'];
    $nanBox = $resultData['notHavingBox'];
    $nanBill = $resultData['notHavingBill']; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://cashkar.in/images/site-logo.png" type="image/x-icon">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- links for css start here -->
        <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
        <link rel="stylesheet" href="https://cashkar.in/css/sell-phone.css">
        <link rel="stylesheet" type="text/css" href="https://cashkar.in/css/calculate.css">
        <title> Recheck - Vendor - Cashkar |</title>
    </head>

    <body style="background-color:#eee;">
        <?php include "../content/menu.php"; ?>
        <?php include "../content/connection.php"; ?>
        <div class="container mt-1">
            <!--Headers of page-->
            <div class="col-lg-10 col-md-9 col-sm-12 col-12 m-auto">
                <div class="alert alert-success">
                    <h4 class="display-5">Recheck Device</h4>
                </div>
            </div>
            <!--user info section-->
            <div class="col-lg-10 col-md-9 col-sm-12 col-12 m-auto">
                <div class="jombotron shadow mb-2">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h3>User Details.</h3>
                        </div>
                        <div class="card-body">
                            <div class="row ml-1">
                                <?php
                                // echo $_SESSION['page1Price'];
                                $sqlUser =  "SELECT * FROM orderlist where id = '$oid'";
                                $queryUser = mysqli_query($connect, $sqlUser);
                                $resGetUserId = mysqli_fetch_array($queryUser);
                                $finalPrice = $resGetUserId['finalPrice'];
                                $userId = $resGetUserId['byUser'];
                                $modelId = $resGetUserId['model_id'];
                                $userAddress = $resGetUserId['address'] . ', ' . $resGetUserId['opt_address'] . ' ' . $resGetUserId['city'] . ' ' . $resGetUserId['zip'];
                                //getting user info related to this order
                                $sqlOrderUser = "SELECT * FROM users where id ='$userId'";
                                $queryUserInfo = mysqli_query($connect, $sqlOrderUser);
                                $resUserInfo = mysqli_fetch_array($queryUserInfo);
                                $fullName = $resUserInfo['fullName'];
                                // $userAddress = $resGetUserId['address'];
                                $email = $resUserInfo['email'];
                                $phone = $resGetUserId['phoneNumber']; ?>
                                <?php
                                if (isset($_GET['q']) and $_GET['q'] === '6') {
                                ?>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Name:</strong> <?php echo $fullName; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Address:</strong> <?php echo $userAddress; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Email:</strong> <?php echo $email; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Phone:</strong> <?php echo $phone; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Selling price:</strong> <?php echo $_SESSION['page5Price'].' INR'; ?></p>
                                <?php
                                } else {
                                ?>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Name:</strong> <?php echo $fullName; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Address:</strong> <?php echo $userAddress; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Email:</strong> <?php echo $email; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Phone:</strong> <?php echo $phone; ?></p>
                                    <p class="p-0 m-0 col-lg-4 col-sm-6 col-12"><strong>Selling price:</strong> <?php echo $finalPrice . ' INR'; ?></p>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--device details-->
            <?php
            $sqlChecked = "SELECT * FROM orderlist where id = '$oid'";
            $queryChecked = mysqli_query($connect, $sqlChecked);
            $resChecked = mysqli_fetch_array($queryChecked);
            $getOrderId = $resChecked['id'];
            $warrantyCheck = $resChecked['warrantyStatus'];
            //checking for warranty
            if ($warrantyCheck == '1') {
                $warranty1 = "checked";
                $warrantyV = "Have warranty between 0 To 3 months";
            } elseif ($warrantyCheck == '2') {
                $warranty2 = "checked";
                $warrantyV = "Have warranty between 3 To 6 months";
            } elseif ($warrantyCheck == '3') {
                $warranty3 = "checked";
                $warrantyV = "Have warranty between 6 To 11 months";
            } else {
                $warranty0 = "checked";
                $warrantyV = "Don't have Warranty";
            }
            //checking for body condition
            $bodyCheck = $resChecked['bodyCondition'];
            if ($bodyCheck == '4') {
                $body1 = "checked";
                $bodyV = "Scratchless body";
            }
            if ($bodyCheck === '5') {
                $body2 = "checked";
                $bodyV = "Body is Good";
            }
            if ($bodyCheck == '6') {
                $body3 = "checked";
                $bodyV = "Average body";
            }
            if ($bodyCheck == '7') {
                $body4 = "checked";
                $bodyV = "Body is below average condition";
            }
            //checking for screen condition
            $screenCheck = $resChecked['screenCondition'];
            if ($screenCheck == '8') {
                $screen1 = "checked";
                $screenV = "ScratchLess screen";
            } elseif ($screenCheck == '9') {
                $screen2 = "checked";
                $screenV = "Lines and spot are in screen";
            } elseif ($screenCheck == '10') {
                $screen3 = "checked";
                $screenV = "Blank and not working screen";
            } elseif ($screenCheck == '11') {
                $screen4 = "checked";
                $screenV = "Cracked screen";
            } else {
                if ($screenCheck == '11') {
                    $screen5 = "checked";
                    $screenV = "Small scratches screen";
                }
            }
            //other problem checking
            $problems = $resChecked['problems'];
            if ($problems != '') {
                $problemsArray = explode('/', $problems);
                $arrLength = count($problemsArray);
                $noProblem = "Don't have any other problem";
                //   print_r($problemsArray);
                if (in_array('17', $problemsArray)) {
                    $problem17 = "checked";
                    $problem17V = "Front Camera is not working";
                } else {
                    // echo "17 not found";
                }
                if (in_array('18', $problemsArray)) {
                    $problem18 = "checked";
                    $problem18V = "Back Camera is not working";
                } else {
                    // echo "18 not found";
                }
                if (in_array('19', $problemsArray)) {
                    $problem19 = "checked";
                    $problem19V = "Battery is not working";
                } else {
                    // echo "19 not found";
                }
                if (in_array('20', $problemsArray)) {
                    $problem20 = "checked";
                    $problem20V = "Finger sensor is not working";
                }
                if (in_array('21', $problemsArray)) {
                    $problem21 = "checked";
                    $problem21V = "Face Id is not working";
                }
                if (in_array('22', $problemsArray)) {
                    $problem22 = "checked";
                    $problem22V = "Bluetooth is not working";
                }
                if (in_array('23', $problemsArray)) {
                    $problem23 = "checked";
                    $problem23V = "Have bent phone";
                }
                if (in_array('24', $problemsArray)) {
                    $problem24 = "checked";
                    $problem24V = "Changed Display";
                }
                if (in_array('25', $problemsArray)) {
                    $problem25 = "checked";
                    $problem25V = "Have speaker problem";
                }
                if (in_array('26', $problemsArray)) {
                    $problem26 = "checked";
                    $problem26V = "Have Mic problem";
                }
                if (in_array('27', $problemsArray)) {
                    $problem27 = "checked";
                    $problem27V = "Have network problem";
                }
                if (in_array('28', $problemsArray)) {
                    $problem28 = "checked";
                    $problem28V = "Have charging issue";
                }
                if (in_array('29', $problemsArray)) {
                    $problem29 = "checked";
                    $problem29V = "Have Broken back glass";
                }
            } //ends conditon of problems checking
            $accessories = $resChecked['Accessories'];
            $accessoriesArr = explode("/", $accessories);
            if (in_array('13', $accessoriesArr)) {
                $accessories1 = "checked";
                $accessories1V = "Have Charager (no deduction)";
            }
            if (in_array('14', $accessoriesArr)) {
                $accessories2 = "checked";
                $accessories2V = "Have Earphone (no deduction)";
            }
            if (in_array('15', $accessoriesArr)) {
                $accessories3 = "checked";
                $accessories3V = "Have box (no deduction)";
            }
            if (in_array('16', $accessoriesArr)) {
                $accessories4 = "checked";
                $accessories4V = "Have Bill (no deduction)";
            } ?>
            <!-- selection overview -->
            <div class="col-lg-10 col-md-9 col-sm-12 col-12 mx-auto my-3">
                <div class="ask-mbl-feature px-3 py-2 shadow">
                    <!-- right side bar  for feature selection-->
                    <h2 class="m-0 py-0">Deduction made.</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-12">
                            <h4>1. Warranty</h4>
                            <p><?php echo $warrantyV; ?></p>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <h4>2. Body</h4>
                            <p><?php echo $bodyV; ?></p>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <h4>3. Screen</h4>
                            <p><?php echo $screenV; ?></p>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <h4>4. Have Accessories</h4>
                            <p><?php echo $accessories1V; ?></p>
                            <p><?php echo $accessories2V; ?></p>
                            <p><?php echo $accessories3V; ?></p>
                            <p><?php echo $accessories4V; ?></p>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <h4>5. Other Problem</h4>
                            <p><?php echo $problem17V; ?></p>
                            <p><?php echo $problem18V; ?></p>
                            <p><?php echo $problem19V; ?></p>
                            <p><?php echo $problem20V; ?></p>
                            <p><?php echo $problem21V; ?></p>
                            <p><?php echo $problem22V; ?></p>
                            <p><?php echo $problem23V; ?></p>
                            <p><?php echo $problem24V; ?></p>
                            <p><?php echo $problem25V; ?></p>
                            <p><?php echo $problem26V; ?></p>
                            <p><?php echo $problem27V; ?></p>
                            <p><?php echo $problem28V; ?></p>
                            <p><?php echo $problem29V; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-12 col-12 mx-auto my-3">
                <div class="ask-mbl-feature shadow px-3 py-2">
                    <!-- warranty condition  -->
                    <?php
                    if (isset($_GET['q']) && $_GET['q'] == 1) {
                    ?>
                        <form method="post">
                            <div class="condition">
                                <?php echo $err_msg; ?>
                                <?php echo $success_msg; ?>
                                <h3>1. Device Warranty Status</h3><br>
                                <label class="rdo-lvl">0 to 3 Months Warranty
                                    <input type="radio" name="radio1" value="1" <?php echo $warranty1; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">3 to 6 Months Warranty
                                    <input type="radio" name="radio1" value="2" <?php echo $warranty2; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">6 to 11 Months Warranty
                                    <input type="radio" name="radio1" value="3" <?php echo $warranty3; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">No Warranty
                                    <input type="radio" name="radio1" value="0" <?php echo $warranty0; ?>>
                                    <span class="checkmark"></span>
                                </label>
                                <br><br>
                            </div>
                            <button type="submit" name="btnSubmit1" class="btn btn-success pl-4 pr-4 pt-2 pb-2">Next</button>
                        </form>
                        <?php
                        if (isset($_POST['btnSubmit1'])) {
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
                                } elseif ($getValueFromRadio1 == '3') {
                                    $getValueFromRadio1 = 3;
                                    $priceAfterDeduction1 = $priceOfDevice - $warranty6To11;
                                } else {
                                    $getValueFromRadio1 = 0;
                                    $priceAfterDeduction1 = $priceOfDevice - $noWarranty;
                                }
                                $_SESSION['page1Price'] = $priceAfterDeduction1;
                                $_SESSION['selection1'] = $getValueFromRadio1;
                                $link = "https://cashkar.in/vendor/recheck.php?order=" . $oid . "&q=2";
                                header("location:$link");
                            }
                        } ?>
                    <?php
                    } ?>
                    <!-- body condition  -->
                    <?php
                    if (isset($_GET['q']) && $_GET['q'] == 2) {
                    ?>
                        <form method="post">
                            <div class="condition">
                                <h3>2. Device Body Condition.</h3><br>
                                <label class="rdo-lvl">Scratchless(No Usage Signs)
                                    <input type="radio" name="radio2" value="4" <?php echo $body1; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">Good(Light Usage Signs / No Dents / No Body Cracks)
                                    <input type="radio" name="radio2" value="5" <?php echo $body2; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">Average(Less than two dents / No Body Cracks / No Heavy Scratches)
                                    <input type="radio" name="radio2" value="6" <?php echo $body3; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">Below Average(More than 2 dents / Body Cracks / Heavy Scratches on Body)
                                    <input type="radio" name="radio2" value="7" <?php echo $body4; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                            </div><br>
                            <button type="submit" name="btnSubmit2" class="btn btn-success pl-4 pr-4 pt-2 pb-2">NEXT</button>
                        </form>
                        <?php
                        if (isset($_POST['btnSubmit2'])) {
                            if (isset($_POST['radio2'])) {
                                //for body condition
                                $priceAfterDeduction1 = $_SESSION['page1Price'];
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
                                    $priceAfterDeduction2 = $priceAfterDeduction1 - $belowAverage;
                                    //echo "price after deduction ".$priceAfterDeduction2;
                                }
                                $_SESSION['page2Price'] = $priceAfterDeduction2;
                                $_SESSION['selection2'] = $getValueFromRadio2;
                                $link = "https://cashkar.in/vendor/recheck.php?order=" . $oid . "&q=3";
                                header("location:$link");
                            }
                        } ?>
                    <?php
                    } ?>
                    <!-- screen condition -->
                    <?php
                    if (isset($_GET['q']) && $_GET['q'] == 3) {
                        
                    ?>
                        <form method="post">
                            <div class="condition">
                                <h3>3. Screen Condition.</h3><br>
                                <label class="rdo-lvl">Scratch-Less Working Screen
                                    <input type="radio" name="radio3" value="8" <?php echo $screen1; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">Lines / Spots / Discolouration
                                    <input type="radio" name="radio3" value="9" <?php echo $screen2; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">Blank Screen / Non - Working
                                    <input type="radio" name="radio3" value="10" <?php echo $screen3; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">Cracked Screen
                                    <input type="radio" name="radio3" value="11" <?php echo $screen4; ?>>
                                    <span class="checkmark"></span>
                                </label><br><br>
                                <label class="rdo-lvl">Scratches On Screen
                                    <input type="radio" name="radio3" value="12" <?php echo $screen5; ?>>
                                    <span class="checkmark"></span>
                                </label><br>
                            </div><br>
                            <button type="submit" name="btnSubmit3" class="btn btn-success pl-4 pr-4 pt-2 pb-2">NEXT</button>
                        </form>

                        <?php
                        if (isset($_POST['btnSubmit3'])) {
                            if (isset($_POST['radio3'])) {
                                $priceAfterDeduction2 = $_SESSION['page2Price'];
                                $getValueFromRadio3 = $_POST['radio3'];
                                if ($getValueFromRadio3 == '8') {
                                    $getValueFromRadio3 = 8;

                                    $priceAfterDeduction3 = $priceAfterDeduction2 - $screenScratchless;
                                } elseif ($getValueFromRadio3 == '9') {
                                    $getValueFromRadio3 = 9;
                                    $priceAfterDeduction3 = $priceAfterDeduction2 - $lines;
                                    //echo $priceAfterDeduction3;
                                } elseif ($getValueFromRadio3 == '10') {
                                    $getValueFromRadio3 = 10;
                                    $priceAfterDeduction3 = $priceAfterDeduction2 - $blank;
                                } elseif ($getValueFromRadio3 == '11') {
                                    $getValueFromRadio3 = 11;
                                    $priceAfterDeduction3 = $priceAfterDeduction2 - $crackedScreen;
                                } else {
                                    $getValueFromRadio3 = 12;
                                    $priceAfterDeduction3 = $priceAfterDeduction2 - $scratchOnScreen;
                                }
                                $_SESSION['page3Price'] = $priceAfterDeduction3;
                                $_SESSION['selection3'] = $getValueFromRadio3;
                                $link = "https://cashkar.in/vendor/recheck.php?order=" . $oid . "&q=4";
                                header("location:$link");
                            }
                        } ?>
                    <?php
                    } ?>
                    <!-- other problems -->
                    <?php
                    if (isset($_GET['q']) && $_GET['q'] == 4) {
                        
                    ?>
                        <form method="post">
                            <div class="condition">
                                <h3>4. Select if any problems exist.</h3><br>
                                <label class="container-checkbox">Front Camera
                                    <input type="checkbox" name="chk1" value="17" <?php echo $problem17; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Back Camera
                                    <input type="checkbox" name="chk2" value="18" <?php echo $problem18; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Battery
                                    <input type="checkbox" name="chk3" value="19" <?php echo $problem19; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Finger Sensor
                                    <input type="checkbox" name="chk4" value="20" <?php echo $problem20; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Face ID
                                    <input type="checkbox" name="chk5" value="21" <?php echo $problem21; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Bluetooth
                                    <input type="checkbox" name="chk6" value="22" <?php echo $problem22; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Bent phone
                                    <input type="checkbox" name="chk7" value="23" <?php echo $problem23; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Display Changed
                                    <input type="checkbox" name="chk8" value="24" <?php echo $problem24; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Speaker Problem
                                    <input type="checkbox" name="chk9" value="25" <?php echo $problem25; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">MIC problem
                                    <input type="checkbox" name="chk10" value="26" <?php echo $problem26; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Network Problem
                                    <input type="checkbox" name="chk11" value="27" <?php echo $problem27; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Charging problem
                                    <input type="checkbox" name="chk12" value="28" <?php echo $problem28; ?>>
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Broken Back Glass
                                    <input type="checkbox" name="chk13" value="29" <?php echo $problem29; ?>>
                                    <span class="checkbox"></span>
                                </label>
                            </div><br>

                            <button type="submit" name="btnSubmit4" class="btn btn-success pl-4 pr-4 pt-2 pb-2">NEXT</button>
                        </form>
                        <?php
                        if (isset($_POST['btnSubmit4'])) {
                            $priceAfterDeduction4 = $_SESSION['page3Price'];
                            if (isset($_REQUEST['chk1'])) {
                                $getValueFrmoCheck1 = $_REQUEST['chk1'];
                                $checkboxArray = '/' . $getValueFrmoCheck1 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction4 - $fCam;
                                //Does deduction only the checkbox are selected from the price gain after doing deduction from check box of condition 4
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction4;
                                //else return value from condition 4
                            }
                            if (isset($_REQUEST['chk2'])) {
                                $getValueFrmoCheck2 = $_REQUEST['chk2'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck2 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $bCam;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }
                            if (isset($_REQUEST['chk3'])) {
                                $getValueFrmoCheck2 = $_REQUEST['chk3'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck2 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $battery;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }
                            if (isset($_REQUEST['chk4'])) {
                                $getValueFrmoCheck4 = $_REQUEST['chk4'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck4 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $sensor;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }

                            if (isset($_REQUEST['chk5'])) {
                                $getValueFrmoCheck5 = $_REQUEST['chk5'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck5 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $faceID;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }
                            if (isset($_REQUEST['chk6'])) {
                                $getValueFrmoCheck6 = $_REQUEST['chk6'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck6 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $bluetooth;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }

                            if (isset($_REQUEST['chk7'])) {
                                $getValueFrmoCheck7 = $_REQUEST['chk7'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck7 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $bentPhone;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }

                            if (isset($_REQUEST['chk8'])) {
                                $getValueFrmoCheck8 = $_REQUEST['chk8'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck8 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $display;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }

                            if (isset($_REQUEST['chk9'])) {
                                $getValueFrmoCheck9 = $_REQUEST['chk9'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck9 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $speaker;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }

                            if (isset($_REQUEST['chk10'])) {
                                $getValueFrmoCheck10 = $_REQUEST['chk10'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck10 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $mic;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }

                            if (isset($_REQUEST['chk11'])) {
                                $getValueFrmoCheck11 = $_REQUEST['chk11'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck11 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $network;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }

                            if (isset($_REQUEST['chk12'])) {
                                $getValueFrmoCheck12 = $_REQUEST['chk12'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck12 . '/';
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $charging;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }
                            if (isset($_REQUEST['chk13'])) {
                                $getValueFrmoCheck13 = $_REQUEST['chk13'];
                                $checkboxArray = $checkboxArray . $getValueFrmoCheck13;
                                $priceAfterDeduction5 = $priceAfterDeduction5 - $backGlassBroken;
                            } else {
                                $priceAfterDeduction5 = $priceAfterDeduction5;
                            }
                            $_SESSION['selection4'] = $checkboxArray;

                            $_SESSION['page4Price'] = $priceAfterDeduction5;
                            $link = "https://cashkar.in/vendor/recheck.php?order=" . $oid . "&q=5";
                            header("location:$link");
                        } ?>
                    <?php
                    } ?>
                    <!-- accessories -->
                    <?php
                    if (isset($_GET['q']) && $_GET['q'] == 5) {
                    ?>
                        <form method="post">
                            <div class="condition">
                                <h3>5. Select Accessories You Have</h3><br>
                                <label class="container-checkbox">Charger
                                    <input type="checkbox" name="chk5_1" value="13" <?php echo $accessories1; ?> onclick="checkrdo4(this.value);">
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Earphone
                                    <input type="checkbox" name="chk5_2" value="14" <?php echo $accessories2; ?> onclick="checkrdo4(this.value);">
                                    <span class="checkbox"></span>
                                </label>

                                <label class="container-checkbox">Box
                                    <input type="checkbox" name="chk5_3" value="15" <?php echo $accessories3; ?> onclick="checkrdo4(this.value);">
                                    <span class="checkbox"></span>
                                </label>
                                <label class="container-checkbox">Bill
                                    <input type="checkbox" name="chk5_4" value="16" <?php echo $accessories4; ?> onclick="checkrdo4(this.value);">
                                    <span class="checkbox"></span>
                                </label>
                            </div>
                            <br>

                            <button type="submit" name="btnSubmit5" class="btn btn-success pl-4 pr-4 pt-2 pb-2">NEXT</button>
                        </form>
                        <?php
                        
                        if (isset($_POST['btnSubmit5'])) {
                            $priceAfterDeduction3 = $_SESSION['page4Price'];
                            if (isset($_REQUEST['chk5_1'])) {
                                $valueOfChk5_1 = $_REQUEST['chk5_1'];
                                $checkboxArray2 = '/' . $valueOfChk5_1 . '/';
                                $priceAfterDeduction4 = $priceAfterDeduction3;
                                //echo $priceAfterDeduction4;
                            } else {
                                $priceAfterDeduction4 = $priceAfterDeduction3 - $nanCharger;
                            }
                            if (isset($_REQUEST['chk5_2'])) {
                                $valueOfChk5_2 = $_REQUEST['chk5_2'];
                                $getValueFrmoCheck5 = $checkboxArray2 . $valueOfChk5_2 . '/';
                                $priceAfterDeduction4 = $priceAfterDeduction4;
                            } else {
                                $priceAfterDeduction4 = $priceAfterDeduction4 - $nanEarphone;
                            }
                            if (isset($_REQUEST['chk5_3'])) {
                                $valueOfChk5_3 = $_REQUEST['chk5_3'];
                                $priceAfterDeduction4 = $priceAfterDeduction4;
                                $checkboxArray2 = $checkboxArray2 . $valueOfChk5_3 . '/';
                            } else {
                                $priceAfterDeduction4 = $priceAfterDeduction4 - $nanBox;
                            }
                            if (isset($_REQUEST['chk5_4'])) {
                                $valueOfChk5_4 = $_REQUEST['chk5_4'];
                                $checkboxArray2 = $checkboxArray2 . $valueOfChk5_4 . '/';
                                $priceAfterDeduction4 = $priceAfterDeduction4;
                            } else {
                                $priceAfterDeduction4 = $priceAfterDeduction4 - $nanBill;
                            }
                            $_SESSION['selection5'] = $checkboxArray2;

                            $_SESSION['page5Price'] = $priceAfterDeduction4;
                            $link = "https://cashkar.in/vendor/recheck.php?order=" . $oid . "&q=6";
                            header("location:$link");
                        } ?>
                    <?php
                    } ?>

                    <?php
                    if (!isset($_GET['q'])) {
                    ?>
                        <a href="?order=<?php echo $oid; ?>&q=1">
                            <button type="button" class="btn btn-success pl-4 pr-4 pt-2 pb-2">Requote</button>
                        </a>
                    <?php
                    } ?>

                    <?php
                    if (isset($_GET['q']) && $_GET['q'] == 6) {
                        
                    ?>
                        <div class="container">
                            <!-- right side bar  for feature selection-->
                            <form method="POST">
                                <button type="button" name="submit-b" class="btn btn-success pl-4 pr-4 pt-2 pb-2" data-toggle="modal" data-target="#agree">Agreed</button>
                                <button type="button" name="submit-bt" class="btn btn-danger pl-4 pr-4 pt-2 pb-2" data-toggle="modal" data-target="#fail">Mark As Fail</button>
                                <!-- Modal  for agreement section-->
                                <div id="agree" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header p-3">
                                                <h3>Confirmation</h3>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="con">IMEI No.:</label>
                                                        <input type="text" class="form-control" placeholder="IMEI number of device" id="con" name="imei" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="con">Social Security No ( Aadhar / Pan No ):</label>
                                                        <input type="text" class="form-control" placeholder="Social Security No ( Aadhar / Pan No )" id="con" name="security-no" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="con">Final Amount Paid:</label>
                                                        <input type="text" class="form-control" placeholder="Final amount paid " id="con" name="f_amt" required>
                                                      
                                                    </div>
                                                    <button type="submit" name="agreeBtn" class="btn btn-success pl-4 pr-4 pt-2 pb-2">Confirm</button>

                                                </div>
                                                <?php
                                                if (isset($_POST['agreeBtn'])) {
                                                    $ssn = $_POST['security-no'];
                                                    $final_amt = $_POST['f_amt'];
                                                    $imei = $_POST['imei'];
                                                    // geting vendor email to assign success
                                                    $sqlVendorEmail = "SELECT * FROM vendor where id = '$vendorID'";
                                                    $queryVendorEmail = mysqli_query($connect,$sqlVendorEmail);
                                                    $resVendorEmail = mysqli_fetch_array($queryVendorEmail);
                                                    $vendorEmail = $resVendorEmail['email'];

                                                    $reason = "Completed by ".$vendorEmail;
                                                    $deductedAmount = $priceOfDevice - $_SESSION['page5Price'];
                                                    $warrantyUpdate = $_SESSION['selection1'];
                                                    $bodyUpdate = $_SESSION['selection2'];
                                                    $screenUpdate = $_SESSION['selection3'];
                                                    $accessoriesUpdate = $_SESSION['selection5'];
                                                    $problemsUpdate = $_SESSION['selection4'];
                                                    $finalPrice = $_SESSION['page5Price'];
                                                    $sqlUpdateOrder = "UPDATE `orderlist` SET `warrantyStatus`='$warrantyUpdate',`bodyCondition`='$bodyUpdate',
                                                    `screenCondition`='$screenUpdate',`Accessories`='$accessoriesUpdate',`problems`='$problemsUpdate',`deductedAmount`='$deductedAmount',
                                                    `finalPrice`='$finalPrice',`isConfirmed`= 1,`pickedUpBy`= '$vendorID', `status` = 'success',`reason` = '$reason' WHERE id ='$oid'";
                                                    $queryUpdateOrder = mysqli_query($connect,$sqlUpdateOrder);
                                                     $sqlUpdateUser = "UPDATE users SET socialSecurity_no = '$ssn' where id = '$userId'"; //update ssn
                                                    $sqlUpdateLead = "UPDATE orderlist SET finalPrice = '$final_amt', imeiOfDevic = '$imei' where id = '$oid'";
                                                    $updateLead = mysqli_query($connect, $sqlUpdateLead); //update imei and final price
                                                    $queryUpdate = mysqli_query($connect, $sqlUpdateUser); //update ssn of user
                                                    if($updateLead && $queryUpdate && $sqlUpdateOrder){
                                                        header("location:https://cashkar.in/vendor/index.php?lead=confirm");
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Modal  for mark as fail section-->

                            </form><br>
                            <div id="fail" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header p-3">
                                            <h3>Confirmation</h3>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST">
                                                <div class="form-group">
                                                    <label for="sel1">Select a reason:</label>
                                                    <select class="form-control" id="sell1" name="fail_reasons">
                                                        <option value="Condition not acceptable">Condition not acceptable</option>
                                                        <option value="Not giving I’d proof">Not giving Id proof</option>
                                                        <option value="Not happy with the amount">Not happy with the amount</option>
                                                        <option selected disabled>Select why this order got failed</option>
                                                    </select>
                                                </div>
                                                <?php
                                                if (isset($_POST['failed'])) {
                                                    $reason = $_POST['fail_reasons'];
                                                    // geting vendor email to assign success
                                                    $sqlVendorEmail = "SELECT * FROM vendor where id = '$vendorID'";
                                                    $queryVendorEmail = mysqli_query($connect,$sqlVendorEmail);
                                                    $resVendorEmail = mysqli_fetch_array($queryVendorEmail);
                                                    $vendorEmail = $resVendorEmail['email'];

                                                    // $reason = "Completed by ".$vendorEmail;
                                                    $deductedAmount = $priceOfDevice - $_SESSION['page5Price'];
                                                    $warrantyUpdate = $_SESSION['selection1'];
                                                    $bodyUpdate = $_SESSION['selection2'];
                                                    $screenUpdate = $_SESSION['selection3'];
                                                    $accessoriesUpdate = $_SESSION['selection5'];
                                                    $problemsUpdate = $_SESSION['selection4'];
                                                    $finalPrice = $_SESSION['page5Price'];
                                                    $sqlUpdateOrder = "UPDATE `orderlist` SET `warrantyStatus`='$warrantyUpdate',`bodyCondition`='$bodyUpdate',
                                                    `screenCondition`='$screenUpdate',`Accessories`='$accessoriesUpdate',`problems`='$problemsUpdate',`deductedAmount`='$deductedAmount',
                                                    `finalPrice`='$finalPrice',`isConfirmed`= 1,`pickedUpBy`= '$vendorID', `status` = 'failed',`reason` = '$reason' WHERE id ='$oid'";
                                                    $updateLead = mysqli_query($connect,$sqlUpdateOrder);
                                                    if($updateLead){
                                                        header("location:https://cashkar.in/vendor/index.php?lead=failed");
                                                    }
                                                    // $sqlUpdateLead = "UPDATE orderlist SET `status` = 'failed', reason = '$reason' where id = '$oid'";
                                                    // $updateLead = mysqli_query($connect, $sqlUpdateLead); //update imei and final price
                                                } ?>
                                                <input type="submit" name="failed" class="btn btn-success pl-4 pr-4 pt-2 pb-2" value="Mark as Failed">
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>

        <?php include "../footer.php"; ?>
    </body>

    </html>
<?php
}
?>