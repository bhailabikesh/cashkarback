<!-- Header start -->
<?php include "./partials/header.php" ?>
<!-- Header end -->

<!-- ======================== Main Content ========================  -->
<!-- Main content -->
<div class="gadget-detail">
    <div class="container">
        <div class="gadget-detail__wrapper">
            <div class="row">
                <div class="text-center col-xs-12 col-sm-4">
                <h1 class="device-name">Sell Apple iPhone XS Max</h1>
                    <img class="device-image img-fluid w-75" src="img/device1.png" alt="Apple iPhone XS Max">
                </div>

                <div class="col-xs-12 col-sm-8">
                    <div class="row">
                    <div class="p-3 checkout__card w-100">
                    <div class="p-5 card-body">
                    <div class="checkout__heading">
                        <h1 class="checkout__heading--title">Enter Pickup Address</h1>
                        <p class="checkout__heading--description">Note: Accurate Address Saves Time</p>
                    </div>
                        <form action="" class="checkout__form">
                            <!-- <h3 class="card-title">Order Form</h3> -->
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="mx-auto col-lg-6">
                                        <label for="address1">Address Line 1<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" placeholder="Room, Building and Street" class="form-control">
                                    </div>
                                    <div class="mx-auto col-lg-6">
                                    <label for="landmark">Landmark<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" placeholder="Popular place nearby" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="mx-auto col-lg-6">
                                        <label for="address2">Address Line 2<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" placeholder="Area" class="form-control">
                                    </div>
                                    <div class="mx-auto col-lg-6">
                                        <label for="city">City<sup><span class="text-danger">*</span></sup></label>
                                        <select name="" id="" class="form-control">
                                            <option value="" selected>Select Your City</option>
                                            <option value="mumbai">Mumbai</option>
                                            <option value="notlisted">Not Listed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="mx-auto col-lg-6">
                                        <label for="pincode">Pin Code<sup><span class="text-danger">*</span></sup></label>
                                        <input type="number" placeholder="Area Pin Code" class="form-control">
                                    </div>
                                    <div class="mx-auto col-lg-6">
                                        <label for="pickupDate">Schedule Pickup<sup><span class="text-danger">*</span></sup></label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="row">
                                    <div class="mx-auto col-lg-12">
                                        <a href="thank.php" class="btn btn-continue">Continue</a>
                                    </div>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<!-- End of Main content -->

<!-- Payment method -->
<div class="checkout">
    <div class="container">
        <div class="row">
            <div class="mx-auto mb-4 col-lg-8 col-sm-10">
                <div class="p-2 text-center border-0 card checkout__card">
                <h1 class="checkout__card--title">Select Payment method</h1>
                    <div class="card-header">
                        <div class="pt-4 pb-2 pl-2 pr-2 bg-white shadow-sm">
                            <!-- Credit card from tabs -->
                            <ul role="tablist" class="mb-3 rounded nav bg-light nav-pills nav-fill">
                                <li class="nav-item">
                                    <a href="#paytm" data-toggle="pill" class="nav-link active">
                                        <i class="mr-2 fas fa-credit-card"></i>
                                        Paytm
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#googlePay" data-toggle="pill" class="nav-link">
                                        <i class="mr-2 fab fa-google"></i>
                                        Google Pay
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#upi" data-toggle="pill" class="nav-link">
                                        <i class="mr-2 fas fa-mobile"></i>
                                        UPI
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#bank" data-toggle="pill" class="nav-link">
                                        <i class="mr-2 fas fa-university"></i>
                                        Bank
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#cash" data-toggle="pill" class="nav-link">
                                        <i class="mr-2 far fa-money-bill-alt"></i>
                                        Cash
                                    </a>
                                </li>
                            </ul>
                            <!-- Credit card from tabs -->
                        </div>
                    </div>
                    
                    <!-- Credit card form content -->
                    <div class="text-left tab-content">
                        <!-- Paytm info -->
                        <div id="paytm" class="pt-3 tab-pane fade show active">
                            <form action="#" role="form" onsubmit="event.preventDefault()">
                                <div class="form-group">
                                    <label for="paytm">
                                        <h6>Paytm Acc Number</h6>
                                    </label>
                                    
                                    <input type="number" class="form-control" name="paytm" placeholder="Valid paytm number" required>
                                </div>
                            </form>
                        </div>
                        <!-- End of Paytm info -->
                            
                        <!-- Google Pay -->
                        <div id="googlePay"  class="pt-3 tab-pane fade">
                            <form action="#" role="form" onsubmit="event.preventDefault()">
                                <div class="form-group">
                                    <label for="googlePay">
                                        <h6>Google Pay A/C No</h6>
                                    </label>
                                    <input type="number" class="form-control" name="googlePay" placeholder="Valid Google Pay A/C number" required>
                                </div>
                            </form>
                        </div>
                        <!-- End of Google Pay -->

                         <!-- UPI Pay -->
                         <div id="upi"  class="pt-3 tab-pane fade">
                            <form action="#" role="form" onsubmit="event.preventDefault()">
                                <div class="form-group">
                                    <label for="upi">
                                        <h6>UPI A/C No</h6>
                                    </label>
                                    <input type="number" class="form-control" name="upi" placeholder="Valid UPI A/C number" required>
                                </div>
                            </form>
                        </div>
                        <!-- End of UPI Pay-->

                        <!-- Bank -->
                        <div id="bank" class="pt-3 tab-pane fade">
                            <form action="#" role="form" onsubmit="event.preventDefault()">
                                <div class="form-group">
                                    <label for="bank">
                                        <h6>Enter Bank Name</h6>
                                    </label>
                                    <input type="text" class="form-control" name="bank" placeholder="Bank Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="accountName">
                                        <h6>Enter Account Holder Name</h6>
                                    </label>
                                    <input type="text" class="form-control" name="accountName" placeholder="Account Holder Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="bank">
                                        <h6>Enter Bank Account No</h6>
                                    </label>
                                    <input type="number" class="form-control" name="bank" placeholder="Bank Account No" required>
                                </div>
                                <div class="form-group">
                                    <label for="bank">
                                        <h6>Enter ISFC Code</h6>
                                    </label>
                                    <input type="number" class="form-control" name="bank" placeholder="ISFC Code" required>
                                </div>
                            </form>
                        </div>
                        <!-- End of Bank -->

                        <!-- cash Pay -->
                        <div id="cash"  class="pt-3 tab-pane fade">
                            <h2 class="p-3 text-success">Our agent will give you cash when phone is collected.</h2>
                        </div>
                        <!-- End of cash Pay-->
                        
                    </div>
                    <!-- End of Credit card form content -->
                    
                    <!-- Card footer -->
                    <div class="card-footer">
                        <a class="btn btn-continue d-block w-100" type="submit" href="thank.php">Continue To Checkout</a>
                    </div>
                </div>
            </div>
            <div class="mx-auto mb-4 col-lg-4 col-sm-10">
                <div class="border-0 card summary__card">
                    <h2>Summary</h2>

                    <div class="card-body">
                        <div class="summary__price">
                            <h5 class="summary__price--title">iPhone 12 Pro Max</h5>
                            <span class="summary__price--amount">Rs. 99999</span>
                        </div>
                        <div class="summary__price">
                            <h5 class="summary__price--title">Extra Charge</h5>
                            <span class="summary__price--amount">Rs. 99</span>
                        </div>
                        <div class="summary__price">
                            <h5 class="summary__price--title text-success">Promo Code</h5>
                            <span class="summary__price--amount text-success">Rs. 999</span>
                        </div>
                        <div class="summary__price">
                            <h5 class="summary__price--title font-weight-bold">Total</h5>
                            <span class="summary__price--amount font-weight-bold">Rs. 99999</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Payment method -->

<!-- ======================== End of Main Content ========================  -->


<!-- Header start -->
<?php include "./partials/footer.php" ?>
<!-- Header end -->