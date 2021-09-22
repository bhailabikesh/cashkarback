<?php 
include "connection.inc.php";
$getURl = $_GET['url'];
$checkURLOnDB = "SELECT * FROM blogs where link = '$getURl'";
$queryURl = mysqli_query($connect, $checkURLOnDB);
if (mysqli_num_rows($queryURl) > 0) {
    echo "Url already exist so change your url by adding numbers at last";
}
else{
    echo "You get Unique url";
}
?>