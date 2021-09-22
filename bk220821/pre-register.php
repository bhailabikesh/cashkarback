<?php 
$msg = '';
if(isset($_GET['r'])){
    $subject = $_GET['r'];
    if($subject == 'pre-used-seller'){
        $subjectS = "Pre used seller";
    } else if($subject == 'repair-house'){
       $subjectS = "Repair House";   
    }
    else{
       $subjectS = "Office And Bulk";   
    }
    ?>
    <?php 
include "content/connection.php";
if(isset($_REQUEST['submit_data'])){
    $userName = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $brand = $_REQUEST['brand'];
    $model = $_REQUEST['model'];
    $number = $_REQUEST['number'];
    $address = $_REQUEST['address'];
    $helpTxt = $_POST['help-txt'];
    $city = $_POST['city'];
    $date = date("Y-m-d");
   
       $insQuery = "INSERT INTO `contact` ( `fullName`, `email`, `phoneNumber`, `address`, `msg`, `city`,`dateTime`,`subject`) 
        VALUES ('$userName','$email','$number','$address','$helpTxt','$city','$date','$subjectS')";
        $execute = mysqli_query($connect,$insQuery);
        if ($execute) {
            $msg = "<div class='alert alert-success'>
                      <strong>Thank You!</strong> Your Contact Request has been received.
                    </div>";
        }else{
            $msg = "<div class='alert alert-warning'>
                      <strong>Sorry!</strong> Unable to proceed your request.
                    </div>";
        }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://www.cashkar.in/r/<?php echo $subject;?>" />
    <!-- meta tags for home pages start here. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta property="og:site_name" content="Gadgetz Co" />
          <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="https://www.cashkar.in" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact - Cashkar | Pre-registration for <?php echo $subjectS; ?>" />
    <meta property="og:description" content=" Register now for <?php echo $subjectS; ?> at Cashkar and be a part of our growing community. Sell Old Phone & Tablets with Ease only at Cashkar." />
    <meta name="description" content="Register now for <?php echo $subjectS; ?> at Cashkar and be a part of our growing community. Sell Old Phone & Tablets with Ease only at Cashkar." />
    <!-- meta tags for home pages end here -->
    <!--  -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
    <link rel="stylesheet" href="https://cashkar.in/css/home-page.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--<script src="js/main.js"></script>-->
    <title>Contact - Gadgetzco | Pre-registration for <?php echo $subjectS; ?></title>
</head>

<body>
        <?php include "content/menu.php";?>
        <div class="container mt-5 mb-3">
          <div class="col-lg-8 col-sm-12 col-12 pt-5 box-ed m-auto shadow-lg">
             <div class="text-center mt-2">
                <h2 class="repair-head">
                   Fill Your Information. 
                </h2>
             </div>
           <!--Form section start-->
            <form method="POST">
                <?php echo $msg;?>
                <p>Note: You're registering for: <?php echo $subjectS; ?>.</p>
                  <div class="form-group">
                    <label for="fname">Full Name</label>
                    <input type="text" validate required class="form-control" name="fullname" placeholder="Enter Your Full Name" id="fname"maxlength="22" minlength="5">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" onchange="validate(this.value)" name="email" placeholder="Your email.." required validate minlength="12">
                                    <p id="email-error" style="color:red;"></p> 
                  </div>
                   <div class="form-group">
                    <label for="modal">Phone Number</label>
                <input type="text" class="form-control" id="number" required validate maxlength="10" minlength="10" onkeypress="return onlyNumberKey(event)" name="number" placeholder="Your Phone number..">
                  </div>
                   <div class="form-group">
                    <label for="modal">Address:</label>
                     <input type="text" class="form-control" id="address" required name="address" placeholder="Your Home address">
                  </div>
                  <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city"  name="city" placeholder="Your City Name" required>
                  </div>
                   <div class="form-group">
                    <label for="help-txt">How Can We Help:</label>
                    <textarea class="form-control" name="help-txt" id="help-txt" placeholder="Enter Your Massage...." style="resize:none;height:95px;"></textarea>
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary form-control z-index-2"  name="submit_data">Submit</button>
            </form>
           </div>
       </div>
       <?php include "footer.php";?>
</body>
</html>
    <?php
}else{
 echo '<h1 class="text-center">Error: You Are Unable Access</h1>';   
}
?>
