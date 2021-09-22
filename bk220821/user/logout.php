<?php 
ob_start();
session_start();
unset($_SESSION['USER-LOGIN']);
include "../fb_login.php";
?>
<meta name="google-signin-client_id" content="331381282671-vqtlc9u2ceh12vjb4sfqsec6ogvfq3gb.apps.googleusercontent.com"/>
<script src="https://apis.google.com/js/platform.js"></script>
<script>
var auth = gapi.auth2.getAuthInstance();
auth.signOut();
</script>
<script>
    Fb.logout();
</script>
<?php
header("location:https://cashkar.in/login");
?>