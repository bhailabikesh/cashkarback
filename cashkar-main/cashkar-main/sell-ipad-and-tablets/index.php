<?php
   ob_start();
   include "../content/connection.php";
   // echo $_GET['model'];
   if (isset($_GET['brand'])) {
       $brandName = $_GET['brand'];
       $brandArray = explode('-', $brandName);
       $brandName = $brandArray[1];
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <?php
    //keywords for selected brand of tablets
       include "model-tags.php";
       ?>
       <meta name="keywords" content="<?php echo $tags; ?>">
      <!-- all meta tags start from here -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <meta name="format-detection" content="telephone=no" />
      <meta property="og:image" content="https://cashkar.in/images/feature-img-cashkar.jpg" />
      <meta property="og:title" content="Sell iPad & Tablet Online | Sell used iPad and Tablet For Best Price" />
      <meta property="og:description" content="Sell your iPad & Tablet online and get instant cash. Best price for your old iPad and tablet at Cash Kar. Sell iPad"/>
      <meta property="og:url" content="https://www.cashkar.in/sell-mobile" />
      <meta property="og:type" content="website" />
            <meta property="og:image" content="https://cashkar.in/images/cashkar card image.jpg" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
      <meta property="og:site_name" content="Cashkar" />
      <meta name="description" content="Sell Tablet online. Sell Used <?php echo ucwords($brandName); ?> Tablet at Cash Kar & Get Best Value, Free pickup & Instant Cash." />
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
      <title>Sell Old <?php echo ucwords($brandName); ?> Tablet Online For Cash | Best Price For Used <?php echo ucwords($brandName); ?> Tablet</title>
   </head>
   <body>
      <div class="container-fluid p-0">
         <!-- include header navigation bar -->
         <?php include "../content/menu.php" ?>
         <!-- ends header nagivation bar -->
         <h3 class="p-1 font-size ml-5"><a href="https://cashkar.in/" class="text-dark text-decoration-none">Home </a>>
            <span class="breadCrums"><a href="https://cashkar.in/sell-ipad-and-tablets/" class="text-dark text-decoration-none">Select Brand </a> </span> > <span class="breadCrums"><a href="#" class="text-warning text-decoration-none">Select Model </a> </span>
         </h3>
         <div class="container sell-header-top d-flex flex-column col-lg-6 col-sm-12 mx-auto my-4">
            <div class="heading-txt-sell mt-4 d-flex flex-column font-quicksand">
               <h1 class="text-uppercase font-size-20 text-center">
                  Sell Old <?php echo ucwords($brandName); ?> Tablet Online.
                  <br>
                  Best Price & Instant Cash For Used <?php echo ucwords($brandName); ?> Tablet.
               </h1>
               <br>
               <div class="input-icons">
                  <i class="fa fa-search icon"></i>
                  <input class="input-field" type="search" aria-placeholder="Search Device Model" placeholder="Search Device Model" onkeyup="srchtablets(this.value)">
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
            <div class="row">
               <?php
                  $getModel = "SELECT * FROM model where brand ='$brandName' and isParent = 1 and category = 'ipad/tablets' ORDER BY id desc";
                  $queryGetModel = mysqli_query($connect, $getModel);
                  $rows = mysqli_num_rows($queryGetModel);
                  if ($rows > 0) {
                      $brand4FAQ = $brandName;
                      $brandName = 'sell-'.$brandName;
                      while ($resModel = mysqli_fetch_array($queryGetModel)) {
                          $modelName = $resModel['model_name'];
                          $img = $resModel['img'];
                          $slug = $resModel['slug'];
                          $imgAlt = $resModel['alt'];
                          
                  ?>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2 pr-2 mb-2">
                  <div class="model-box">
                     <a href="https://cashkar.in/sell-old-ipad-tablets/<?php echo $brandName;?>/<?php echo $slug;?>" class="text-decoration-none">
                        <img src="https://cashkar.in/images/model/ipad-tablets/<?php echo $img; ?>" width="100%" height="auto" alt="<?php echo $imgAlt;?>">
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
      <?php include "faq-ipads.php";?>
       <?php include "../top-selling.php";?>
       <?php include "../about-us.php";?>
     <style type="text/css">
       .border-b-2{
         border-bottom: 3px solid var(--yellow);
       }
     </style>
      <?php include "../footer.php";?>
   </body>
</html>
<?php
   } else {
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <?php
       include "../tablets.php";
// keywords for sell tablets home page
       ?>
       <meta name="keywords" content="<?php echo $keywords; ?>">
      <!-- all meta tags start from here -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <meta name="format-detection" content="telephone=no" />
      <meta property="og:title" content="Sell Your Used ipad and tablet For instant Cash | Best Price At Cashkar" />
      <meta property="og:description" content="Sell <?php echo ucwords($brandName); ?> Tablet online. Sell Used <?php echo ucwords($brandName); ?> Tablet at Cash Kar & Get Best Value, Free pickup & Instant Cash." />
      <meta property="og:url" content="https://www.cashkar.in/sell-mobile" />
      <meta property="og:type" content="website" />
      <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
      <meta property="og:site_name" content="Cashkar" />
      <meta name="description" content="Sell <?php echo ucwords($brandName); ?> Tablet online. Sell Used <?php echo ucwords($brandName); ?> Tablet at Cash Kar & Get Best Value, Free pickup & Instant Cash." />
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
      <title>Sell Old iPad & Tablet Online For Instant Cash | Best Price For Used iPad & Tablet At Cashkar</title>
   </head>
   <body>
      <div class="container-fluid p-0">
         <!-- include header navigation bar -->
         <?php include "../content/menu.php" ?>
         <!-- ends header nagivation bar -->
         <h3 class="p-1 font-size ml-5"><a href="https://cashkar.in/" class="text-dark text-decoration-none">Home </a>>
            <span class="breadCrums"><a href="#" class="text-warning text-decoration-none">Select Brand </a> </span>
         </h3>
         <div class="container sell-header-top d-flex flex-column col-lg-6 col-sm-12 mx-auto my-4">
            <div class="heading-txt-sell mt-4 d-flex flex-column font-quicksand">
               <h1 class="text-uppercase font-size-20 text-center">
                  sell used ipad and tablet with ease and get instant cash
               </h1>
               <br>
               <div class="input-icons">
                  <i class="fa fa-search icon"></i>
                  <input class="input-field" type="search" aria-placeholder="Search Device Model" placeholder="Search Device Model" onkeyup="srchtablets(this.value)">
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
            <h3 class="txt-underline text-center mb-4 font-quicksand">Select Brand</h3>
            <div class="row mx-auto" id="searchMbl">
               <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3 d-flex center">
                  <a href="https://cashkar.in/ipad-and-tablets/sell-apple">
                  <img src="https://cashkar.in/sell-mobile/images/brands/Apple.png" class="brand-img" alt="Sell Used Apple iPad For Cash">
                  </a>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3 d-flex center">
                  <a href="https://cashkar.in/ipad-and-tablets/sell-samsung">
                  <img src="https://cashkar.in/sell-mobile/images/brands/Samsung.png" class="brand-img" alt="Sell Used Samsung Tablet For Cash">
                  </a>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3 d-flex center">
                  <a href="https://cashkar.in/ipad-and-tablets/sell-huawei">
                  <img src="https://cashkar.in/sell-mobile/images/brands/Hua Honor.png" class="brand-img" alt="Sell Used Honor/Huawei Tablet For Cash">
                  </a>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3 d-flex center">
                  <a href="https://cashkar.in/ipad-and-tablets/sell-lenovo">
                  <img src="https://cashkar.in/sell-mobile/images/brands/Lenovo.png" class="brand-img" alt="Sell Used Lenovo Tablet For Cash">
                  </a>
               </div>
            </div>
         </div>
      </div>
    <?php include "faq-ipads.php";?>
       <?php include "../top-selling.php";?>
       <?php include "../about-us.php";?>
      <?php include "../footer.php";?>
   </body>
</html>
<?php
   }
   
   ?>