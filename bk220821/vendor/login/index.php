<?php 
session_start();
include "../../content/connection.php";
if(isset($_POST['login'])){
  $email = mysqli_real_escape_string($connect,$_POST['email']);
  $password = mysqli_real_escape_string($connect,md5($_POST['password']));
  $loginQuery = "SELECT * FROM vendor where email = '$email' and `password` = '$password'";
  $queryLogin = mysqli_query($connect,$loginQuery);
  if(mysqli_num_rows($queryLogin) > 0){
    $getUserId = "SELECT id from vendor where email = '$email'";
    $queryUser = mysqli_query($connect,$getUserId);
    $userRes = mysqli_fetch_array($queryUser);
    $userId = $userRes['id'];
    $_SESSION['VENDOR-LOGIN'] = $userId;
    header("location:https://cashkar.in/vendor/");
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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
  <title>Sign-in</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
  <link rel="stylesheet" href="https://cashkar.in/assets/css/style.css">
</head>
<body>
    <?php include "../../content/menu.php";?>
  <main class="d-flex align-items-center min-vh-100 py-md-3">
    <div class="container py-3">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="https://cashkar.in/assets/images/image.webp" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <p class="login-card-description">Sign into your account</p>
              <form action="#" enctype="application/x-www-form-urlencoded" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label for="email" class="">Email</label>
                    <input type="email" name="email" id="email" class="form-control needs-validation" novalidate pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required placeholder="Email address" autocomplete="off">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="">Password</label>
                    <input type="password" name="password" onkeyup="signintoggler()" id="password" class="form-control" placeholder="***********" style="position:relative;">
                    <div class="showBtn signinpwtoggler" style="display: none;">SHOW</div>
                    <a href="forgot.html" class="forgot-password-link pb-3">Forgot password?</a>
                  </div>
                  
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>
                <p class="login-card-footer-text">Don't have an account? <a href="signup.html" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  
                  <a href="#">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="./assets/js/app.js"></script>
</body>
</html>
