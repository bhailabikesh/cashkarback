<?php include "top.inc.php";?>
<div class="container">
    <div class="col-lg-8 col-sm-12 col-12">
        <table class="table table-striped">
    <thead>
      <tr>
          <th>Date</th>
        <th>Phone</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Initial Price</th>
        <th>Final Price</th>
        <th>Code</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php 
error_reporting(0);
$sql = "select * from lead ORDER BY `id` DESC";
$querySql = mysqli_query($connect,$sql);
while($orderRes = mysqli_fetch_array($querySql)){
    $iniPrice = $orderRes['original_price'];
    $finalPrice = $orderRes['finalPrice'];
    $id = $orderRes['id'];
    $brand = $orderRes['brand'];
    $tokenKey = $orderRes['tokenKey'];
    $date = $orderRes['DateTime'];
    $phone = $orderRes['phoneNumber'];
    $modelId = $orderRes['model_id'];
    $sqlOrderS = "SELECT * FROM orderlist where tokenKey = '$tokenKey'";
    $queryOrderS = mysqli_query($connect,$sqlOrderS);
    $resOrder = mysqli_fetch_array($queryOrderS);
    $status = $resOrder['char_data'];
    $sqlModel = "SELECT * FROM model where id = '$modelId'";
    $queryModel = mysqli_query($connect,$sqlModel);
    $resModel = mysqli_fetch_array($queryModel);
    $modelName = $resModel['model_name'];
    ?>
     <tr>
         <td><?php echo $date;?></td>
        <td><?php echo $phone;?></td>
        <td><?php echo $brand;?></td>
        <td><?php echo $modelName;?></td>
        <td><?php echo $iniPrice;?></td>
        <td><?php echo $finalPrice;?></td>
        <td><?php echo $tokenKey;?></td>
        <td><?php echo $status;?></td>
        <td>
            <a href="uncomplete-delete.php?id=<?php echo $id; ?>">Delete</a>
        </td>
     </tr>
    <?php
}
?>

    </tbody>
  </table>
    </div>
</div>
<?php include "buttom.inc.php";?>