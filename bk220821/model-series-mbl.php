<?php 
include "content/connection.php";
if (isset($_GET['series'])) {
       $seriesName = $_GET['series'];
       $seriesName = preg_replace('/[^a-z0-9]+/i', ' ', trim(strtolower($seriesName)));
    //   $brandArray = explode('-', $seriesName);
    //   $seriesName = $brandArray[1];
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
              <?php
    //   include "model-tags.php";
       ?>
        <!-- keyword for selected brands -->
        <!--<meta name="keywords" content="<?php //echo $tags; ?>">-->
      <!-- all meta tags start from here -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <meta name="format-detection" content="telephone=no" />
      <meta property="og:image" content="https://cashkar.in/images/feature-img-cashkar.jpg" />
      <meta property="og:title" content="Sell Used Old Mobile Phone Online | Best Price For Used <?php echo ucwords($seriesName); ?> Mobile Phone | Cash-Kar" />
      <meta property="og:description" content="Sell your used <?php echo ucwords($seriesName); ?> mobile online. Sell old <?php echo ucwords($seriesName); ?> phone and get instant cash." />
      <meta property="og:url" content="https://www.cashkar.in/sell-mobile" />
      <meta property="og:type" content="website" />
            <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
      <meta property="og:site_name" content="Cashkar" />
      <meta name="description" content="Sell <?php echo ucwords($seriesName); ?> phone online. Sell Used <?php echo ucwords($seriesName); ?> Mobile at Cash Kar & Get Best Value, Free pickup & Instant Cash." />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- meta tags ends here -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- links for css start here -->
      <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
      <link rel="stylesheet" href="https://cashkar.in/css/home-page.css">
      <link rel="stylesheet" href="https://cashkar.in/css/sell-phone.css">
      <script src="https://cashkar.in/js/main.js"></script>
      <style>
         .input-icons i {
         position: absolute;
         }
         .input-icons {
         width: 100%;
         margin-bottom: 10px;
         }
         .icon {
         padding: 10px;
         min-width: 40px;
         }
         .input-field {
         align-self: center;
         width: 100%;
         padding: 6.3px;
         text-align: center;
         border-radius: 12px;
         border: 1px solid gray;
         outline: none;
         color: darkgray;
         }
      </style>
      <title>Sell <?php echo ucwords($seriesName); ?> Online | Best Price For Used <?php echo ucwords($seriesName); ?> Phone</title>
   </head>
   <body>
      <div class="container-fluid p-0">
         <!-- include header navigation bar -->
         <?php include "content/menu.php" ?>
         <!-- ends header nagivation bar -->
         <h3 class="p-1 font-size ml-5"><a href="https://cashkar.in/" class="text-dark text-decoration-none">Home </a>>
            <span class="breadCrums"><a href="https://cashkar.in/sell-mobile" class="text-dark text-decoration-none">Select Brand </a> </span> > <span class="breadCrums"><a href="#" class="text-warning text-decoration-none">Select Model </a> </span>
         </h3>
         <div class="container sell-header-top d-flex flex-column col-lg-6 col-sm-12 mx-auto my-4">
            <div class="heading-txt-sell mt-4 d-flex flex-column font-quicksand">
               <h1 class="text-uppercase font-size-20 text-center">
                  Sell <?php echo ucwords($seriesName); ?> Online.
                  <br>
                  Best Price & Instant Cash For Used <?php echo ucwords($seriesName); ?> Phone.
               </h1>
               <br>
               <div class="input-icons">
                  <i class="fa fa-search icon"></i>
                  <input class="input-field" type="search" aria-placeholder="Search Device Model" placeholder="Search Device Model" onkeyup="srchmbl(this.value)">
                  <!--Drop down for search -->
                  <div class="col-12 mt-4 shadow col-sm-12 col-12 ml-auto" id="searchMbl" style="position:relative;z-index:99999; background-color:#f4f5f8; border:1px solid #D0D0D0;display:none;">
                  </div>
                  <script>
                     //script to hide search result box when click outside
                     window.onload = function(){
                     var hideMe = document.getElementById('searchMbl');
                     // hideMe.style.display = 'none';
                     
                     document.onclick = function(e){
                     if(e.target.id == 'searchMbl'){
                     hideMe.style.display = 'block';
                     }else{
                     hideMe.style.display = 'none';
                     }
                     };
                     };
                  </script>
               </div>
            </div>
         </div>
         <div class="container">
            <h3 class="txt-underline text-center mb-4 font-quicksand">Select Model</h3>
            <div class="row" style="justify-content:center;">
               <?php
                  $getModel = "SELECT * FROM model where series ='$seriesName' and isParent = 1 and category = 'mobile' ORDER BY id desc";
                  $queryGetModel = mysqli_query($connect, $getModel);
                  $rows = mysqli_num_rows($queryGetModel);
                  //$brndName =$seriesName;
                  if ($rows > 0) {
                      $brand4FAQ = ucfirst($seriesName);
                      
                      while ($resModel = mysqli_fetch_array($queryGetModel)) {
                          $modelName = $resModel['model_name'];
                          $img = $resModel['img'];
                          $slug = $resModel['slug'];
                        $alt = $resModel['alt'];
                        $brandName = $resModel['brand'];
                        $brandName = 'sell-'.strtolower($brandName);
                  ?>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2 pr-2 mb-2">
                  <div class="border model-box">
                     <a href="https://cashkar.in/sell-old-mobile/<?php echo $brandName;?>/<?php echo $slug;?>" class="text-decoration-none">
                        <img src="https://cashkar.in/images/model/mobile/<?php echo $img; ?>" width="100%" height="auto" alt="<?php echo $alt; ?>">
                        <h3 class="text-center model_name-txt"><?php echo $modelName; ?></h3>
                     </a>
                  </div>
               </div>
               <?php
                  }
                  }
                  ?>
            </div>
         </div>
      </div>
      <!-- including faq-->
         <?php include "faq-mobile.php";?>
         <!--faq ends-->
      <!--about us starts-->
    
     <?php include "about-us.php";?>
     <?php include "../top-selling-mbl.php";?>
  <!--about us ends-->
     
      <?php include "footer.php";?>
   </body>
</html>
<?php
   }
   ?>