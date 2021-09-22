<?php 
session_start();
if(isset($_GET['case'])){
    $case = $_GET['case'];
    $_SESSION['screenCondition'] = $case;
    
}
if(isset($_GET['unset'])){
    unset($_SESSION['screenCondition']);
}
?>