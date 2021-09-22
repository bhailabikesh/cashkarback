<?php 
session_start();
$isSelected = $_GET['is-selected'];
if($isSelected == 'yes'){
    $_SESSION['backGlass'] = 29;
}else{
    unset($_SESSION['backGlass']);
}
?>