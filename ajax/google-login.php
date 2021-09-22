<?php 
session_start();
include "../content/connection.php";
include "../content/function.inc.php";
$ip = get_user_ip();
$id = mysqli_real_escape_string($connect,$_GET['id']);
$email = mysqli_real_escape_string($connect,$_GET['email']);
$name = mysqli_real_escape_string($connect,$_GET['name']);
$img = mysqli_real_escape_string($connect,$_GET['img']);

// checking if user is already loged in or not
echo $sqlCheck = "SELECT * FROM users where google_id = '$id'";
$queryCheck = mysqli_query($connect,$sqlCheck);
$resUser = mysqli_fetch_array($queryCheck);
$uid = $resUser['id'];
// echo mysqli_num_rows($queryCheck);
if(mysqli_num_rows($queryCheck) > 0){
    $_SESSION['USER-LOGIN'] = $uid;
}else{
    $insSql = "INSERT INTO users (`fullName`,`google_id`,`email`,`img`,`ip_whileRegistering`,`ip_lastLogin`) values ('$name','$id','$email','$img','$ip','$ip')";
$queryIns = mysqli_query($connect,$insSql);
if($queryIns){
    $checkExist = "SELECT * FROM users where google_id = '$id'";
    $queryExist = mysqli_query($connect,$checkExist);
    $resUser = mysqli_fetch_array($queryExist);
    $uid = $resUser['id'];
    $_SESSION['USER-LOGIN'] = $uid;
    // echo "done";
    // if(isset($_SESSION['USER-LOGIN'])){
        
    // }
}
}

?>