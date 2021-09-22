<?php include "top.inc.php"; ?>
<div class="orders">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Orders </h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>SP</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Date & Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $sqlForOrder = "select * from orderlist where byUser > 0 ORDER BY `id` DESC";
                                // states 0 means admin hasnt approve that sell request.
                                
                                $getQuery = mysqli_query($connect, $sqlForOrder);
                                $getRows = mysqli_num_rows($getQuery);
                                
                                // echo $getRows;
                                if ($getRows > 0) {
                                    $x = 0;
                                    while ($resultData = mysqli_fetch_array($getQuery)) {
                                        $orderId = $resultData['id'];
                                        $brand = $resultData['brand'];
                                        $date = $resultData['submitDate'];
                                        $modelId = $resultData['model_id'];
                                        //geting model detail by using model id
                                        $sqlModel = "select * from model where id = '$modelId'";
                                        $queryModel = mysqli_query($connect,$sqlModel);
                                        $modelData = mysqli_fetch_array($queryModel);
                                        $modelName = $modelData['model_name'];
                                        //ends model parts
                                        //continue getting order details
                                        $storage = $resultData['storage'];
                                        
                                        $originalPrice = $resultData['original_price'];
                                        $warrantyStatus = $resultData['warrantyStatus'];
                                        $bodyCondition = $resultData['bodyCondition'];
                                        $screenCondition = $resultData['screenCondition'];
                                        $accessories = $resultData['Accessories'];
                                        $deducatedAmount = $resultData['deductedAmount'];
                                        $finalPrice = $resultData['finalPrice'];
                                        $byUser = $resultData['byUser'];
                                        $status = $resultData['status'];
                                        $address = $resultData['address'].' '.$resultData['opt_address'].' , '.$resultData['city'].' '.$resultData['zip'];
                                        if($status == 'pending'){
                                            $statusS = '<td class="text-warning">Pending</td>';
                                        }else if($status == 'success'){
                                            $statusS = '<td class="text-success">Completed</td>';
                                        }else{
                                            $statusS = '<td class="text-danger">Failed</td>';   
                                        }
                                        $x++;
                                        

                                        if ($byUser > 0) {
                                            
                                        
                                        $sqlForUser = "SELECT * from users where id = $byUser";
                                        $queryUser = mysqli_query($connect, $sqlForUser);
                                        $res = mysqli_fetch_array($queryUser);
                                        $user = $res['fullName'];
                                        // $address = $res['address'];
                                        $number = $res['phone'];
                                        $email = $res['email'];
                                ?>
                                        <tr>
                                            <td class="serial"><?php echo $x; ?></td>
                                            
                                            <td> <span class="name"> <?php echo $user; ?> </span> </td>
                                            <td> <span class="name"><?php echo $address; ?></span> </td>
                                        
                                            <td> <span class="product"><?php echo $brand; ?></span> </td>
                                            <td><?php echo $modelName.' / '.$storage;?></td>
                                            <td><?php echo $finalPrice;?></td>
                                            <?php echo $statusS;?>
                                            <td>
                                                <a href="order-action.php?action=view&oid=<?php echo $orderId;?>">View</a> /
                                                <a href="delete.php?action=remove&oid=<?php echo $orderId;?>">Delete</a>
                                            </td>
                                            <td><?php echo $date;?></td>
                                        </tr>
                                        <?php }else{
                                            // echo "no data found";
                                            }?>
                                <?php

                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-stats -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- models -->
        
      
        <!-- /.col-lg-8 -->
      <?php include "buttom.inc.php";?>