<?php 
session_start();
if (isset($_GET['warranty'])) {
    
        $warrantyAge = $_GET['warranty'];
        if ($warrantyAge == '0-3') {
            $_SESSION['0-3'] = '1';
        }
        if ($warrantyAge == '3-6') {
            $_SESSION['3-6'] = '2';
        }
        if ($warrantyAge == '6-11') {
            $_SESSION['6-11'] = '3';
        }
        if ($warrantyAge == 'no') {
            $_SESSION['no'] = '0';
        }
        $_SESSION['allWarranty'] = true;
    }
if (isset($_GET['unset'])) {
    unset($_SESSION['0-3']);
    unset($_SESSION['3-6']);
    unset($_SESSION['6-3']);
    unset($_SESSION['6-11']);
    unset($_SESSION['no']);
    unset($_SESSION['allWarranty']);
}
?>
