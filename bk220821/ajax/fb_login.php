<?php 
session_start();
// ob_starts();
include "../content/connection.php";
include "../content/function.inc.php";
$ip = get_user_ip();
$name = $_GET['name'];
$fb_id = $_GET['id'];
$checkExist = "SELECT * FROM users where fb_id = '$fb_id'";
$queryExist = mysqli_query($connect,$checkExist);
$resUser = mysqli_fetch_array($queryExist);
    $uid = $resUser['id'];
if(mysqli_num_rows($queryExist) > 0){
    $_SESSION['USER-LOGIN'] = $uid;
}else{
$insSql = "INSERT INTO users (`fullName`,`fb_id`,`ip_whileRegistering`,`ip_lastLogin`) values ('$name','$fb_id','$ip','$ip')";
$queryIns = mysqli_query($connect,$insSql);
if($queryIns){
    $checkExist = "SELECT * FROM users where fb_id = '$fb_id'";
    $queryExist = mysqli_query($connect,$checkExist);
    $resUser = mysqli_fetch_array($queryExist);
    $uid = $resUser['id'];
    echo $_SESSION['USER-LOGIN'] = $uid;
    if(isset($_SESSION['USER-LOGIN'])){
        
    }
}
}
?>