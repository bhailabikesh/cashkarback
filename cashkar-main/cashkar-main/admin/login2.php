<?php 
session_start();
ob_start();
include "connection.inc.php"; // including database connection;
if (isset($_GET['r'])) {
    //echo $_GET['r'];
    if ($_GET['r'] != 'su') {
       header("location:https://gadgetzco.com/");
    }
}else{
    header("location:https://gadgetzco.com/");
}
?>
<?php require "function.inc.php"; ?>
<?php
$msg = '';
if (isset($_SESSION['loginReturnMsg'])) {
    $msg = $_SESSION['loginReturnMsg'];
}

if (isset($_REQUEST['login'])) {
    $username = mysqli_real_escape_string($connect, strtolower($_REQUEST['username']));
    $password = md5(mysqli_real_escape_string($connect, $_REQUEST['pwd']));
    echo $password.'<br>';
    $loginSql = "SELECT * FROM `admin` where username = '$username' and password = '$password'";
    $checkQuery = mysqli_query($connect, $loginSql);
    $r = mysqli_fetch_array($checkQuery);
    // echo $r['password'];
    $checkNum = mysqli_num_rows($checkQuery);
    if ($checkNum > 0) {
        $_SESSION['isLogin'] = 1;
        $_SESSION['admin_username'] = $username;
        header("location:index.php");
    } else {
        $msg = "<p class='error-text'>Please enter correct details</p>";
    }
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png"> -->
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body>
<div class="container">
    <div class="row">
        
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>