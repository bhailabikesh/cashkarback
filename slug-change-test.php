<?php 
include "content/connection.php";
$sqlGetData = "SELECT * FROM model";
$queryGetData = mysqli_query($connect,$sqlGetData);
$rows = mysqli_num_rows($queryGetData);

$x = 0;
$starting = 160;
while($x <= $rows){
 $sqlSelectData = "SELECT * from model where id = '$starting'";
    $querySelection = mysqli_query($connect,$sqlSelectData);
    $ifRows = mysqli_num_rows($querySelection);
    if($ifRows == 0){
        //does nothing. simpily ignore 
    }else{
    $resData = mysqli_fetch_array($querySelection);
    $url = $resData['slug'];
        $urlToChange = 'used-'.$url;

    $update = "UPDATE model SET slug = '$urlToChange', slugUpdated = 1 where id = '$starting'";
    
     $queryUpdate = mysqli_query($connect,$update);
     
     echo $x.' '.$update;
    echo '<br>';
    $x++;
    }
 $starting++;
    
}
// function changeSlug($starting){
//     $sqlSelectData = "SELECT * from model where id = '$starting'";
//     $querySelection = mysqli_query($connect,$sqlSelectData);
//     $ifRows = mysqli_num_rows($querySelection);
//     if($ifRows == 0){
//         //does nothing. simpily ignore 
//     }else{
//     $resData = mysqli_fetch_array($querySelection);
//     $url = $resData['slug'];
//     $ram= $resData['ram'];
//     $storage = $resData['storage'];
//     if($ram == ''){
//         $urlToChange = '-'.$storage.'gb';
//     }else{
//         $urlToChange = '-'.$ram.'gb-'.$storage.'gb';
//     }
//     echo $update = "UPDATE model SET slug = '$urlToChange', slugUpdated = 1 where id = '$starting'";
//     echo '<br>';
//     $queryUpdate = mysqli_query($connect,$update);
//     }
// }
?>