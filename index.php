<?php session_start(); ?>
<?php 
ob_start();
include "content/connection.php";
if(isset($_GET['ref']) && isset($_GET['sid'])){
    $_SESSION['METHOD'] = mysqli_real_escape_string($connect,$_GET['ref']);
    $storeId = mysqli_real_escape_string($connect,$_GET['sid']);
    $checkDataSql = "SELECT * FROM vendor where encryptedid = '$storeId'";
    $queryDataCheck = mysqli_query($connect,$checkDataSql);
    if(mysqli_num_rows($queryDataCheck) > 0){
        $_SESSION['STORE_ID'] = $storeId;
    }else{
        header("location:https://cashkar.in/");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         include "main-keywords.php";
         ?>
      <meta name="keywords" content="<?php echo $keywords; ?>">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187080605-1"></script>
      <script> 
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-187080605-1');
      </script>
      <meta name="p:domain_verify" content="7fa7f0be1ee7eb95176ec201a9e9718f"/>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <meta name="google-site-verification" content="VnI7Nw_ih9nrm-2NSPZuP5oLhzqFVGDijq3UXcpZPWs" />
      <!-- meta tags for home pages start here. -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <meta name="format-detection" content="telephone=no" />
      <meta property="og:site_name" content="Cashkar" />
      <meta property="og:image" content="https://cashkar.in/images/cashkar card image.jpg" />
      <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta property="og:url" content="https://www.cashkar.in" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="https://cashkar.in/images/cashkar card image.jpg" />
      <meta property="og:title" content="Sell used iPhone, iPad, Android Phone & Tablets For Best Price" />
      <meta property="og:description" content="Sell Used iPhone ,Used Mobile, Used iPad and Tablet Online & Get Cash Instantly With Free Pick Up. Get the best price for your old iPhone and iPad. Book Now." />
      <meta name="description" content="Sell Used iPhone ,Used Android Phone, Used iPad and Tablet Online & Get Cash Instantly With Free Pick Up. Get the best price for your old iPhone and iPad. Book Now." />
      <!-- meta tags for home pages end here -->
      <!--  -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
      <link rel="stylesheet" href="https://cashkar.in/css/home-page.css">
      <!-- font awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
      <!-- animate css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      
      <title>Sell Old Phone Online | Sell Used iPhone, iPad, Android Phone & Tablets For Best Price</title>
   </head>
   <body class="font-font awesome">
      
      <div class="container-fluid p-0 m-0" id="main-div" background-color: white !important;>
         <?php include "content/menu.php"; ?>
         <div id="home-slider" class="carousel slide" data-ride="carousel" style="z-index:-99;">
            <!-- Indicators -->
            <ul class="carousel-indicators">
               <!--<li data-target="#demo" data-slide-to="0" class="active"></li>-->
               <!--<li data-target="#demo" data-slide-to="1"></li>-->
               <!--<li data-target="#demo" data-slide-to="2"></li>-->
               <!--<li data-target="#demo" data-slide-to="3"></li>-->
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner h-i-set">
               <div class="carousel-item active">
                  <img src="https://cashkar.in/images/Sell Old Mobile Phone & Tablets For Cash.webp" alt="Sell Old Mobile Phone & Tablets For Cash" style="position:center;width:100%;">
               </div>
               <!--<div class="carousel-item">-->
               <!--<img src="https://cashkar.in/images/Sell Your Old iPhone For Cash.jpg" alt="Sell Your Old iPhone For Cash" style="position:center;width:100%;">-->
               <!--</div>-->
               <!--<div class="carousel-item">-->
               <!--<img src="https://cashkar.in/images/Sell Your Old iPad For Cash.jpg" alt="Sell Your Old iPad For Cash" style="position:center;width:100%;">-->
               <!--</div>-->
               <!--<div class="carousel-item">-->
               <!--<img src="https://cashkar.in/images/Sell Old Tablet For Cash.jpg" alt="Sell Old Phone and tablet at Cashkar" style="position:center;width:100%;">-->
               <!--</div>-->
            </div>
            <style>
               .h-i-set {
               height: 68vh !important;
               }
               @media(max-width:600px) {
               .h-i-set {
               height: 22.3vh !important;
               }
               }
               @media(min-width:600px) {
               .h-i-set {
               height: 34vh !important;
               }
               }
               @media(min-width:768px) {
               .h-i-set {
               height: 32.4vh !important;
               }
               }
               @media(min-width:992px) {
               .h-i-set {
               height: 43vh !important;
               }
               @media(min-width:1200px) {
               .h-i-set {
               height: 74vh !important;
               }
               }
               }
            </style>
         </div>
         <!-- widget section -->
         <style>
            .widget-main {
            border-radius: 20px;
            margin-top: -3.7vh;
            background-color: white !important;
            z-index: 999
            }
            .widget-main {
            display: flex;
            flex-wrap: wrap;
            height: 135px !important;
            justify-content: space-around;
            align-items: center;
            }
            @media(max-width:600px) {
            .widget-main {
            height: 110px !important;
            }
            }
            .widget-box {
            padding: 8px 8px;
            text-align: center;
            color: black;
            }
            .widget-text {
            font-size: 1vw;
            font-weight: 700;
            }
            .widget-icon-box {
            flex-basis: 12%;
            }
            .no-txt-dec,
            .no-txt-dec:hover {
            text-decoration: none;
            }
            @media (max-width: 600px) {
            .widget-icon-box {
            flex-basis: 25%;
            }
            .widget-text {
            font-size: 3.1vw;
            }
            }
         </style>
         <div class="container p-0">
            <div class=" col-lg-15 col-sm-10 col-10 ml-auto mr-auto shadow widget-main p-0">
               <div class="widget-icon-box p-8">
                  <a href="https://cashkar.in/sell-mobile/" class="no-txt-dec">
                     <div class="widget-box p-3">
                        <img src="https://cashkar.in/images/widget/Sell Mobile.webp" alt="Sell Old iPhone & Mobile Online" class="img-fluid" />
                        <p class="widget-text">Sell Mobile</p>
                     </div>
                  </a>
               </div>
               <div class="widget-icon-box p-8">
                  <a href="https://cashkar.in/sell-ipad-and-tablets/" class="no-txt-dec">
                     <div class="widget-box p-3">
                        <img src="https://cashkar.in/images/widget/Sell Tablet.webp" alt="Sell Old iPad & Tablets Online" class="img-fluid" />
                        <p class="widget-text">Sell Tablet</p>
                     </div>
                  </a>
               </div>
               <div class="widget-icon-box p-8">
                  <a href="mailto:support@cashkar.in" class="no-txt-dec">
                     <div class="widget-box p-3">
                        <img src="https://cashkar.in/images/widget/Sell Laptop.webp" alt="Sell Old Macbook & Laptop Online" class="img-fluid" />
                        <p class="widget-text">Sell Laptop</p>
                     </div>
                  </a>
               </div>
            </div>
            <hr>
            <!-- Service section -->
            <style>
               @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
               .set-mar-s {
               height: 420px;
               }
               .service-badges{
               background-color:var(--black);
               width: fit-content;
               padding:10px 21px;
               border-radius:50%;
               color:Yellow;
               margin-top:13px;
               }
               .strong-heading{
               font-weight:800;
               }
               .border-20-s{
               border-radius:20px!important;
               }
               .service-img {
               height: 220px;
               width: auto;
               }
               .h_t {
               height: 200px;
               }
               .fnt-20{
               font-size:1.53rem;
               }
               .badge-service {
               border-radius: 50%;
               background-color: #fcbd19;
               width: 14px !important;
               padding: 3px 8px;
               font-family: 'Ubuntu', sans-serif;
               font-weight: 400;
               text-align: center;
               }
               .service-section-main>h3,
               .service-section-main>p {
               font-family: 'Ubuntu', sans-serif;
               }
               .service-section-main>h3 {
               font-size: 23px;
               margin-bottom: 12px;
               }
               .heading-s:nth-child(1) {
               text-decoration: underline !important;
               }
               @media(max-width:600px) {
               .fnt-20{
               font-size:1.3rem!important;
               margin-bottom:4px!important;
               }
               .card-text{
               font-size:0.9rem!important;
               }
               .h-set{
               height:150px!important;
               }
               .rm-shadow{
               box-shadow:none!important;
               }
               .mbl-m{
               margin-top:32px!important;
               }
               .service-section-main {
               display: flex;
               justify-content: space-between;
               }
               .border-20-s{
               border-radius:0!important;
               }
               .left {
               flex-basis: 24%;
               }
               .right {
               flex-basis: 72%;
               }
               .service-img {
               width: 100%;
               height: auto;
               }
               .m-0126 {
               margin: 0 !important;
               }
               .heading-s {
               font-size: 5.8vw!important;
               }
               .text-left {
               font-size: 2.7vw;
               }
               .h_t {
               height: 80px;
               }
               }
               @media (min-width:600px) and (max-width:760px) {
               .service-section-main {
               display: flex;
               justify-content: space-between;
               align-items: center;
               }
               .left {
               flex-basis: 25%;
               }
               .right {
               flex-basis: 73%;
               }
               .service-img {
               width: 100%;
               height: auto;
               }
               .m-0126 {
               margin: 0 !important;
               }
               .heading-s {
               font-size: 3.7vw;
               }
               .text-left {
               font-size: 1.5vw;
               }
               }
               @media (min-width:768px) and (max-width:992px) {
               .set-mar-s {
               height: 520px;
               }
               .heading-s {
               font-size: 1.8vw;
               font-weight: 500;
               }
               .text-left {
               font-size: 1.4vw;
               }
               .service-img {
               width: 100%;
               }
               }
               @media(min-width:992px) {
               .badge-service {
               padding: 6.5px 14px;
               }
               .heading-s {
               font-size: 2.1vw;
               }
               }
            </style>
            <div class="testimonials text-center p-0 mt-5">
               <div class="container">
                   <h1 class="text-uppercase text-center p-3" style="font-size:20px;font-weight:500;">
                 Sell used iPhone, iPad, Android Phone & Tablets For Best Price
               </h1>
               <br>
               <br>
                   <h3 style="font-size:30px;font-weight:500;">
                     How Cash Kar Works
                  </h3>
                  <div class="row">
                     <div class="col-md-6 col-lg-4 col-12">
                        <div class="card text-center mt-3" style="border:none!important">
                           <h3 class="font-quicksand service-badges mx-auto">1</h3>
                           <div class="card-body blockquote h-set mb-2 p-0">
                              <h3 class="text-center fnt-20">Book Service</h3>
                              <hr>
                              <p class="card-text">Select your device model, tell us about its condition and our advanced AI will tailor the right price for your old phone as per the market trends.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4 col-12">
                        <div class="card text-center mt-3" style="border:none!important">
                           <h3 class="font-quicksand service-badges mx-auto">2</h3>
                           <div class="card-body blockquote h-set mb-2 p-0">
                              <h3 class="text-center fnt-20">Schedule Pickup</h3>
                              <hr>
                              <p class="card-text">After the value for old mobile satisfies, schedule old mobile pickup as per your convenience and our representative will be there at your service.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4 col-12">
                        <div class="card text-center mt-3" style="border:none!important">
                           <h3 class="font-quicksand service-badges mx-auto">3</h3>
                           <div class="card-body blockquote h-set mb-2 p-0">
                              <h3 class="text-center fnt-20">Get Cash</h3>
                              <hr>
                              <p class="card-text">Cash Kar partner will visit your place and evaluate your old phone. After evaluating your old mobile, instant payment is done.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <!-- testimonial part ends -->
            <!-- why Cashkar  -->
            <div class="testimonials text-center p-5">
               <div class="container">
                  <h3 style="font-size:30px;font-weight:500;">
                     Why Cash Kar
                     <!--<i class="fa fa-question-circle"></i>-->
                  </h3>
                  <div class="row">
                     <div class="col-md-6 col-lg-4 col-12">
                        <div class="card text-center" style="border:none!important">
                           <img src="https://cashkar.in/images/widget/Fast & Reliable Quote.webp" alt="Sell Used Mobile & Tablet Fast For Cash" height="200px" width="200px" class="mx-auto mt-2" />
                           <div class="card-body blockquote h-set">
                              <h3 class="text-center">Fast & Reliable</h3>
                              <p class="card-text">Cashkar is Fast and Best Rated Service To Sell Old Phone & Sell Old Tablet Online.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4 col-12">
                        <div class="card text-center" style="border:none!important">
                           <img src="https://cashkar.in/images/widget/Easy Sell Process.webp" alt="Sell Old iPhone & iPad For Cash Easily" height="200px" width="200px" class="m-auto ico-img" />
                           <div class="card-body blockquote h-set">
                              <h3 class="text-center">Easy Sell Process</h3>
                              <p class="card-text">Just tell us about your mobile phone, answer few questions and there you go. You have a selling price ready.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4 col-12">
                        <div class="card text-center" style="border:none!important">
                           <img src="https://cashkar.in/images/widget/Best Value.webp" alt="Best Price For Old Phone & Tablet" height="200px" width="200px" class="m-auto ico-img" />
                           <div class="card-body blockquote h-set">
                              <h3 class="text-center">Best Quote Always</h3>
                              <p class="card-text">Cash Kar Provides Best Price For Old iPhone, Mobile, iPad & Tablet. Compare Besfore You Sell.
                              </p>
                           </div>
                        </div>
                     </div>
                     <style>
                        .h-set {
                        height: 239px;
                        }
                        .no-outline {
                        outline: none;
                        }
                        .no-outline:click {
                        outline: none;
                        }
                        .ico-img {
                        margin-top: 12px !important;
                        border-radius: 50%;
                        }
                        .pdd-set {
                        padding: 10px 40px;
                        }
                        /*.pdd-set:hover{*/
                        /*    padding:35px;*/
                        /*    transition:0.3s;*/
                        /*    transition-delay: 0.3s ease;*/
                        /*}*/
                        .txt-dec-n,
                        .txt-dec-n:hover,
                        .txt-dec-n:focus {
                        text-decoration: none;
                        color: black;
                        }
                        @media(max-width:600px) {
                        .pdd-set {
                        padding: 8px 15px;
                        }
                        /*    .pdd-set:hover{*/
                        /*    padding:12px;*/
                        /*    transition:0.3s;*/
                        /*    transition-delay: 0.3s ease;*/
                        /*}*/
                        }
                        @media(min-width:600px) and (max-width:768px) {
                        .pdd-set {
                        padding: 30px;
                        }
                        /*    .pdd-set:hover{*/
                        /*    padding:27px;*/
                        /*    transition:0.3s;*/
                        /*    transition-delay: 0.3s ease;*/
                        /*}*/
                        }
                     </style>
                  </div>
               </div>
            </div>
            <hr>
            <!-- including faq-->
            <?php include "faq.php";?>
            <!--faq ends-->
            <hr>
            <!-- testimonials -->
            <!---->
            <!---->
            <div class="testimonials text-center p-4 mt-5">
               <div class="container">
                  <h3 style="font-size:30px;font-weight:500;" class="mb-1">Customer Reviews</h3>
                  <style>
                     #demo {
                     background: linear-gradient(112deg, #ffffff 50%, #fff 50%);
                     max-width: 900px;
                     margin: auto
                     }
                     .review-slider {
                     position: initial;
                     z-index: 10;
                     padding: 5rem 8rem;
                     color: rgba(78, 77, 77, 0.856);
                     text-align: center;
                     font-size: 1.2rem;
                     font-style: italic;
                     line-height: 2rem
                     }
                     @media(max-width:767px) {
                     .review-slider {
                     position: initial;
                     z-index: 10;
                     padding: 3rem 2rem;
                     color: rgba(78, 77, 77, 0.856);
                     text-align: center;
                     font-size: 0.7rem;
                     font-style: italic;
                     line-height: 1.5rem
                     }
                     }
                     .review-slider img {
                     width: 6rem;
                     border-radius: 5rem;
                     margin-top: 2rem
                     }
                     @media(max-width:767px) {
                     .review-slider img {
                     width: 4rem;
                     border-radius: 4rem;
                     margin-top: 1rem
                     }
                     }
                     #image-caption {
                     font-style: normal;
                     font-size: 1rem;
                     margin-top: 0.5rem
                     }
                     @media(max-width:767px) {
                     #image-caption {
                     font-style: normal;
                     font-size: 0.6rem;
                     margin-top: 0.5rem
                     }
                     }
                     @media(max-width:767px) {
                     }
                     .carousel-control-prev {
                     justify-content: flex-start
                     }
                     .carousel-control-next {
                     justify-content: flex-end
                     }
                     .carousel-control-prev,
                     .carousel-control-next {
                     transition: none;
                     opacity: unset
                     }
                  </style>
                  <div class="container">
                     <div id="demo" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="carousel-caption review-slider">
                                 <p>Selling my old phone was just like book service and get cash. Service is fast and convenient. Cash Kar pays best price for your old phone atleast better than others </p>
                                 <img src="https://cashkar.in/images/review/Greson.webp" alt="Cash Kar Review By Mr.Greson">
                                 <div id="image-caption">Greson</div>
                                 <div class="d-flex center col-12">
                                    <img src="https://cashkar.in/images/widget/5 Stars.webp" class="m-0">
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="carousel-caption review-slider">
                                 <p>
                                    Prices are good enough and selling is easy. Don't have to speak to a lot of people, which I found more convenient than OLX. Super easy when it comes to selling your used Phone.
                                 </p>
                                 <img src="https://cashkar.in/images/review/Navin.webp" alt="CashKar Review By Mr.Navin" class="img-fluid">
                                 <div id="image-caption">Navin</div>
                                 <div class="d-flex center col-12">
                                    <img src="https://cashkar.in/images/widget/4 Stars.webp" class="m-0">
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="carousel-caption review-slider">
                                 <p>
                                    I sold my OnePlus 7 at Cash Kar. I got 22000/- which was way far better than offers that i received. Always Cash Out Your Phone At Cash Kar.
                                 </p>
                                 <img src="https://cashkar.in/images/review/Chirag.webp" alt="Cashkar Review By Mr.Chirag" class="img-fluid">
                                 <div id="image-caption">Chirag</div>
                                 <div class="d-flex center col-12">
                                    <img src="https://cashkar.in/images/widget/4.5 Stars.webp" class="m-0">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <?php
               $msg_subs = '';
               include "content/connection.php";
               if (isset($_POST['submit'])) {
                   $email = mysqli_real_escape_string($connect, $_POST['email']);
                   $date = date("M-d-Y");
                   //echo $date;
                   $checkEmail = $connect->prepare("SELECT * FROM `subscriber` where email = ?");
                   $checkEmail->bind_param('s',$email);
                   $checkEmail->execute();
                   $checkEmail->store_result();
                   // $checkQry = mysqli_query($connect, $checkEmail);
                   $checkEmail->num_rows;
                   if ($rowEmail < 0) {
                       $sqlIns = $connect->prepare("INSERT INTO `subscriber`(`email`, `addedON`) VALUES (?,?)");
                       $sqlIns->bind_param('ss',$email,$date);
                       if ($sqlIns->execute()) {
                           $msg_subs = "<p class='text-light'>Thanks for Subscribing.</p>";
                       } else {
                           $msg_subs = "<p class='text-light'>Something went wrong.</p>";
                       }
                   } else {
                       $msg_subs = "<p class='text-light'>Already Subscribed.</p>";
                   }
                   // $sqlIns->close();
                   // $checkEmail->close();
               }
               ?>
            <!--  Newsletter Section -->
            <section id="newsletter" style="margin-bottom: 80px;">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-6">
                        <h3>Subscribe To Tech</h3>
                        <p>We usually talk about phones and if you add your email, we will tell you too.</p>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-lg-6">
                        <form method="POST">
                           <input type="email" name="email" class="no-outline" placeholder="Enter your Email" validate required><input type="submit" name="submit" value="Subscribe">
                        </form>
                        <?php echo $msg_subs; ?>
                     </div>
                  </div>
                  <div class="social-links">
                     <a href="https://www.facebook.com/cashkarindia/"><i class="fab fa-facebook-f"></i></a>
                     <a href="https://twitter.com/cash_kar/"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.linkedin.com/company/gadgetz-co"><i class="fab fa-linkedin-in"></i></a>
                     <a href="https://in.pinterest.com/gadgetzco/"><i class="fab fa-pinterest-p"></i></a>
                     <a href="https://www.youtube.com/channel/UC_KLJFYMI0Vky_XJ9Hr74ug"><i class="fab fa-youtube"></i></a>
                     <a href="https://www.instagram.com/cash_kar/"><i class="fab fa-instagram"></i></a>
                  </div>
               </div>
            </section>
           <?php include "about-us.php"?>
            <br>
            <br>
            <div class="container">
               <div class="abt-2">
                 
                  <h3 style="font-size:30px;font-weight:500;" class="text-center pl-2">
                     People Also Search For
                     </h3>
                     <hr>
                  <div class="abt-content">
                     <p id="people-search-for">
                        <a href="https://cashkar.in/sell-mobile/sell-apple">Sell Old Apple iPhone For Cash</a> | <a href="https://cashkar.in/ipad-and-tablets/sell-apple">Sell Old Apple iPad For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-apple">Sell Used Apple iPhone For Cash</a> | <a href="https://cashkar.in/ipad-and-tablets/sell-apple">Sell Used Apple iPad For Cash</a> | <a href="https://cashkar.in/sell-mobile/">Sell Old Phone Compare Prices</a> | <a href="https://cashkar.in/sell-mobile/sell-samsung">Sell Old Samsung Smartphone For Cash</a> | <a href="https://cashkar.in/ipad-and-tablets/sell-samsung">Sell Old Samsung Smart Tablets For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-samsung">Sell Used Samsung Smartphone For Cash</a> | <a href="https://cashkar.in/ipad-and-tablets/sell-samsung">Sell Used Samsung Smart Tablets For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-xiaomi">Sell Used Xiaomi Mobile For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-xiaomi">Sell Old Xiaomi Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-xiaomi">Sell Old Redmi Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-xiaomi">Sell Used Redmi Mobile Phone For Cash</a> | <a href="https://cashkar.in/">Sell Old Mobile Phone Online For Cash</a> | <a href="https://cashkar.in/">Can I Sell My Old Mobile Phones</a> | <a href="https://cashkar.in/">Sell Old And Buy New Phone</a> | <a href="https://cashkar.in/">Sell Old Phones And Tablets</a> | <a href="https://cashkar.in/">Sell Old Mobile Phones Near Me</a> | <a href="https://cashkar.in/">Sell Old Phone Mumbai</a> I <a href="https://cashkar.in/">Sell Old Phones And iPads</a> | <a href="https://cashkar.in/">Where To Sell Old Phone</a> | <a href="https://cashkar.in/">Sell Old Phone Best Price</a> | <a href="https://cashkar.in/">Best Site To Sell Mobile Phones</a> | <a href="https://cashkar.in/sell-mobile/sell-oppo">Sell Old Oppo Camera Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-vivo">Sell Old Vivo Camera Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-oppo">Sell Used Oppo Camera Smartphone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-vivo">Sell Used Vivo Camera Smartphone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-apple">Sell Apple Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-oneplus">Sell Oneplus Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-samsung">Sell Samsung Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-vivo">Sell Vivo Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-oppo">Sell Oppo Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-nokia">Sell Nokia Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-xiaomi">Sell Xiaomi Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-google">Sell Goole Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-realme">Sell Realme Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-poco">Sell Poco Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-motorola">Sell Motorola Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-huawei">Sell Huawei Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-huawei">Sell Honor Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-asus">Sell Asus Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-coolpad">Sell Coolpad Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-lenovo">Sell Lenovo Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-lg">Sell LG Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-sony">Sell Sony Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-micromax">Sell Micromax Mobile Phone For Cash</a>| <a href="https://cashkar.in/sell-mobile/sell-tecno">Sell Tecno Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-infinix">Sell Infinix Mobile Phone For Cash</a> | <a href="https://cashkar.in/sell-mobile/sell-iqoo">Sell IQOO Mobile Phone For Cash</a>    
                  </div>
                  
               </div>
            </div>
         </div>
         <hr>
         <!-- End newsletter Section-->
         <!-- footer -->
         <?php include "footer.php"; ?>
      </div>
      <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "Cashkar",
  "alternateName": "Cash Kar, Cash-Kar",
  "url": "https://cashkar.in",
  "logo": "https://cashkar.in/images/Cashkar%20Logo.webp",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 9619 09 4503",
    "contactType": "customer service",
    "contactOption": "HearingImpairedSupported",
    "areaServed": "IN",
    "availableLanguage": ["en","Hindi"]
  },
  "sameAs": [
    "https://www.facebook.com/cashkarindia/",
    "https://twitter.com/cash_kar/",
    "https://www.instagram.com/cash_kar/",
    "https://www.youtube.com/channel/UC3oq8mrJP5Wl3vExxeyfATw",
    "https://www.linkedin.com/company/cash-kar",
    "https://in.pinterest.com/cashkar/"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "How to Sell",
    "item": "https://cashkar.in/blogs/how-to-sell-old-mobile-phone-for-best-price-value/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Sell Mobile",
    "item": "https://cashkar.in/sell-mobile/"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Sell Ipads and Tablets",
    "item": "https://cashkar.in/sell-ipad-and-tablets/"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "Sell Your Apple Mobile",
    "item": "https://cashkar.in/sell-mobile/sell-apple"  
  },{
    "@type": "ListItem", 
    "position": 5, 
    "name": "Sell Your Samsung Mobile",
    "item": "https://cashkar.in/sell-mobile/sell-samsung"  
  },{
    "@type": "ListItem", 
    "position": 6, 
    "name": "Sell Your Oneplus Mobile",
    "item": "https://cashkar.in/sell-mobile/sell-oneplus"  
  },{
    "@type": "ListItem", 
    "position": 7, 
    "name": "Sell Iphone X",
    "item": "https://cashkar.in/sell-old-mobile/sell-apple/iphone-x"  
  },{
    "@type": "ListItem", 
    "position": 8, 
    "name": "Sell Your Apple Ipad",
    "item": "https://cashkar.in/ipad-and-tablets/sell-apple"  
  },{
    "@type": "ListItem", 
    "position": 9, 
    "name": "Sell Your Samsung Tablet",
    "item": "https://cashkar.in/ipad-and-tablets/sell-samsung"  
  }]
}
</script>
<!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>