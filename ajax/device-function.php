<?php
session_start();
$problemName = $_GET['problem'];
if(isset($_SESSION['allcase'])){
    $_SESSION['noProblem'] = '/';
}
if (!(isset($_GET['unset']))) {
    if (isset($_GET['case'])) {
        $case = $_GET['case'];
        if($case == 'i1'){
            $_SESSION[$problemName] = 18;
        }
        if($case == 'i2'){
            $_SESSION[$problemName] = 20;
        }
        if($case == 'i3'){
            $_SESSION[$problemName] = 23;
        }
        if($case == 'i4'){
            $_SESSION[$problemName] = 25;
        }
        if($case == 'i5'){
            $_SESSION[$problemName] = 21;
        }
        if($case == 'i6'){
            $_SESSION[$problemName] = 19;
        }
        if($case == 'i7'){
            $_SESSION[$problemName] = 22;
        }
        if($case == 'i9'){
            $_SESSION[$problemName] = 27;
        }
        if($case == 'i10'){
            $_SESSION[$problemName] = 26;
        }
        if($case == 'i12'){
            $_SESSION[$problemName] = 24;
        }
        if($case == 'i13'){
            $_SESSION[$problemName] = 28;
        }
        if($case == 'i14'){
            $_SESSION[$problemName] = 22;
        }
        if($case == 'i14'){
            $_SESSION[$problemName] = 17;
        }
    }
} else {
    unset($_SESSION['backCamera']);
    unset($_SESSION['fingerprintSensor']);
    unset($_SESSION['speaker-vibrator']);
    unset($_SESSION['faceSanner']);
    unset($_SESSION['battery']);
    unset($_SESSION['wifi']);
    unset($_SESSION['network']);
    unset($_SESSION['microphone']);
    unset($_SESSION['displayChanged']);
    unset($_SESSION['chargingProblem']);
    unset($_SESSION['bluetooth']);
    unset($_SESSION['frontCamera']);
}
$_SESSION['deviceFunctionAllSet'] = true;
?>