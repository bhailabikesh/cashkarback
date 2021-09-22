<?php 
   session_start();
   setcookie();
   ob_start();
   
   include "content/connection.php";
   include "content/function.inc.php";
   $err = '';
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Gadgetzco - User Login - Sell Your old Device And Get Cash</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://gadgetzco.com/css/header-css.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="icon" href="https://gadgetzco.com/images/site-logo.png" type="image/x-icon" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
            <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
   </head>
   <body style="background:#eee">
      <?php include "content/menu.php";?>
      <!--login scetion-->
      <?php 
         if(isset($_GET['token'])){
             ?>
      <div class="container mt-5">
         <div class="col-lg-12 col-sm-12 col-12 pt-5">
            <div class="col-lg-7 col-sm-10 col-12 m-auto">
               <div class="jombotron shadow px-4 py-3 bg-light mt-4" style="border-radius:12px">
                  <?php 
                  $_GET['token'];
                     if(isset($_POST['create'])){
                         $password = md5(mysqli_real_escape_string($connect,$_POST['pwd']));
                         $c_pwd = md5(mysqli_real_escape_string($connect,$_POST['c_pwd']));
                         if($password == $c_pwd){
                             
                         
                         if(isset($_COOKIE['PWD_RESET']) and isset($_COOKIE['PWD_RESET_EMAIL'])){
                             $token = $_COOKIE['PWD_RESET'];
                             if($_GET['token'] == $token){
                                 $email = $_COOKIE['PWD_RESET_EMAIL'];
                                 $sqlR = "SELECT * FROM users where email = '$email'";
                                 $querySql = mysqli_query($connect,$sqlR);
                                 if(mysqli_num_rows($querySql)){
                                     $sqlIns = "UPDATE `users` SET `password`= '$password' WHERE email = '$email'";
                                     $queryIns = mysqli_query($connect,$sqlIns);
                                     if($queryIns){
                                     $_SESSION['RESET_SUCCESS_MSG'] = "
                                         <div class='alert alert-success p-3'>
                                         Password reset Success
                                         </div>
                                         ";
                                         header("location:https://gadgetzco.com/login/?recover=success");
                                     }
                                 }
                                 
                             }else{
                                 $msg = "
                             <div class='alert alert-danger p-3'>
                             Something went wrong. Try Again
                             </div>
                             ";
                             }
                         }else{
                             $msg = "
                             <div class='alert alert-danger p-3'>
                             Time period expire. Reset within 30 minutes of mail.
                             </div>
                             ";
                         }
                         }else{
                             $msg = "
                             <div class='alert alert-warning p-3'>
                             Password doesnot match.
                             </div>
                             ";
                         }
                     }
                     ?>
                  <form method="POST">
                     <?php echo $msg;?>
                     <div class="form-group">
                        <label for="user_password">New Password:</label>
                        <div class="input-group">
                           <input type="password" name="pwd" id="user_password" class="form-control" data-toggle="password">
                           <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-eye"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="user_password">Confirm Password:</label>
                        <div class="input-group">
                           <input type="password" name="c_pwd" id="user_password" class="form-control" data-toggle="password">
                           <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-eye"></i></span>
                           </div>
                        </div>
                     </div>
                     <!--<p><span>Don't have a account? <a href="https://gadgetzco.com/register/" style="text-decoration:none;"> SignUp</a> .</span><br>-->
                     <!--   <span><a href="https://gadgetzco.com/reset/" style="text-decoration:none;"> Forget Password?</a></span>-->
                     <!--   <br>-->
                     <!--</p>-->
                     <button type="submit" class="btn btn-primary" name="create">Create New Password</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php
         }
         ?>
      <script> 
         !function ($) {
         //eyeOpenClass: 'fa-eye',
         //eyeCloseClass: 'fa-eye-slash',
         'use strict';
         
         $(function () {
             $('[data-toggle="password"]').each(function () {
                 var input = $(this);
                 var eye_btn = $(this).parent().find('.input-group-text');
                 eye_btn.css('cursor', 'pointer').addClass('input-password-hide');
                 eye_btn.on('click', function () {
                     if (eye_btn.hasClass('input-password-hide')) {
                         eye_btn.removeClass('input-password-hide').addClass('input-password-show');
                         eye_btn.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash')
                         input.attr('type', 'text');
                     } else {
                         eye_btn.removeClass('input-password-show').addClass('input-password-hide');
                         eye_btn.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye')
                         input.attr('type', 'password');
                     }
                 });
             });
         });
         
         }(window.jQuery);
      </script>
   </body>
</html>