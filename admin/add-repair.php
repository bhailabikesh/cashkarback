<?php include "top.inc.php"; ?>
<?php 
if(isset($_POST['done'])){
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($model)));
    $modelCode = $_POST['modelCode'];
    $charging = $_POST['charging'];
    $battery = $_POST['battery'];
    $speakerMic = $_POST['speakerMic'];
    $camera = $_POST['camera'];
    $other = $_POST['other'];
    $brokenScreen = $_POST['brokenScreen'];
    $sqlIns = "INSERT INTO `repairRates`(`brand`, `model`,`slug`,`modelCode`, `brokenScreen`, `chargingProblem`, `speakerMic`, `battery`, `camera`, `other`) 
            VALUES ('$brand','$model','$slug','$modelCode','$brokenScreen','$charging','$speakerMic','$battery','$camera','$other')";
    $queryIns = mysqli_query($connect,$sqlIns);
    if($queryIns){
        echo "
        <div class='alert alert-success'>
        Added success.
        </div>
        ";
    }else{
        echo "
        <div class='alert alert-success'>
        Failed to add.
        </div>
        ";
    }
}
?>
<div class="container m-auto">
    <div class="col-lg-6 col-12">
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="brand">
                Brand Name
            </label>
            <input type="text" class="form-control" placeholder="Brand Name" name="brand"/>
        </div>
        <div class="form-group">
            <label for="brand">
                Model Name
            </label>
            <input type="text" class="form-control" placeholder="Model Name" name="model" />
        </div>
        <div class="form-group">
            <label for="brand">
                Model Code
            </label>
            <input type="text" class="form-control" placeholder="Model code" name="modelCode" />
        </div>
        <div class="form-group">
            <label for="brand">
                For charging problem
            </label>
            <input type="text" class="form-control" placeholder="Rate for charging problem" name="charging" />
        </div>
        <div class="form-group">
            <label for="brand">
                For battery replacement
            </label>
            <input type="text" class="form-control" placeholder="Rate for battery replacement" name="battery" />
        </div>
        <div class="form-group">
            <label for="brand">
                For Speaker/MIC
            </label>
            <input type="text" class="form-control" placeholder="Rate for speaker and mic" name="speakerMic" />
        </div>
        <div class="form-group">
            <label for="brand">
                For Camera defect
            </label>
            <input type="text" class="form-control" placeholder="Rate Camera defect" name="camera" />
        </div>
        <div class="form-group">
            <label for="brand">
                Back Panel
            </label>
            <input type="text" class="form-control" placeholder="Other problem's rate" name="other"/>
        </div>
        <div class="form-group">
            <label for="brand">
                Broken Screen
            </label>
            <input type="text" class="form-control" placeholder="Rate for Broken Screen" name="brokenScreen" />
        </div>
        <input type="submit" class="form-control btn btn-success" value="Update" name="done"/>
    </form>
</div>
</div>
<?php include "buttom.inc.php"; ?>