<?php
session_start();
ob_start();
include "content/connection.php";
  if (isset($_SESSION['PLACE-A-ORDER']) and isset($_SESSION['USER-LOGIN'])) {
        $cookieName = md5("USER-LOGIN");
        $uid = $userId;
        // include "remember-me.php";
        $time = time() + (86400 * 30);
        setcookie($cookieName,$uid,$time,"/");
        //header("location:https://cashkar.in/checkout/");
    }else{
        if(isset($_SESSION['USER-LOGIN'])){
        $cookieName = md5("USER-LOGIN");
        // var_dump($uid = $userId);
        // include "remember-me.php";
        $time = time() + (86400 * 30);
        setcookie($cookieName,$uid,$time,"/");
        //header("location:https://cashkar.in/user/");
        }}
    
if (isset($_GET['cart']) and isset($_SESSION['PLACE-A-ORDER'])) {
  $registrationLink = 'https://cashkar.in/register?cart=true';
} else {
  $registrationLink = 'https://cashkar.in/register/';
}
?>
<?php 
$err_msg = '';
if(isset($_POST['login'])){
  $email = mysqli_real_escape_string($connect,$_POST['email']);
  $password = mysqli_real_escape_string($connect,md5($_POST['password']));
  $loginQuery = "SELECT * FROM users where email = ? and `password` = ?";
  
  $loginQuery= mysqli_prepare($connect,$loginQuery);
  mysqli_stmt_bind_param($loginQuery,'ss',$email,$password);
//   $queryLogin = mysqli_query($connect,$loginQuery);
mysqli_stmt_execute($loginQuery);
$resUser = mysqli_stmt_get_result($loginQuery);
  if(mysqli_num_rows($resUser) > 0){
    //   echo mysqli_num_rows($resUser);
    $getUserId = "SELECT id from users where email = ?";
    $queryUser = mysqli_prepare($connect,$getUserId);
    mysqli_stmt_bind_param($queryUser,'s',$email);
    mysqli_execute($queryUser);
    $queryUser = mysqli_stmt_get_result($queryUser);
    $userRes = mysqli_fetch_array($queryUser);
    $userId = $userRes['id'];
    $_SESSION['USER-LOGIN'] = $userId;
    if (isset($_GET['cart']) and isset($_SESSION['PLACE-A-ORDER'])) {
        $cookieName = md5("USER-LOGIN");
        $uid = $userId;
        // include "remember-me.php";
        $time = time() + (86400 * 30);
        setcookie($cookieName,$uid,$time,"/");
        header("location:checkout/");
    }else{
        $cookieName = md5("USER-LOGIN");
        $uid = $userId;
        // include "remember-me.php";
        $time = time() + (86400 * 30);
        setcookie($cookieName,$uid,$time,"/");
      header("location:https://cashkar.in/user/");
    }
  }else{
    $err_msg = '<div class="alert alert-danger p-2" style="border-radius: 15px;">
    Please Check Your Login Details
    </div>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="331381282671-vqtlc9u2ceh12vjb4sfqsec6ogvfq3gb.apps.googleusercontent.com"/>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - Cashkar |Sell Your Old Mobile| |Get Cash Instantly|</title>
  <meta property="og:image" content="https://cashkar.in/images/cashkar card image.jpg" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cashkar.in/assets/css/style.css">
  <!-- font awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="https://cashkar.in/css/home-page.css">
  <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
  <link rel="stylesheet" href="https://cashkar.in/css/sell-phone.css">
  <script src="js/main.js"></script>
  <style>
      input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active  {
    -webkit-box-shadow: 0 0 0 60px #fafafa inset !important;
    background-color: #fafafa !important;
    background-clip: content-box !important;
}
  </style>
  <style>
      .fb-login{
          background-color:#0980ec;
          border-radius:50%;
          font-size:20px;
          color:white;
          padding:11px 15px;
          margin-bottom:5px;
          cursor:pointer;
      }
  </style>
</head>

<body>
  <?php include "content/menu.php"; ?>
  <main class="d-flex align-items-center min-vh-100 py-md-3">
    <div class="container py-3">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="https://cashkar.in/assets/images/image.webp" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <p class="login-card-description mb-1">Sign into your account</p>
              <div style="display:flex;">
                  <i class="fab fa-facebook-f fb-login mr-3" onclick="fbLogin()"></i>
              <div class="g-signin2 ml-2" data-onsuccess="g_login"></div>
              </div>
              <?php echo $err_msg; ?>
              <form action="#" enctype="application/x-www-form-urlencoded" method="POST">
                <div class="form-group">
                  <label for="email" class="">Email</label>
                  <input type="email" name="email" id="email" class="form-control" novalidate pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required placeholder="Email address" autocomplete="on">
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="">Password</label>
                  <input type="password" name="password" onkeyup="signintoggler()" id="password" class="form-control" placeholder="***********">
                  <div class="showBtn signinpwtoggler" style="display: none;">SHOW</div>
                  <!--<a href="#" class="forgot-password-link pb-3">Forgot password?</a>-->
                </div>

                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
              </form>
              <p class="login-card-footer-text">Don't have an account? <a href="<?php echo $registrationLink; ?>" class="text-reset">Register here</a></p>
              <nav class="login-card-footer-nav">

                <a href="https://cashkar.in/terms/">Privacy policy</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
    <?php include "footer.php";?>
     <?php include "fb_login.php";?>
     <script>
            function g_login(userInfo){
                var userProfile = userInfo.getBasicProfile();
                var id = userProfile.getId();
                var email = userProfile.getEmail();
                var name = userProfile.getName();
                var img = userProfile.getImageUrl();
                // console.log(img);
                var ajaxUrl = name+'&email='+email+'&id='+id+'&img='+img;
                var gLogin = new XMLHttpRequest()
                gLogin.open("GET","https://cashkar.in/ajax/google-login.php?name="+ajaxUrl, "TRUE");
                gLogin.send();
                gLogin.onreadystatechange = function() {
                  if (gLogin.readyState == 4 && gLogin.status == 200) {
                    //   console.log(gLogin.responseText);
                      location.reload();
                   }
                }
            }
        </script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cashkar.in/assets/js/app.js"></script>
</body>

</html>