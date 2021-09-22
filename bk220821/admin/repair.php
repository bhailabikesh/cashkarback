<?php include "top.inc.php"; ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Repair Table</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Defect</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <!--<th scope="col">Assign</th>-->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $getData = "SELECT * FROM `repair` ORDER BY `id` DESC";
                    $queryData = mysqli_query($connect, $getData);
                    $a = 0;
                    $rows = mysqli_num_rows($queryData);
                    if ($rows > 0) {
                       
                    while ($resultData = mysqli_fetch_array($queryData)) {
                        $a++;
                        $repairId = $resultData['id'];
                        $defect = $resultData['problem'];
                        $brand = $resultData['brand'];
                        $modelId = $resultData['model'];
                        $userId = $resultData['byUser'];
                        $sqlUser = "SELECT * FROM users where id ='$userId'";
                        $queryUser = mysqli_query($connect,$sqlUser);
                        $resUser = mysqli_fetch_array($queryUser);
                        $userName = $resUser['fullName'];
                        $address = $resUser['address'];
                        $phone = $resUser['phone'];
                        $email = $resUser['email'];
                        //  $getModelName = "SELECT model_name from model where id = '$modelId'";
                        //  $queryModel = mysqli_query($connect,$getModelName);
                        //  $resModel = mysqli_fetch_array($queryModel);
                         //$modelname = $resModel['model_name'];

                    ?>
                        <tr>
                            <th scope="row"><?php echo $a; ?></th>
                            <td><?php echo $userName; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $phone; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $defect; ?></td>
                            <td><?php echo $brand; ?></td>
                            <td><?php echo $modelId; ?></td>
                            
                            <td>
                                <a href="repair-detail.php?id=<?php echo $repairId; ?>&action=assign">Assign</a> /
                                <a href="approve-repair.php?id=<?php echo $repairId; ?>&action=delete">Delete</a>
                        </td>
                        </tr><?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php include "buttom.inc.php"; ?>
