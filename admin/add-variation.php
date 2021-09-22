<?php
include "connection.inc.php";
include "top.inc.php";
?>
<div>
    <h2>Update Model Data</h2>
</div>
<?php 
if(isset($_GET['mcode'])){
    $modelID = $_GET['mcode'];
    $getModelInfo = "SELECT * FROM model where modelCode = '$modelID'";
    // echo $modelID;
    $querySql = mysqli_query($connect,$getModelInfo);
    $result = mysqli_fetch_array($querySql);
    $category = $result['category'];
    if($category == 'mobile'){
        $selectmbl = 'selected';
    }else if($category == 'ipad/tablets'){
        $selectipad = 'selected';
    }else if($category == 'accessories'){
        $selectaccessories = 'selected';
    }else{
        $selectmbl = 'selected';
    }
    $alt = $result['alt'];
    $brandName = $result['brand'];
    $modelName = $result['model_name'];
    $price = $result['price'];
    $storage = $result['storage'];
   
    $img = $result['img'];
    $warrantyBox1 = $result['0To3Warranty'];
    $warrantyBox2 = $result['3To6Warranty'];
    $warrantyBox4 = $result['6To11Warranty'];
    $warrantyBox3 = $result['noWarranty'];
    $scratchBody = $result['scratchlessBody'];
    $goodBody = $result['good'];
    $average = $result['average'];
    $bellowAverage = $result['bellowAverage'];
    $scratchless = $result['screenScratchless'];
    $cracked = $result['crackedScreen'];
    $blank = $result['blank/notWorking'];
    $linesAndSpot = $result['lines/spots/dc'];
    $scratchOnScreen = $result['scratchesOnScreen'];
    $fCam = $result['frontCamera'];
    $bCam = $result['backCamera'];
    $battery = $result['battery'];
    $sensor = $result['fingerSensor'];
    $faceId = $result['faceId'];
    $bluetooth = $result['bluetooth/wifi'];
    $bentPhone = $result['bentPhone'];
    $changedDisplay = $result['displayChanged'];
    $speaker = $result['speakerProblem'];
    $network = $result['networkProblem'];
    $mic = $result['MIC problem'];
    $chargingProblem = $result['chargingProblem'];
    $backGlassBroken = $result['backGlassBroken'];
    $charger = $result['notHavingCharger'];
    $earphones = $result['notHavingEarphones'];
    $box = $result['notHavingBox'];
    $bill = $result['notHavingBill'];
    $ram = $result['ram'];
    
}

?>
<?php

if (isset($_REQUEST['Submit'])) {
    $mCode = $_GET['mcode'];
      if(isset($_POST['category'])){
        $category = $_POST['category'];
       
    }else{
        $category = 'mobile';
    }
    $brandName = $_REQUEST['brand'];
    $modelName = $_REQUEST['model'];
    $price = $_REQUEST['price'];
    $storage = $_REQUEST['storage'];
    $ram = $_REQUEST['ram'];
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_REQUEST["model"])));
    
     if(isset($_FILES['files'])){
        //  echo "img is setting";
    $imageName = $_FILES['files']['name'];
    $tmp_image = $_FILES['files']['tmp_name'];
    }else{
        $imageName = $img;
    }
    
    //setting image folder for different category of model
        if($category == 'mobile'){
            $folder = "../images/model/mobile/".$imageName;
        }else if($category == 'ipad/tablets'){
            $folder = "../images/model/ipad-tablets/".$imageName;
        }else if($category == 'accessories'){
            $folder = "../images/model/accessories/".$imageName;
        }else{
            $folder = "../images/model/mobile/".$imageName;
        }
    $alt = $_POST['alt'];
    $warranty0To3 = $_POST['0To3Warranty'];
    $warranty3To6 = $_POST['3To6Warranty'];
    $warranty6To11 = $_POST['6To11Warranty'];
    $noWarranty = $_POST['noWarranty'];
    $scratchLessBody = $_POST['scratchlessBody'];
    $goodBody = $_POST['goodBody'];
    $averageBody = $_POST['averageBody'];
    $bellowAverage = $_POST['bellowAverageBody'];
    $scratchLessScreen = $_POST['scratchlessScreen'];
    $crackedScreen = $_POST['crackedScreen'];
    $blankScreen = $_POST['blankScreen'];
    $linesOnScreen = $_POST['lines_spotScreen'];
    $scratches = $_POST['scratchScreen'];
    $frontCamera = $_POST['fCamera'];
    $backCamera = $_POST['bCamera'];
    $battery = $_POST['battery'];
    $fingerSensor = $_POST['fingerSensor'];
    $faceID = $_POST['faceID'];
    // var_dump($warrantyMoreThanSix);
    $blutootn = $_POST['bluetooth'];
    $bentPhone = $_POST['bentPhone'];
    $displayChanged = $_POST['displayChanged'];
    $speaker = $_POST['speakerProblem'];
    $mic = $_POST['mic'];
    $network = $_POST['network'];
    $charging = $_POST['charging'];
    $brokenBackGlass = $_POST['brokenBackGlass'];
    $notHavingCharger = $_POST['NanCharger'];
    $notHavingEarphone = $_POST['NanEarphones'];
    $notHavingBox = $_POST['NanBox'];
    $notHavingBill = $_POST['NanBill'];
    $getDBslug = "SELECT `slug` FROM `model`";
    $querySlug = mysqli_query($connect,$getDBslug);
    $rowSlug = mysqli_num_rows($querySlug);
    if($rowSlug > 0){
        $isParent = 0;
    }else{
       $isParent = 1;
    }
    
  $sqlModelUpdate = "INSERT INTO `model`(`brand`,`category`, `model_name`, `slug`, `modelCode`, `img`,`alt`, `price`, `isParent`, `storage`,`ram`, `0To3Warranty`, `3To6Warranty`,`6To11Warranty`, `noWarranty`, `scratchlessBody`, `good`, `average`, `bellowAverage`, `screenScratchless`, `crackedScreen`, `blank/notWorking`, `lines/spots/dc`, `scratchesOnScreen`, `frontCamera`, `backCamera`, `battery`, `fingerSensor`, `faceId`, `bluetooth/wifi`, `bentPhone`, `displayChanged`, `speakerProblem`, `MICproblem`, `networkProblem`, `chargingProblem`,`backGlassBroken`, `notHavingCharger`, `notHavingEarphones`, `notHavingBox`, `notHavingBill`) VALUES 
                                ('$brandName','$category','$modelName','$slug','$mCode','$imageName','$img_alt','$price','$isParent','$storage','$ram','$warranty0To3','$warranty3To6','$warranty6To11','$noWarranty','$scratchLessBody','$goodBody','$averageBody','$bellowAverage','$scratchLessscreen','$crackedScreen','$blankScreen','$linesOnScreen','$scratches','$frontCamera','$backCamera','$battery','$fingerSensor','$faceID','$bluetooth','$bentPhone','$displayChanged','$speaker','$mic','$network','$charging','$brokenBackGlass','$notHavingCharger','$notHavingEarphone','$notHavingBox','$notHavingBill')";
    $querySqlModel = mysqli_query($connect, $sqlModelUpdate);
    // print_r($sqlModelUpdate);
    if ($querySqlModel) {
        if(isset($_FILES['files'])){
            // echo "img is set";
           move_uploaded_file($tmp_image,$folder); 
        }else{
            // echo "img is not set";
        }

        header("location:models.php?action=edit&success=true");
    } else {
        header("location:models.php?action=edit&success=false");
    }
} ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong>Model</strong><small> Edit</small></div>
        <div class="card-body card-block">
            <form method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="row">
                    <!--left columns start from here-->
           <div class="col-lg-6 col-sm-12 col-12" style='border-right:1px solid black;'>
               <div class="form-group">
                        <label for="sel1">Model Category:</label>
                        <select class="form-control" id="sel1" name="category">
                           <option <?php echo $select;?> disabled>Select Model Category</option>
                           <option value ="mobile" <?php echo $select;?>>Mobile</option>
                           <option value ="ipad/tablets" <?php echo $selectipad;?>>Ipad / Tablets</option>
                           <option value ="accessories" <?php echo $selectaccessories;?>>Accessories</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="brand" class=" form-control-label">Brand</label>
                    <input type="text" id="brand" value="<?php echo $brandName; ?>" placeholder="Brand name" name="brand" class="form-control">
                </div>
                <div class="form-group">
                    <label for="modelName" class=" form-control-label">Model Name</label>
                    <input type="text" id="modelName" value="<?php echo $modelName; ?>" name="model" placeholder="Model name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price" class=" form-control-label">Price</label>
                    <input type="text" id="price" value="<?php echo $price; ?>" placeholder="Enter price" name="price" class="form-control">
                </div>
                <!--<div class="col-lg-12 col-md-12">-->
                <!--    <label class=" form-control-label">Does have Storage Variation</label></div>-->
                <!--    <input type='button' value='Yes' class="btn" name="yes" onclick=checked(); /><input type='button' value='No' class="btn" name="no" onclick=noChecked(); />                  -->
                <!--</div>-->
                <div class="form-group" id="storage">
                    <label for="storage" class=" form-control-label">Storage</label>
                    <input type="text" id="storage" value="<?php echo $storage; ?>" placeholder="Enter Storage Details" name="storage" class="form-control">
                    <p>Do not enter GB After storage size(enter 16 instead of 16GB)</p>
                </div>
                <div class="form-group" id="ram">
                    <label for="ram" class=" form-control-label">RAM</label>
                    <input type="text" id="ram" placeholder="Enter RAM Detail" value="<?php echo $ram;?>" name="ram" class="form-control">
                    <p>Do not enter GB After RAM size(enter 16 instead of 16GB)</p>
                </div>
                <div class="form-group">
                    <label for="file" class=" form-control-label">Cover Photo</label>
                    <input type="file" id="file" name="files" class="form-control" accept="image/*">
                </div>
                <div class="form-group" id="alt">
                    <label for="alt" class=" form-control-label">Image alt keyword:</label>
                    <input type="text" id="alt" placeholder="Enter alt keyword" name="alt" class="form-control" value="<?php echo $alt;?>">
                    <p>Enter alt keyword for image (10 words max)</p>
               </div>
                <!--<p>Image used as cover photo.</p>-->
                <!--<img src="https://gadgetzco.com/images/model/<?php echo $img;?>" width="100%" height="auto" />-->
            </div>
            
            <!--left column ends here -->
            
            
            <div class="col-lg-6 col-sm-12 col-12">
                <!--right column starts from here-->
                <!--<p>Don't Enter Percentages after Number.(only enter number like 20 instead of 20%)</p>-->
                <div class="form-group">
                    <label for="moreThanSix" class=" form-control-label">Warranty : 0 To 3 Months</label>
                    <input type="number" id="moreThanSix" value="<?php echo $warrantyBox1; ?>" placeholder="Enter deduction" name="0To3Warranty" class="form-control" max-lenght="2">
                </div>
                <div class="form-group">
                    <label for="lessThanSix" class=" form-control-label">Warranty : 3 To 6 Months</label>
                    <input type="number" id="lessThanSix" value="<?php echo $warrantyBox2; ?>" name="3To6Warranty" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lessThanSix" class=" form-control-label">Warranty : 6 To 11 Months</label>
                    <input type="number" id="lessThanSix" value="<?php echo $warrantyBox4; ?>" name="6To11Warranty" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="noWarranty" class=" form-control-label">Warranty: No Warranty</label>
                    <input type="number" id="noWarranty" value="<?php echo $warrantyBox3; ?>" placeholder="Enter Deduction rate for it" name="noWarranty" class="form-control">
                </div><hr>
                <div class="form-group">
                    <label for="scratchless" class=" form-control-label">Body Conditon: Scratchless</label>
                    <input type="number" id="scratchless" value="<?php echo $scratchBody; ?>" name="scratchlessBody" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="good" class=" form-control-label">Body Condition: Good</label>
                    <input type="number" id="good" value="<?php echo $goodBody; ?>" name="goodBody" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="average" class=" form-control-label">Body Condition: Average</label>
                    <input type="number" id="average" value="<?php echo $average; ?>" name="averageBody" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bellowAverage" class=" form-control-label">Body Condition: Bellow Average</label>
                    <input type="number" id="bellowAverage" value="<?php echo $bellowAverage; ?>" name="bellowAverageBody" placeholder="Enter deduction rate for it" class="form-control">
                </div><hr>
                <div class="form-group">
                    <label for="scratchlessScreen" class=" form-control-label">Screen Conditon: Scratchless</label>
                    <input type="number" id="scratchlessScreen" value="<?php echo $scratchless; ?>" name="scratchlessScreen" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="crackedScreen" class=" form-control-label">Screen Conditon: Cracked</label>
                    <input type="number" id="crackedScreen" value="<?php echo $cracked; ?>" name="crackedScreen" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="blankScreen" class=" form-control-label">Screen Conditon: Blank/ Not Working</label>
                    <input type="text" id="blankScreen" value="<?php echo $blank; ?>" name="blankScreen" placeholder="Enter Deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lines_spotScreen" class=" form-control-label">Screen Conditon: Lines/Spots/DC</label>
                    <input type="number" id="lines_spotScreen" value="<?php echo $linesAndSpot; ?>" name="lines_spotScreen" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="scratchScreen" class=" form-control-label">Screen Conditon: Scretches On Screen</label>
                    <input type="number" id="scratchScreen" value="<?php echo $scratchOnScreen; ?>" name="scratchScreen" placeholder="Enter deduction rate for it" class="form-control">
                </div><hr>
                <div class="form-group">
                    <label for="fCamera" class=" form-control-label">Not Working: Front Camera</label>
                    <input type="number" id="fCamera" value="<?php echo $fCam; ?>" name="fCamera" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bCamera" class=" form-control-label">Not Working: Back Camera</label>
                    <input type="number" id="bCamera" value="<?php echo $bCam; ?>" name="bCamera" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="battery" class=" form-control-label">Not Working: Battery</label>
                    <input type="number" id="battery" value="<?php echo $battery; ?>" name="battery" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="fingerSensor" class=" form-control-label">Not Working: Finger Sensor</label>
                    <input type="number" id="fingerSensor" value="<?php echo $sensor; ?>" name="fingerSensor" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="faceID" class=" form-control-label">Not Working: Face ID</label>
                    <input type="number" id="faceID" value="<?php echo $faceId; ?>" name="faceID" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="bluetooth" class=" form-control-label">Not Working: Bluetooth/Wi-Fi</label>
                    <input type="number" id="bluetooth" value="<?php echo $bluetooth; ?>" name="bluetooth" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="bentPhone" class=" form-control-label">Bent Phone</label>
                    <input type="number" id="bentPhone" value="<?php echo $bentPhone; ?>" name="bentPhone" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="displayChanged" class=" form-control-label">Display Changed</label>
                    <input type="number" id="displayChanged" value="<?php echo $changedDisplay; ?>" name="displayChanged" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="speakerProblem" class=" form-control-label">Speaker Problem</label>
                    <input type="number" id="speakerProblem" value="<?php echo $speaker; ?>" name="speakerProblem" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="mic" class=" form-control-label">MIC Problem</label>
                    <input type="number" id="mic" value="<?php echo $mic; ?>" name="mic" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="network" class=" form-control-label">Network Problem</label>
                    <input type="number" id="network" value="<?php echo $network; ?>" name="network" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="charging" class=" form-control-label">Charging Problem</label>
                    <input type="number" id="charging" value="<?php echo $chargingProblem; ?>" name="charging" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <div class="form-group">
                    <label for="charging" class=" form-control-label">Broken Back Glass</label>
                    <input type="number" id="brkBckGlass" value="<?php echo $backGlassBroken; ?>" name="brokenBackGlass" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                <hr>
                   <div class="form-group">
                    <label for="NanCharger" class=" form-control-label">Accessories: Not Having Charger</label>
                    <input type="number" id="NanCharger" value="<?php echo $charger; ?>" name="NanCharger" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="NanEarphones" class=" form-control-label">Accessories: Not Having Earphones</label>
                    <input type="number" id="NanEarphones" value="<?php echo $earphones; ?>" name="NanEarphones" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="NanBox" class=" form-control-label">Accessories: Not Having Box</label>
                    <input type="number" id="NanBox" name="NanBox" value="<?php echo $box; ?>" placeholder="Enter deduction rate for it" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="NanBill" class=" form-control-label">Accessories: Not Having Bill</label>
                    <input type="number" id="NanBill" value="<?php echo $bill; ?>" name="NanBill" placeholder="Enter deduction rate for it" class="form-control">
                </div><hr>
                
               <!-- right column ends -->
            </div>
            </div>
             <div class="form-group">
                <input type="submit" name="Submit" id="country" value="Update" class="form-control btn btn-primary">
            </div>
            </form>
            
        </div>
    </div>
</div>
<?php
include "buttom.inc.php";
?>