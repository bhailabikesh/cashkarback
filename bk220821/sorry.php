<?php 
// include "../content/connection.php";
// if (isset($_REQUEST['rid'])) {
//     $key = $_REQUEST['rid'];
// }
// $token = $key;
// if (isset($_REQUEST['submit_data'])) {
//     $fullName = $_REQUEST['fullname'];
//     $email = $_REQUEST['email'];
//     $number = $_REQUEST['number'];
//     $address = $_REQUEST['address'];

//     $queryIns = "INSERT INTO `users`(`fullName`, `email`, `phone`, `address`) 
//                  VALUES ('$fullName','$email',$number,'$address')";
//     $insertUser = mysqli_query($connect, $queryIns);
//     if ($insertUser) {
//         $getUserId = mysqli_insert_id($connect);
//         // echo "last id is ". $getUserId;
//         $queryIns = "UPDATE `orderlist` SET `byUser`= $getUserId WHERE tokenKey = '$key'";
//         mysqli_query($connect,$queryIns);
//         header("location:final.php?success=true");
//     }
// }
// ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta property="og:site_name" content="Gadgetz Co" />
      <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
  <meta property="og:url" content="https://www.gadgetzco.com/login/" />
    <!-- css links here -->
    <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
    <link rel="stylesheet" href="https://cashkar.in/css/login.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Sorry - Sell Your Old Mobile | Unlock Better Price | Gadgetz Co</title>
</head>

<body>
    <?php include 'content/menu.html'; ?>
    <div class="container mt-5">
        <div class="jumbotron text-center pt-5 m-auto">
  <h1 class="display-4 pt-2">Sorry (-;</h1>
  <p class="lead text-capitalize">We cant buy your Device.</p>
  <hr>
  <p class="lead"></p>
  <div class="col-12">
    <a class="btn btn-warning btn-sm p-2 my-3 mx-4" href="https://cashkar.in/" role="button">Continue to Homepage</a>    
    <a class="btn btn-warning btn-sm p-2 my-3 mx-4" href="https://cashkar.in/" role="button">Sell Ipad/tablets</a>
    <!--<a class="btn btn-warning btn-sm p-2 my-3 mx-4" href="https://cashkar.in/" role="button">Repair Mobile</a>-->
    <a class="btn btn-warning btn-sm p-2 my-3 mx-4" href="https://cashkar.in/user/" role="button">Continue to Profile</a>
  </div>
</div>
    </div>
</body>

</html>