<?php
session_start();
ob_start();
include "../content/connection.php";
include "../content/function.inc.php";
if (sessionCheck()) {
    if (isset($_SESSION['mobile_sell_order'])) {
        //  header("location:https://cashkar.in/checkout/");  
    } else {
        header("location:https://cashkar.in/login/?action=re-login");
    }
} else {
    header("location:https://cashkar.in/login/");
}

$userID = $_SESSION['USER_LOGIN'];
//form submission

?>
<!--model info-->
<?php
$modelId = $_SESSION['MODEL_ID'];
$brandName = ucfirst($_SESSION['BRAND_NAME']);
$sqlModel = "SELECT * FROM model where id = '$modelId'";
$queryModel = mysqli_query($connect, $sqlModel);
$resModel = mysqli_fetch_array($queryModel);
$modelName = $resModel['model_name'];
$storage = $resModel['storage'];
$ram = $resModel['ram'];
$img = $resModel['img'];
$cat = $resModel['category'];
if ($cat == 'mobile') {
    $dir = "https://cashkar.in/images/model/mobile/" . $img;
    $cat = 'mobile';
}
if ($cat == 'ipad/tablets') {
    $dir = "https://cashkar.in/images/model/ipad-tablets/" . $img;
    $cat = 'ipad/tablets';
}
if ($_SESSION['SELL_TYPE'] == 'accessories');
if ($ram != '') {
    $storage = $ram . 'GB' . '/' . $storage . 'GB';
} else {
    $storage = $storage . 'GB';
}
$basePrice = $resModel['price'];
$sp = $_SESSION['INI_PRICE'];
$warranty = $_SESSION['WARRANTY'];
$body = $_SESSION['BODY'];
$screen = $_SESSION['SCREEN'];
$accessories = $_SESSION['ACCESSORIES'];
$problems = $_SESSION['PROBLEMS'];
$deducted_amt = $_SESSION['DEDUCTED_AMT'];
$final_amt = $_SESSION['FINAL_AMT'];
$phone = $_SESSION["phoneNumber"];

//checkout
if (isset($_POST['addPromo'])) {
    $code = $_POST['code'];
    $sqlPromo = "SELECT * FROM couponCode where code = '$code'";
    $queryPromo = mysqli_query($connect, $sqlPromo);
    if (mysqli_num_rows($queryPromo) > 0) {
        $getVal = mysqli_fetch_array($queryPromo);
        $value = $getVal['value'];
        if (!(isset($_SESSION['appliedState']))) {
            $_SESSION['appliedState'] = 0;
        } else {
            $_SESSION['appliedState'] = 1;
        }
        if ($_SESSION['appliedState'] == 0) {
            $_SESSION['FINAL_AMT'] = $_SESSION['FINAL_AMT'] + $value;
            $finalAmT = $_SESSION['FINAL_AMT'];
            $_SESSION['appliedState'] = 1;
        } else {
            // generate error if user wants to use multiple time
            $code_err = "
                                  <div class='alert alert-danger p-2'>Can't use multiple time.</div>
                                  ";
            $finalAmT = $_SESSION['FINAL_AMT'];
        }
    } else {
        $finalAmT = $_SESSION['FINAL_AMT'];
    }
} else {
    $finalAmT = $_SESSION['FINAL_AMT'];
}
if (isset($_POST['checkOut'])) {
    $address = $_POST['address'];
    $address_opt = $_POST['address2'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $pickup = $_POST['pickupDate'];
    //payment method
    if (isset($_POST['paymentMethod'])) {
        $payment = $_POST['paymentMethod'];

        if ($payment == 'Paytm') {
            $paymentMethod = "Paytm=>" . $_POST['paytm'];
        } else if ($payment == 'UPI') {
            $paymentMethod = "UPI=>" . $_POST['upi'];
        } else if ($payment == 'gpay') {
            $paymentMethod = "Gpay=>" . $_POST['gpay'];
        } else if ($payment == 'Cash') {
            $paymentMethod = "Cash";
        } else {
            $bankName = $_POST['bankName'];
            $accName = $_POST['acc-name'];
            $accNumber = $_POST['acc-number'];
            $code = $_POST['swift'];
            $paymentMethod = 'Bank Name=>' . $bankName . '/' . 'Account holder name=>' . $accName . '/' . 'Account Number=>' . $accNumber . '/' . 'Swift Code=>' . $code;
        }
    }
    $sqlOrder = "INSERT INTO `orderlist`(`brand`, `category`, `model_id`, `storage`, `ram`, `address`, `opt_address`,`paymentMethod`, `city`, `zip`,`addressSavedBy`,`original_price`, `warrantyStatus`, `bodyCondition`, `screenCondition`, `Accessories`, `problems`, `deductedAmount`, `finalPrice`, `byUser`, `phoneNumber`, `pickUpDate`) 
               VALUES ('$brandName','$cat','$modelId','$storage','$ram','$address','$address_opt','$paymentMethod','$city','$zip','$userID','$finalAmT','$warranty','$body','$screen','$accessories','$problems','$deducted_amt','$final_amt','$userID','$phone','$pickup')";
    $queryOrder = mysqli_query($connect, $sqlOrder);
    if ($queryOrder) {
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
    <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://cashkar.in/images/site-logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
</head>

<body style="background:#eee">
    <?php include "../content/menu.php"; ?>
    <div class="container mt-5 p-0">
        <div class="pt-5">
            <div class="row px-2 py-3 ">

                <!--Billing section -->
                <div class="col-md-8 px-3 py-4 bg-light shadow">
                    <div class="row bg-white p-3">
                        <?php
                        ?>
                        <?php
                        ?>
                        <div class="col-md-5 col-sm-10 col-12 m-auto">
                            <img src="<?php echo $dir; ?>" alt="" class="img-fluid" />
                        </div>
                        <div class="col-md-7 col-sm-10 col-12 mb-auto">
                            <h3 class="text-dark">
                                <?php echo $brandName . ' ' . $modelName . ' (' . $storage . ')'; ?>
                            </h3>
                            <small class="text-muted">Selling price</small><br>
                            <h3 class="display-4 m-1" style="color:#f45c09;">
                                <i class="fa fa-inr"> </i>
                                <?php echo $finalAmT; ?>
                                </h2>
                                <p class="p-4 shadow-lg border-1 mb-3">This value is based on the conditon selected. </p>
                                <p class="p-4 shadow-lg border-1 mb-3">Fill the remaining details below to confirm. </p>
                        </div>
                    </div>
                    <h4 class="mb-3 mt-2">Your pickup address</h4>
                    <hr>
                    <!-- <div class="form-check">-->
                    <!--sm means same-->
                    <!--    <input type="radio" class="form-check-input" value="sm" name="checkbx" checked id="acc-addr" onclick="radio_check()">-->
                    <!--    <label class="form-check-label" for="exampleCheck1">Use Same as Account Address.</label>-->
                    <!--</div>-->
                    <div class="row m-1 p-1">
                        <?php
                        // $sqlUser = "SELECT * FROM users where id ='$userID'";
                        // $queryUser = mysqli_query($connect,$sqlUser);
                        // $resUser = mysqli_fetch_array($queryUser);

                        ?>
                        <!--<p class="col-4"><strong>Name:</strong> -->
                        <?php //echo $resUser['fullName'];
                        ?>
                        </p>
                        <!--<p class="col-4"><strong>Email:</strong> -->
                        <?php //echo $resUser['email'];
                        ?>
                        </p>
                        <!--<p class="col-4"><strong>Phone:</strong> -->
                        <?php //echo $resUser['phone'];
                        ?>
                        </p>
                        <!--<p class="col-4"><strong>City:</strong> -->
                        <?php //echo $resUser['city'];
                        ?>
                        </p>
                        <!--<p class="col-4"><strong>Address:</strong> -->
                        <?php //echo $resUser['address'];
                        ?>
                        </p>
                        <!--<p class="col-4"><strong>Postal Code:</strong> -->
                        <?php //echo $resUser['postalCode'];
                        ?>
                        </p>
                        <!--</div>-->
                        <!--<div class="form-check">-->
                        <!-- att measn alternative -->
                        <!--    <input type="radio" class="form-check-input" valu="att" name="checkbx" id="att-addr" onclick="radio_check1()">-->
                        <!--    <label class="form-check-label" for="exampleCheck1">Use Alternate Address For Pickup.</label>-->
                        <!--</div>-->
                        <!--input form for details-->
                        <form class="needs-validation" novalidate method="POST">
                            <div style="display:block;" id="billing_section">
                                <!--<div class="row">-->
                                <!--  <div class="col-md-6 mb-3">-->
                                <!--    <label for="firstName">First name</label>-->
                                <!--    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>-->
                                <!--    <div class="invalid-feedback">-->
                                <!--      Valid first name is required.-->
                                <!--    </div>-->
                                <!--  </div>-->
                                <!--  <div class="col-md-6 mb-3">-->
                                <!--    <label for="lastName">Last name</label>-->
                                <!--    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>-->
                                <!--    <div class="invalid-feedback">-->
                                <!--      Valid last name is required.-->
                                <!--    </div>-->
                                <!--  </div>-->
                                <!--</div>-->
                                <p>Name, email and phone number will be used default of your account</p>
                                <!--<div class="mb-3">-->
                                <!--  <label for="username">Username</label>-->
                                <!--  <div class="input-group">-->
                                <!--    <div class="input-group-prepend">-->
                                <!--      <span class="input-group-text">@</span>-->
                                <!--    </div>-->
                                <!--    <input type="text" class="form-control" id="username" placeholder="Username" required>-->
                                <!--    <div class="invalid-feedback" style="width: 100%;">-->
                                <!--      Your username is required.-->
                                <!--    </div>-->
                                <!--  </div>-->
                                <!--</div>-->
                                <!--<div class="mb-3">-->
                                <!--  <label for="email">Email <span class="text-muted"></span></label>-->
                                <!--  <input type="email" class="form-control" id="email" placeholder="you@example.com">-->
                                <!--  <div class="invalid-feedback">-->
                                <!--    Please enter a valid email address for shipping updates.-->
                                <!--  </div>-->
                                <!--</div>-->
                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address2">Address 2</label>
                                    <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite or house no.">
                                </div>
                                <div class="row">
                                    <!--<div class="col-md-5 mb-3">-->
                                    <!--  <label for="country">Country</label>-->
                                    <!--  <select class="custom-select d-block w-100" id="country" required>-->
                                    <!--    <option value="">Choose...</option>-->
                                    <!--    <option>United States</option>-->
                                    <!--  </select>-->
                                    <!--  <div class="invalid-feedback">-->
                                    <!--    Please select a valid country.-->
                                    <!--  </div>-->
                                    <!--</div>-->
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">City</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Your City" required>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Postal code</label>
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input-area">
                                    <label for="number">Shedule PickUp</label>
                                    <input type="datetime-local" id="pickupDate" name="pickupDate" class="form-control">
                                    <!--<input type="text" class="input-box" id="number" required validate maxlength="10" minlength="10" onkeypress="return onlyNumberKey(event)" name="number" placeholder="Your Phone number..">-->
                                </div>
                                <hr class="mb-4">
                                <!--<div class="custom-control custom-checkbox">-->
                                <!--  <input type="checkbox" class="custom-control-input" id="save-info">-->
                                <!--  <label class="custom-control-label" for="save-info">Save this information for next time</label>-->
                                <!--</div>-->
                            </div>
                            <hr class="mb-4">
                            <h4 class="mb-3">Payment Method</h4>
                            <!--<p>You can setup payment method in your profile page</p>-->
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="paytm" name="paymentMethod" value="Paytm" type="radio" class="custom-control-input" required onClick=chkPaytm()>
                                    <label class="custom-control-label" for="paytm">Paytm</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="gpay" name="paymentMethod" value="Gpay" type="radio" class="custom-control-input" required onclick="chkGpay()">
                                    <label class="custom-control-label" for="gpay">Gpay</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="upi_f" name="paymentMethod" value="UPI" type="radio" class="custom-control-input" required onclick="chkUpi()">
                                    <label class="custom-control-label" for="upi_f">UPI</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="cash" name="paymentMethod" value="Cash" type="radio" class="custom-control-input" required onclick="chkCash()">
                                    <label class="custom-control-label" for="cash">Cash</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="bank" name="paymentMethod" value="Bank" onclick="chkBank()" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="bank">Bank Transfer</label>
                                </div>
                            </div>
                            <!--Payment account feild-->
                            <div class="col-md-6 mb-3" id='paytm_pay' style="display:none;">
                                <label for="paytm_f">Paytm Account Number</label>
                                <input type="text" class="form-control" name="paytm" id="paytm_f" placeholder="" required>
                            </div>
                            <div class="col-md-6 mb-3" id='upi_pay' style="display:none;">
                                <label for="upi">UPI account number</label>
                                <input type="text" class="form-control" name="upi" id="upi" placeholder="" required>
                            </div>
                            <div class="col-md-6 mb-3" id='gpay_pay' style="display:none;">
                                <label for="gpay_f">GPay account number</label>
                                <input type="text" class="form-control" name="gpay" id="gpay_f" placeholder="" required>
                            </div>
                            <!--<div class="col-md-6 mb-3" id='upi_pay' style="display:none;">-->
                            <!--  <label for="cc-name"></label>-->
                            <!--  <input type="text" class="form-control" name="payWay" id="cc-name" placeholder="" required>-->
                            <!--  <div class="invalid-feedback">-->
                            <!--    Account ID required-->
                            <!--  </div>-->
                            <!--</div>-->
                            <div class="col-md-12 mb-3" id='bank_pay' style="display:none;">
                                <div class="row">
                                    <div class="col-md-4 mb-3 form-group">
                                        <label for="acc-name">Bank Name</label>
                                        <input type="text" name="bankName" class="form-control" id="cc-name" placeholder="" required>
                                        <!--<small class="text-muted">Full name as displayed on card</small>-->
                                    </div>
                                    <div class="col-md-4 mb-3 form-group">
                                        <label for="acc-name">Account Holder Name</label>
                                        <input type="text" name="acc-name" class="form-control" id="cc-name" placeholder="" required>
                                        <!--<small class="text-muted">Full name as displayed on card</small>-->
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="-number">Account Number</label>
                                        <input type="text" class="form-control" name="acc-number" id="cc-number" placeholder="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="code">Swift Code</label>
                                        <input type="text" name="swift" class="form-control" id="code" placeholder="Swift code of your bank" required>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <input type="submit" class="btn btn-primary btn-lg btn-block " name="checkOut" value="Continue to checkout">
                        </form>
                        <?php
                        ?>
                    </div>
                </div>
                <!--pricing section-->
                <div class="col-md-3 col-12 mb-3 px-4 py-4 bg-light shadow ml-auto d-block">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Price Summary</span>
                        <?php $code_err; ?>
                        <!--<span class="badge badge-secondary badge-pill">3</span>-->
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed p-2">
                            <div>
                                <h6 class="my-0" style="margin-right:-14px!important; font-size:14px!important;">
                                    <?php echo $modelName; ?>
                                </h6>
                                <small class="text-muted">Phone Value</small>
                            </div>
                            <span class="text-muted" style="font-size:15px!important;"><i class="fa fa-inr"></i><?php echo $final_amt; ?> </span>
                        </li>
                        <!--<li class="list-group-item d-flex justify-content-between lh-condensed">-->
                        <!--  <div>-->
                        <!--    <h6 class="my-0" style="margin-right:-14px!important; font-size:13px!important;">Deducted Amount</h6>-->
                        <!--    <small class="text-muted">Deduction Made</small>-->
                        <!--  </div>-->
                        <!--  <span class="text-muted"><i class="fa fa-inr"></i><?php //echo $_SESSION['DEDUCTED_AMT'];
                                                                                ?> </span>-->
                        <!--</li>-->
                        <li class="list-group-item d-flex justify-content-between lh-condensed p-2">
                            <div>
                                <h6 class="my-0" style="margin-right:-14px!important; font-size:15px!important;">Extra Charge</h6>
                                <small class="text-muted">PickUp charge</small>
                            </div>
                            <span class="text-success">Free</span>
                        </li>
                        <!--Promo code starts-->
                        <?php
                        if (isset($_POST['addPromo'])) {
                            $code = $_POST['code'];

                            $sqlPromo = "SELECT * FROM couponCode where code = '$code'";
                            $queryPromo = mysqli_query($connect, $sqlPromo);
                            if (mysqli_num_rows($queryPromo) > 0) {
                                $getVal = mysqli_fetch_array($queryPromo);
                                $value = $getVal['value'];
                                if (!(isset($_SESSION['appliedState'])) and ($_SESSION['appliedState']) == 0) {
                                    $finalAmT = $_SESSION['FINAL_AMT'] + $value;
                                } else {
                                    $finalAmT = $_SESSION['FINAL_AMT'];
                                }
                                $validTill = date_create($getVal['expiresOn']);
                                $createdOn = date_create($getVal['createdOn']);
                                $isActive = date_diff($createdOn, $validTill);
                                $isExpired = $isActive->format("%R%a");
                                if ($isExpired > 0) {
                                    $applied = $code;
                                    $color = "success";
                                } else {
                                    $applied = "Expired";
                                    $color = "danger";
                                }
                        ?>
                                <li class="list-group-item d-flex justify-content-between bg-light p-2">
                                    <div class="text-<?php echo $color; ?>">
                                        <h6 class="my-0" style="margin-right:-14px!important; font-size:13px!important;">Promo code</h6>
                                        <small><?php echo $applied; ?></small>
                                    </div>
                                    <span class="text-<?php echo $color; ?>">+<i class="fa fa-inr"></i><?php echo $value; ?></span>
                                </li>
                            <?php
                            } else {
                                $finalAmT = $_SESSION['FINAL_AMT'];
                            ?>
                                <li class="list-group-item d-flex justify-content-between bg-light p-2">
                                    <div class="text-danger">
                                        <h6 class="my-0" style="margin-right:-14px!important; font-size:13px!important;">Promo code</h6>
                                        <small class="text-danger">Invalid Code</small>
                                    </div>
                                    <span class="text-danger">+<i class="fa fa-inr"></i>0</span>
                                </li>
                        <?php
                            }
                        } else {
                            $finalAmT = $_SESSION['FINAL_AMT'];
                        }
                        ?>
                        <!--Promo code ends-->
                        <li class="list-group-item d-flex justify-content-between p-2">
                            <span style="fony-size:1vw;">Total (INR)</span>
                            <strong><i class="fa fa-inr"></i><?php echo $finalAmT; ?></strong>
                        </li>
                    </ul>
                    <form class="card p-2" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code" name="code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary" name="addPromo">Redeem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Bootstrap core JavaScript
         ================================================== -->
    <script>
        function chkPaytm() {
            document.getElementById('paytm_pay').style.display = 'block';
            document.getElementById('gpay_pay').style.display = 'none';
            document.getElementById('upi_pay').style.display = 'none';
            document.getElementById('bank_pay').style.display = 'none';
        };

        function chkUpi() {
            document.getElementById('paytm_pay').style.display = 'none';
            document.getElementById('gpay_pay').style.display = 'none';
            document.getElementById('upi_pay').style.display = 'block';
            document.getElementById('bank_pay').style.display = 'none';
        }

        function chkGpay() {
            document.getElementById('paytm_pay').style.display = 'none';
            document.getElementById('gpay_pay').style.display = 'block';
            document.getElementById('upi_pay').style.display = 'none';
            document.getElementById('bank_pay').style.display = 'none';
        }

        function chkBank() {
            document.getElementById('paytm_pay').style.display = 'none';
            document.getElementById('gpay_pay').style.display = 'none';
            document.getElementById('upi_pay').style.display = 'none';
            document.getElementById('bank_pay').style.display = 'block';
        }

        function chkCash() {
            document.getElementById('paytm_pay').style.display = 'none';
            document.getElementById('gpay_pay').style.display = 'none';
            document.getElementById('upi_pay').style.display = 'none';
            document.getElementById('bank_pay').style.display = 'none';
        }
        // for showing or hiding address section
        function radio_check() {
            document.getElementById('acc-addr').checked = true;
            document.getElementById('billing_section').style.display = 'none';
            document.getElementById('att-addr').checked = false;
            //console.log('checking');
        }

        function radio_check1() {
            document.getElementById('att-addr').checked = true;
            document.getElementById('acc-addr').checked = false;
            document.getElementById('billing_section').style.display = 'block';
            //console.log('not checking');
        }
    </script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <!--footer-->
    <?php include "../footer.php"; ?>
</body>

</html>