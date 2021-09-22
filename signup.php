<?php
session_start();
ob_start();
include "content/connection.php";
include "content/function.inc.php";
$msg='';
if (isset($_SESSION['PLACE-A-ORDER']) and isset($_SESSION['USER-LOGIN'])) {
        $cookieName = md5("USER-LOGIN");
        $uid = $userId;
        // include "remember-me.php";
        $time = time() + (86400 * 30);
        setcookie($cookieName,$uid,$time,"/");
        // echo "checkout";
        header("location:checkout/");
    }else{
        if(isset($_SESSION['USER-LOGIN'])){
        // echo $_SESSION['USER-LOGIN'];
        $cookieName = md5("USER-LOGIN");
        $uid = $userId;
        // include "remember-me.php";
        $time = time() + (86400 * 30);
        setcookie($cookieName,$uid,$time,"/");
        // echo "user";
      header("location:https://cashkar.in/user/");
        }
    }
    // echo $_SESSION['PLACE-A-ORDER'];
if (isset($_GET['cart']) and isset($_SESSION['PLACE-A-ORDER'])) {
  $registrationLink = 'https://cashkar.in/login?cart=true';
} else {
  $registrationLink = 'https://cashkar.in/login/';
}
             
?>
<?php
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $fullName = mysqli_real_escape_string($connect, $_POST['fName']);
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmpassword'];
  if (strlen($password) >= 5) {
    $password = md5($password);
    $confirmPassword = md5($confirmPassword);
    if($confirmPassword === $password){
      if(strlen($fullName) >= 3){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          $getIp = get_user_ip();
          $checkUser = "SELECT * from users where email = ?";
          $queryCheck = mysqli_prepare($connect,$checkUser);
          mysqli_stmt_bind_param($queryCheck,'s',$email);
          mysqli_stmt_execute($queryCheck);
          $queryCheck = mysqli_stmt_get_result($queryCheck);
          if(mysqli_num_rows($queryCheck) == 0){
          $sqlUserReg = "INSERT INTO `users`(`fullName`, `email`, `password`, `ip_whileRegistering`, `ip_lastLogin`) 
          VALUES (?,?,?,?,?)";
          $sqlUserReg = mysqli_prepare($connect,$sqlUserReg);
          mysqli_stmt_bind_param($sqlUserReg,'sssss',$fullName,$email,$password,$getIp,$getIp);
          $queryUserReg = mysqli_stmt_execute($sqlUserReg);
        //   $queryUserReg = mysqli_query($connect,$sqlUserReg);
           if($queryUserReg){
             $sqlUserLog = "SELECT * FROM users where email = ?";
             $queryUser = mysqli_prepare($connect,$sqlUserLog);
             mysqli_stmt_bind_param($queryUser,'s',$email);
             mysqli_stmt_execute($queryUser);
             $queryUser = mysqli_stmt_get_result($queryUser);
             $resUserId = mysqli_fetch_array($queryUser);
             $userId = $resUserId['id'];
             $_SESSION['USER-LOGIN'] = $userId;
             if(isset($_SESSION['USER-LOGIN'])){
               if (isset($_GET['cart']) and isset($_SESSION['PLACE-A-ORDER'])) {
                 header("location:checkout/");
             }else{
               header("location:https://cashkar.in/user/");
             }
             }
           }
          }else{
                 $msg = '
    <div class="alert alert-danger p-2" style="border-radius: 10px;">
      Email already registered, please login.
    </div> 
    '; 
          }
        }else{
          $msg = '
    <div class="alert alert-danger p-3" style="border-radius: 10px;">
      Please enter valid email.
    </div> 
    ';
        }
      }else{
        $msg = '
    <div class="alert alert-danger p-3" style="border-radius: 10px;">
      Full name must longer than 6 character.
    </div> 
    ';
      }
    }else{
      $msg = '
    <div class="alert alert-danger p-3" style="border-radius: 10px;">
      Password and confirm password must match.
    </div> 
    ';
    }
  } else {
    $msg = '
    <div class="alert alert-danger p-3" style="border-radius: 10px;">
      Please create strong password.
    </div> 
    ';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register | Cashkar | Sell Your Old Mobile And Get Cash Intantly |</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <meta name="google-signin-client_id" content="331381282671-vqtlc9u2ceh12vjb4sfqsec6ogvfq3gb.apps.googleusercontent.com"/>
        <script src="https://apis.google.com/js/platform.js"></script>
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cashkar.in/assets/css/style.css">
      <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
  <!-- font awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
   <link rel="stylesheet" href="https://cashkar.in/css/home-page.css">
  <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
  <link rel="stylesheet" href="https://cashkar.in/css/sell-phone.css">
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
              <p class="login-card-description mb-2">Signup</p>
              <div style="display:flex;">
                  <i class="fab fa-facebook-f fb-login mr-3" onclick="fbLogin()"></i>
              <div class="g-signin2 ml-2" data-onsuccess="g_login"></div>
              </div>
              <?php echo $msg;?>
              <form action="#" autocomplete="false" method="POST">
                <div class="form-group">
                  <label for="fName" class="">Full Name:</label>
                  <input type="text" name="fName" id="fName" class="form-control" placeholder="Your Full name"  required minlength="5">
                </div>
                <div class="form-group">
                  <label for="email" class="">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email address" validate required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
                <div class="form-group mb-4">
                  <label for="password">Password</label>
                  <div class="">
                    <input oninput="confirmpw()" onkeyup="validatepassword()" type="password" name="password" id="password" class="form-control" placeholder="***********" required>
                    <div class="showBtn">SHOW</div>
                  </div>
                  <!--<div class="pw-text"></div>-->
                </div>
                <div class="form-group mb-4">
                  <label for="cpassword" class="">Confirm Password</label>
                  <input oninput="confirmpw()" type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="***********" required>
                  <spam class="cpasstext"></span>
                </div>
                <div class="pb-3 pl-2">
                  By creating an account you agree to our <a href="#privacy.html">Terms & Privacy.</a>
                </div>
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Register">
              </form>
              <p class="login-card-footer-text">Already have an account? <a href="<?php echo $registrationLink; ?>" class="text-reset">Login</a></p>
              <nav class="login-card-footer-nav">

                <a href="#">Privacy policy</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
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
                      window.location.href = 'https://cashkar.in/auth.php';
                   }
                }
            }
        </script>
  <?php include "footer.php";?>
  <?php include "fb_login.php";?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cashkar.in/assets/js/app.js"></script>
</body>

</html>