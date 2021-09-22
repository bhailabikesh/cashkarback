<?php 
session_start();
if (isset($_GET['unset'])) {
    
        unset($_SESSION['CHARGER']);
        unset($_SESSION['EARPHONE']);
        unset($_SESSION['BOX']);
        unset($_SESSION['BILL']);
        unset($_SESSION['accessories']);
    }else{
        if (isset($_GET['setSession']) && $_GET['setSession'] == 'true') {
            if (isset($_GET['have'])) {
                $accessoriesHave = $_GET['have'];

                if ($accessoriesHave == "Charger") {
                    $accessoriesList = '13';
                    $_SESSION['CHARGER'] = $accessoriesList;
                }
                if ($accessoriesHave == "Earphone") {
                    $accessoriesList = '14';
                    $_SESSION['EARPHONE'] = $accessoriesList;
                }
                if ($accessoriesHave == "Box") {
                    $accessoriesList = '15';
                    $_SESSION['BOX'] = $accessoriesList;
                }
                if ($accessoriesHave == "Bill") {
                    $accessoriesList = '16';
                    $_SESSION['BILL'] = $accessoriesList;
                }
            }
        } else {
            if (isset($_GET['have'])) {
                $accessoriesHave = $_GET['have'];
    
                if ($accessoriesHave == "Charger") {
                    unset($_SESSION['CHARGER']);
                }
                if ($accessoriesHave == "Earphone") {
                    unset($_SESSION['EARPHONE']);
                }
                if ($accessoriesHave == "Box") {
                    unset($_SESSION['BOX']);
                }
                if ($accessoriesHave == "Bill") {
                    unset($_SESSION['BILL']);
                }
            }
        }
        
    }
    $_SESSION['accessories'] = true;
?>