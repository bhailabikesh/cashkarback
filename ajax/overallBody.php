<?php 
session_start();
if(isset($_GET['case'])){
    $case = $_GET['case'];
    if($case == 'flawless'){
        $_SESSION['overAllBodyCase'] = 4;
    }
    if($case == 'good'){
        $_SESSION['overAllBodyCase'] = 5;
    }
    if($case == 'average'){
        $_SESSION['overAllBodyCase'] = 6;
    }
    if($case == 'average'){
        $_SESSION['overAllBodyCase'] = 6;
    }
    if($case == 'bellowAverage'){
        $_SESSION['overAllBodyCase'] = 7;
    }
    $_SESSION['overallbody'] = true;
$_SESSION['PLACE-A-ORDER'] = true;
}

if(isset($_GET['unset'])){
    unset($_SESSION['overallbody']);
unset($_SESSION['overAllBodyCase']);
}
?>