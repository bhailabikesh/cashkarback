<?php include "top.inc.php";?>
<?php 
$getRateId = $_GET['id'];
if (isset($_REQUEST['Submit'])) {
    $rate = $_REQUEST['rate'];
    $sql = "UPDATE `deductionrate` SET `percentages`='$rate' WHERE id = '$getRateId'";
    $querySql = mysqli_query($connect,$sql);
    if ($querySql) {
        echo "<h3>Rate changed successed.</h3> click <a href = 'deduction-edit.php'>here</a> to go in main page";
    }
}
?>
<div class="card-body card-block">
        <form action="" method="post">
        <div class="form-group"><label for="rate" class=" form-control-label">Rate</label><input type="text" id="rate" placeholder="Enter Rate to Change" name="rate" class="form-control">
    <p>Dont enter % or RS in the edit box and dont submit it blank. if you want to cancel it then go back.</p>
    </div>
        <div class="form-group">
            <input type="submit" name="Submit" id="submit" value="submit" class="form-control btn btn-primary">
        </div>
        </form>
    </div>
<?php include "buttom.inc.php";?>
