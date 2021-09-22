<!-- Header start --><?php session_start(); ?>
<?php 
ob_start();
include "./content/connection.php";
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
<?php include "./partials/header.php" ?>
<!-- Header end -->

<!-- ========== Slider ========== -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      <div class="text-right carousel-caption top-25">
        <h5>Sell Your <br><span>Mobile Phone Online</span></h5>
        <!-- <p>Some representative placeholder content for the first slide.</p> -->
        <a href="#">Sell Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="...">
      <div class="text-right carousel-caption top-25">
        <h5>Sell Your <br><span>Mobile Phone Online</span></h5>
        <!-- <p>Some representative placeholder content for the first slide.</p> -->
        <a href="#">Sell Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="...">
      <div class="text-right carousel-caption top-25">
        <h5>Sell Your <br><span>Mobile Phone Online</span></h5>
        <!-- <p>Some representative placeholder content for the first slide.</p> -->
        <a href="#">Sell Now</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ========== End of Slider ========== -->

<!-- ========== Main Content ========== -->

<!-- ========== Category ========== -->
<section class="category">
    <div class="container">
        <div class="section-title">
            <h1 class="section-title__heading">What would you like to sell today?</h1>
        </div>

        <div class="row">
            <div class="mx-auto mb-4 col-lg-4 col-xs-6 col-6">
                <a href="https://cashkar.in/sell-mobile/">
                    <div class="border-0 card category__card">
                        <img src="img/SellMobile.webp" alt="" class="category__card--img">
                        <div class="card-body">
                            <h3 class="category__card--title">Mobile Phone</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="mx-auto mb-4 col-lg-4 col-xs-6 col-6">
                <a href="https://cashkar.in/sell-ipad-and-tablets/">
                    <div class="border-0 card category__card">
                        <img src="img/SellTablet.webp" alt="" class="category__card--img">
                        <div class="card-body">
                            <h3 class="category__card--title">iPad/Tablet</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="mx-auto mb-4 col-lg-4 col-xs-6 col-6">
                <a href="mailto:support@cashkar.in">
                    <div class="border-0 card category__card">
                        <img src="img/SellLaptop.webp" alt="" class="category__card--img">
                        <div class="card-body">
                            <h3 class="category__card--title">Laptop</h3>
                        </div>
                    </div>
                </a>
            </div>

            <!--<div class="mx-auto mb-4 col-lg-4 col-xs-6 col-6">-->
            <!--    <a href="#">-->
            <!--        <div class="border-0 card category__card">-->
            <!--            <img src="img/SellMobile.webp" alt="" class="category__card--img">-->
            <!--            <div class="card-body">-->
            <!--                <h3 class="category__card--title">Desktop</h3>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->

            <!--<div class="mx-auto mb-4 col-lg-4 col-xs-6 col-6">-->
            <!--    <a href="#">-->
            <!--        <div class="border-0 card category__card">-->
            <!--            <img src="img/SellTablet.webp" alt="" class="category__card--img">-->
            <!--            <div class="card-body">-->
            <!--                <h3 class="category__card--title">Smart Watch</h3>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->

            <!--<div class="mx-auto mb-4 col-lg-4 col-xs-6 col-6">-->
            <!--    <a href="#">-->
            <!--        <div class="border-0 card category__card">-->
            <!--            <img src="img/SellLaptop.webp" alt="" class="category__card--img">-->
            <!--            <div class="card-body">-->
            <!--                <h3 class="category__card--title">DSLR Camera</h3>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            
        </div>
    </div>
</section>
<!-- ========== End of Category ========== -->

<!-- ========== Steps ========== -->
<section class="step">
    <div class="container">
        <div class="section-title">
            <h1 class="section-title__heading">How Cash Kar Works?</h1>
        </div>

        <div class="row">
            <div class="mx-auto my-5 col-lg-4 col-sm-6 col-10">
                <div class="border-0 card step__card">
                    <div class="step__card--icon">
                        <i class="fas fa-mobile"></i>
                    </div>
                    <div class="card-body">
                        <h2 class="step__card--title">Book Service</h2>
                        <p class="step__card--description">
                            Select your device model, tell us about its condition and our advanced AI will tailor the right price for your old phone as per the market trends.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto my-5 col-lg-4 col-sm-6 col-10">
                <div class="border-0 card step__card">
                    <div class="step__card--icon">
                        <i class="fas fa-truck-pickup"></i>
                    </div>
                    <div class="card-body">
                        <h2 class="step__card--title">Schedule Pickup</h2>
                        <p class="step__card--description">
                            After the value for old mobile satisfies, schedule old mobile pickup as per your convenience and our representative will be there at your service.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto my-5 col-lg-4 col-sm-6 col-10">
                <div class="border-0 card step__card">
                    <div class="step__card--icon">
                        <i class="fas fa-money-check"></i>
                    </div>
                    <div class="card-body">
                        <h2 class="step__card--title">Get Cash</h2>
                        <p class="step__card--description">
                            Cash Kar partner will visit your place and evaluate your old phone. After evaluating your old mobile, instant payment is done. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End of Steps ========== -->

<!-- ========== Choose ========== -->
<section class="choose">
    <div class="container">
        <div class="section-title">
            <h1 class="section-title__heading">Why Cash Kar?</h1>
        </div>

        <div class="row">
            <div class="mx-auto mb-4 col-lg-4 col-md-6 col-10">
                <div class="border-0 card choose__card">
                    <div class="choose__card--img">
                        <img src="img/choose1.webp" alt="" class="img-fluid card-img">
                    </div>

                    <div class="card-body">
                        <h3 class="choose__card--title">Fast & Reliable</h3>
                        <p class="choose__card--description">
                            Cashkar is Fast and Best Rated Service To Sell Old Phone & Sell Old Tablet Online.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto mb-4 col-lg-4 col-md-6 col-10">
                <div class="border-0 card choose__card">
                    <div class="choose__card--img">
                        <img src="img/choose2.webp" alt="" class="img-fluid card-img">
                    </div>

                    <div class="card-body">
                        <h3 class="choose__card--title">Easy Sell Process</h3>
                        <p class="choose__card--description">
                            Just tell us about your mobile phone, answer few questions and there you go. You have a selling price ready.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto mb-4 col-lg-4 col-md-6 col-10">
                <div class="border-0 card choose__card">
                    <div class="choose__card--img">
                        <img src="img/choose3.webp" alt="" class="img-fluid card-img">
                    </div>

                    <div class="card-body">
                        <h3 class="choose__card--title">Best Quote Always</h3>
                        <p class="choose__card--description">
                            Cash Kar Provides Best Price For Old iPhone, Mobile, iPad & Tablet. Compare Besfore You Sell.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End of Choose ========== -->

<!-- ========== FAQs ========== -->
<section class="faq" id="faq">
    <div class="container" >
        <div class="section-title">
            <h1 class="section-title__heading">FAQs</h1>
        </div>

        <div class="row">
            <div class="mx-auto mb-4 col-10">
                <div class="accordion" id="faqExample">
                    <div class="card">
                        <div class="card-header" id="faqOne">
                            <h2 class="mb-0">
                                <button class="text-left btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne">
                                    Q: When Will I Get Paid?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="faqOne" data-parent="#faqExample">
                            <div class="card-body">
                                <strong>Answer:</strong>
                                When You Sell Your Old Phone At Cash Kar You Get Paid Instantly. Also Your Phone Is Sold As Per Your Convinience Without Any Hassles.
                            </div>
                        </div>
                    </div>

                    <!-- Single card -->
                    <div class="card">
                        <div class="card-header" id="faqTwo">
                            <h2 class="mb-0">
                                <button class="text-left btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                    Q: Why Should I Sell My Gadget To Cash Kar?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="faqTwo" data-parent="#faqExample">
                            <div class="card-body">
                                <strong>Answer:</strong>
                                Cash-Kar is one of the best and highest paying services for your old smartphones and tablets. Before selling your old phone or iPad elsewhere try <a href="#">www.cashkar.in.</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single card -->

                    <!-- Single card -->
                    <div class="card">
                        <div class="card-header" id="faqThree">
                            <h2 class="mb-0">
                                <button class="text-left btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseThree">
                                    Q: Where To Sell Old Mobile Phone
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="faqThree" data-parent="#faqExample">
                            <div class="card-body">
                                <strong>Answer:</strong>
                                You can sell your Old mobile phone or tablet online. Try <a href="#">www.cashkar.in</a> and you won't regret it
                            </div>
                        </div>
                    </div>
                    <!-- End of Single card -->

                    <!-- Single card -->
                    <div class="card">
                        <div class="card-header" id="faqFour">
                            <h2 class="mb-0">
                                <button class="text-left btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseFour">
                                    Q: Is It Safe To Sell Gadget Online?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="faqFour" data-parent="#faqExample">
                            <div class="card-body">
                                <strong>Answer:</strong>
                                Cash Kar is one of the safest marketplace to sell your old used mobile devices. A bill is given to you as a proof of sale and also your data is wiped off during collection of device.
                            </div>
                        </div>
                    </div>
                    <!-- End of Single card -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End of FAQs ========== -->

<!-- ========== Testimonials  ========== -->
<section class="testimonial">
    <div class="container">
        <div class="section-title">
            <h1 class="section-title__heading">Testimonial</h1>
        </div>

        <div class="testimonial__carousel">
            <div class="owl-carousel owl-theme testimonial__carousel--theme items-container">
                <div class="item">
                    <div class="border-0 card testimonial__card" data-mh="my-group">
                        <div class="p-5 card-body">
                            <div class="mt-4 media">
                                <img src="img/client1.png" class="mr-2 testimonial__img" alt="...">
                                <div class="media-body">
                                <h4 class="mt-0 testimonial__client">Greson</h4>
                                <!-- <h5 class="testimonial__client-position">broker</h5> -->
                                </div>
                            </div>
                            <p class="card-description testimonial__description">
                                Selling my old phone was just like book service and get cash. Service is fast and convenient. Cash Kar pays best price for your old phone atleast better than others
                            </p>
                            <div class="mb-4 testimonial__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="border-0 card testimonial__card" data-mh="my-group">
                        <div class="p-5 card-body">
                            <div class="mt-4 media">
                                <img src="img/client2.png" class="mr-2 testimonial__img" alt="...">
                                <div class="media-body">
                                <h4 class="mt-0 testimonial__client">Navin</h4>
                                <!-- <h5 class="testimonial__client-position">happy seller</h5> -->
                                </div>
                            </div>
                            <p class="card-description testimonial__description">
                                Prices are good enough and selling is easy. Don't have to speak to a lot of people, which I found more convenient than OLX. Super easy when it comes to selling your used Phone.
                            </p>
                            
                            <div class="mb-4 testimonial__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="border-0 card testimonial__card" data-mh="my-group">
                        <div class="p-5 card-body">
                            <div class="mt-4 media">
                                <img src="img/client3.png" class="mr-2 testimonial__img" alt="...">
                                <div class="media-body">
                                <h4 class="mt-0 testimonial__client">Chirag</h4>
                                <!-- <h5 class="testimonial__client-position">developer</h5> -->
                                </div>
                            </div>
                            <p class="card-description testimonial__description">
                                I sold my OnePlus 7 at Cash Kar. I got 22000/- which was way far better than offers that i received. Always Cash Out Your Phone At Cash Kar.
                            </p>
                            
                            <div class="mb-4 testimonial__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="border-0 card testimonial__card" data-mh="my-group">
                        <div class="p-5 card-body">
                            <div class="mt-4 media">
                                <img src="img/client2.png" class="mr-2 testimonial__img" alt="...">
                                <div class="media-body">
                                <h4 class="mt-0 testimonial__client">Navin</h4>
                                <!-- <h5 class="testimonial__client-position">happy seller</h5> -->
                                </div>
                            </div>
                            <p class="card-description testimonial__description">
                                Prices are good enough and selling is easy. Don't have to speak to a lot of people, which I found more convenient than OLX. Super easy when it comes to selling your used Phone.
                            </p>
                            
                            <div class="mb-4 testimonial__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End of Testimonials  ========== -->
<?php
               $msg_subs = '';
               include "./content/connection.php";
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
<!-- ========== Subscribe  ========== -->
<section class="subscribe">
    <div class="container">
        <div class="section-title">
            <h1 class="section-title__heading">Subscribe</h1>
            <p class="section-title__description">
                We usually talk about phones and if you add your email we will tell you too.
            </p>
        </div>

        <div class="row">
            <form action="#" class="mx-auto subscribe__form">
                <input type="text" class="subscribe__input" placeholder="Your Email Address*">
                <button class="subscribe__button">
                    Subscribe
                </button>
            </form>
        </div>
<!-- ========== End of Subscribe  ========== -->
        <div class="row">
            <div class="mx-auto subscribe__social-links">
                <a href="https://www.facebook.com/cashkarindia/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/cash_kar/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/cash-kar/"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/cash_kar/"><i class="fab fa-instagram"></i></a>
            </div>
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


<!-- ========== End of Main Content ========== -->

<!-- ========== Footer ========== -->
<?php include "./partials/footer.php" ?>
<!-- ========== End of Footer ========== -->
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