<?php include "top.inc.php"; ?>

<div class="ui-typography">
    <div class="row">
        <div class="col-md-12">
        <style>
            .conent-body{
                width: 100%;
                display: flex;
            }
            .oder-summary{
                width: 50%;
                float: left;
            }
            .user-details{
                width: 50%;
                float: right;
            }
        </style>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title" v-if="headerText">Your order Details </strong>
                    <button class="btn btn-primary"> Invoices</button>
                </div>
                
                <div class="card-body">
                    <div class="content-body">
                    <?php 
                    $getPid = $_GET['oid'];
                    $sql = "SELECT * FROM orderlist where id = '$getPid'";
                    $querySql = mysqli_query($connect, $sql);
                    $storeOrderData = mysqli_fetch_array($querySql);
                    $brand = $storeOrderData['brand'];
                    $modelId = $storeOrderData['model_id'];
                    $storage = $storeOrderData['storage'];
                    $ram = $storeOrderData['ram'];
                    if($ram != ''){
                        $storage = $ram.'GB/'.$variation.'GB';
                    }
                    $originalPrice = $storeOrderData['finalPrice'];
                    $bodyCondition = $storeOrderData['bodyCondition'];
                    $screenCondition = $storeOrderData['screenCondition'];
                    $warrantyCondition = $storeOrderData['warrantyStatus'];
                    $accessoires = $storeOrderData['Accessories'];
                    $userId = $storeOrderData['byUser'];
                    $number = $storeOrderData['phoneNumber'];
                    $address = $storeOrderData['address'].' , '.$storeOrderData['opt_address'].' , '.$storeOrderData['city'].' '.$storeOrderData['zip'];
                    $status = $storeOrderData['status'];
                    $reason = $storeOrderData['reason'];
                    if($status == 'pending'){
                                            $statusS = '<span class="text-warning">Pending</span>';
                                        }else if($status == 'success'){
                                            $statusS = '<span class="text-success">Completed</span>';
                                        }else{
                                            $statusS = '<span class="text-danger">Failed</span>';   
                                        }
                    $getmodelInfo = "SELECT * FROM model where id = '$modelId'";
                    $queryModel = mysqli_query($connect,$getmodelInfo);
                    $storeModelData = mysqli_fetch_array($queryModel);
                    $modelName = $storeModelData['model_name'];
                    
                    ?>
                        <div class="oder-summary">
                            <h2 class="p-0">Order summary</h2>
                            <p class="p-0">Brand Name:  <strong><?php echo $brand;?></strong></p>
                            <p>Model Name:  <strong><?php echo $modelName;?></strong></p>
                            <p>Variation: <strong><?php echo $storage;?></strong></p>
                            <h3>Final Price: <strong><?php echo $originalPrice.'/-';?></strong></h3><br>
                            
                            <!--Assigning vendor and giving success msg-->
                            <?php 
                            if(isset($_POST['assing'])){
                                if(isset($_POST['vendor'])){
                                    $vendor = $_POST['vendor'];
                                    $assignSql = "UPDATE `orderlist` SET `assignTo`= '$vendor', isConfirmed = '0', pickedUpBy = '0', status = 'pending' WHERE id ='$getPid'";
                                    $queryAssign = mysqli_query($connect,$assignSql);
                                    if($queryAssign){
                                        $sqlVendor_ = "SELECT * FROM vendor where id = '$vendor'";
                                          $queryVendor_ = mysqli_query($connect,$sqlVendor_);
                                          $resVendor_ = mysqli_fetch_array($queryVendor_);
                                          $reasonTxt = "Assigned to ".$resVendor_['email'];
                                          $sqlUpdate_ = "UPDATE orderlist SET reason = '$reasonTxt' where id = '$getPid'";
                                          $queryUpdate_ = mysqli_query($connect,$sqlUpdate_);
                                        echo "<script>alert('Vendor assign successfully');</script>";
                                    }else{
                                         echo "<script>alert('Something went wrong while assigning Vendor');</script>";
                                    }
                                }
                            }
                            ?>
                            <form method="POST">
                                <div class="form-group">
                                      <label for="sel1">Assing to Vendor:</label>
                                      <select class="form-control" id="sel1" name="vendor">
                                          <option selected disabled>Select vendor username</option>
                                          <?php 
                                          //getting Vendor list
                                          $sqlVendor = "SELECT * FROM vendor";
                                          $queryVendor = mysqli_query($connect,$sqlVendor);
                                          if(mysqli_num_rows($queryVendor) > 0){
                                              while($resVendor = mysqli_fetch_array($queryVendor)){
                                                  $username = $resVendor['email'];
                                                  $vendorID =$resVendor['id'];
                                                  ?>
                                                      <option value ="<?php echo $vendorID;?>"><?php echo $username;?></option>
                                                  <?php
                                              }
                                          }
                                          ?>
                                      
                                      </select>
                                </div>
                                <button class="btn btn btn-success" name="assing">Assing</button>
                            </form>
                        </div>
                        <div class="user-details">
                            <h2>User details</h2><br>
                            <?php 
                            $getUserDetails = "SELECT * FROM users where id = $userId";
                            $queryUser = mysqli_query($connect,$getUserDetails);
                            $storeUserData = mysqli_fetch_array($queryUser);
                            $userName = $storeUserData['fullName'];
                            $email = $storeUserData['email'];
                            // $number = $storeUserData['phone'];
                            // $address = $storeUserData['address'];
                            ?>
                            <p>Name: <?php echo $userName;?></p>
                            <p>Email: <?php echo $email;?></p>
                            <p>Phone Number: <?php echo $number;?></p>
                            <p>Address: <?php echo $address;?></p>
                            <p>Status: <?php echo $statusS;?></p>
                            <p>Reasons : <?php echo $reason;?></p>
                        </div>
                    </div>
                    
                </div>
                <div class="button-area ml-5">
                    <button class="btn btn btn-danger"><a href="order-list.php"class="no-link">Cancel</a> </button> 
                    <button class="btn btn btn-success"><a href="confirm-order.php?oid=<?php echo $getPid;?>&action=confirm" class="no-link">Confirm</a> </button>
                    </div>
            </div>
            
        </div>
        
    </div>
</div>
<?php include "buttom.inc.php"; ?>