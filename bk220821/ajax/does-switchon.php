<?php 
session_start();
$switchCase = $_GET['switchon'];
if($switchCase == 'true'){
    $_SESSION['DOES-SWITCH-ON'] = 'yes';
}else{
   $_SESSION['DOES-SWITCH-ON'] = 'no';
}
if(isset($_GET['unset'])){
    unset($_SESSION['DOES-SWITCH-ON']);
}
?>