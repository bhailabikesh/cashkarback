<?php
$sqltag = "SELECT * FROM `model` WHERE `brand` = '$brandName' and category = 'mobile'";
$querysql = mysqli_query($connect,$sqltag);
$result = mysqli_fetch_array($querysql);
$tags = $result['brandTags'];
// $modelName = $resModel['model_name'];
// $modelKeywords = explode('/', $tags);
// $tags = $modelKeywords[0].' '.ucfirst($brandName).' '.$modelKeywords[1];
?>