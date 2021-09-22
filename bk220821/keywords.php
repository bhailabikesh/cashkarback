<?php
include "content/connection.php";
$sqlKeywords = "SELECT * FROM Keywords WHERE fors = 'mobile'";
$QueryKeywords = mysqli_query($connect,$sqlKeywords);
$resKeywords = mysqli_fetch_array($QueryKeywords);
$keywords = $resKeywords['Tags'];
?>
