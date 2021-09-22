<?php 
session_start();
include "../content/connection.php";
if($_GET['c']){
    $dbTable = 'laptopmodel';
}else{
    $dbTable = 'model';
}
if(isset($_GET['brandStorage'])){
    //for mobile and tablets
    $arrStorage = explode('/',$_GET['brandStorage']);
    if(count($arrStorage) > 1){
    $ramSize = $arrStorage[0];
    $storageSize = $arrStorage[1];
    $brand = $_GET['brand'];
    $modelCode = $_GET['mCode'];
    
    $getData = "SELECT * from $dbTable where brand='$brand' and modelCode = '$modelCode' and (storage ='$storageSize' and ram = '$ramSize')";
    $queryData = mysqli_query($connect,$getData);
    $resData = mysqli_fetch_array($queryData);
    $variationPrice = $resData['price'];
    $modelId = $resData['id'];
    $url = $resData['slug'];
    $_SESSION['MODEL_ID'] = $modelId;
    echo $url;
    
    }else{
        $storageSize = $arrStorage[0];
    $ramSize = $arrStorage[0];
    $brand = $_GET['brand'];
    $modelCode = $_GET['mCode'];
    $getData = "SELECT * from $dbTable where brand='$brand' and modelCode = '$modelCode' and storage ='$storageSize'";
    $queryData = mysqli_query($connect,$getData);
    $resData = mysqli_fetch_array($queryData);
    $variationPrice = $resData['price'];
    $modelId = $resData['id'];
    $url = $resData['slug'];
    $_SESSION['MODEL_ID'] = $modelId;
    echo $url;
    }
}else{
    //for laptop
    $brand = $_GET['brand'];
    $slug = $_GET['slug'];
    $ram = $_GET['ram'];
    $hardDisk = $_GET['hd'];
    $processer = $_GET['processer'];
    $sqlData = "SELECT * FROM $dbTable where (brand = '$brand' and slug ='$slug') and (ram = '$ram' or storage='$hardDisk') and processer = '$processer'";
}
?>