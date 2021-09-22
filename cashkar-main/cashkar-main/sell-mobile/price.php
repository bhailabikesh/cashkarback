<?php
   ob_start();
   session_start();
   include "../content/connection.php";
   // echo $_GET['model'];
   if (!(isset($_GET['brand']) and isset($_GET['model']))) {
       header("location:https://cashkar.in/sell-mobile/");
   } else {
       $modelSlug = $_GET['model'];
       $brandName = explode('-', $_GET['brand']);
       $brandName = $brandName[1];
       $modelNameTxt = explode('-', $_GET['model']);
       for ($i = 0; $i < count($modelNameTxt); $i++) {
         
           $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
        //   echo $i;
       }
   }
   $dsc = '';
   if(isset($_GET['question'])){
       $dsc = "Select Device Condition and";
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <?php
    //   include "../keywords.php";
         $getModel = "SELECT * FROM model where (brand ='$brandName' and slug = '$modelSlug') and category = 'mobile' ORDER BY id desc";
                  $queryGetModel = mysqli_query($connect, $getModel);
                  $resModel = mysqli_fetch_array($queryGetModel);
                  $tags = $resModel['Tags'];
                  $isParent = $resModel['isParent'];
                  $modelCode = $resModel['modelCode'];
                  $modelNameFAQ = $resModel['model_name'];
                  $modelKeywords = explode('/', $tags);
                  $tags = $modelKeywords[0].' '.$modelName.' '.$modelKeywords;
       ?>
        <meta name="keywords" content="<?php echo $tags; ?>">
      <!-- all meta tags start from here -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <meta name="format-detection" content="telephone=no" />
      <meta property="og:image" content="https://cashkar.in/images/feature-img-cashkar.jpg" />
      <?php 
      if($isParent == '1'){
          // for base model
          ?>
          <meta property="og:title" content="Sell Used <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
         }
         ?> Online For Best Price | Sell Used Mobile Phone At Cashkar" />
               <meta property="og:description" content="<?php echo $dsc;?>Sell your<?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
         }
         ?>online and get instant cash. Get best price for used <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
         }
         ?> and free home pickup when you sell your used mobile phone at cashkar." />
               <meta name="description" content="<?php echo $dsc;?>Sell your used <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             if($i > 0){
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
             }
         }
         ?>online and get instant cash. Get best price for used <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             if($i > 0){
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
             }
         }
         ?> and free home pickup when you sell your used mobile phone at cashkar." />
          <?php  
      if(isset($_GET['question'])){
          // for questin part
          ?>
          <title>Sell <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
             
         }
         ?> Online | Sell Old Phone For Cash</title>
          <?php
          
      }else{
      ?>
      <title>Sell Old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             if($i > 0){
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
             }
         }
         ?> Online | Best Price For Used Mobile Phone</title>
         <?php } ?>
          <?php
      }else{
          // for variant model
          ?>
          <meta property="og:title" content="Sell Old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
         }
         ?> Online For Best Price | Sell Old Phone At Cashkar" />
               <meta property="og:description" content="<?php echo $dsc;?>Sell old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
         }
         ?>online and get instant cash. Get best price for old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
         }
         ?> and free home pickup. Sell your old phone at cashkar." />
               <meta name="description" content="<?php echo $dsc;?>Sell your old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             if($i > 0){
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
             }
         }
         ?>online and get instant cash. Get best price for old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             if($i > 0){
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
             }
         }
         ?> and free home pickup. Sell your old phone at cashkar." />
          <?php  
      if(isset($_GET['question'])){
          ?>
          <title>Sell Old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
         }
         ?> Online | Sell Old Phone At Cash Kar</title>
          <?php
          
      }else{
      ?>
      <title>Sell Old <?php
         $modelNameTxt = explode('-', $_GET['model']);
         for ($i = 0; $i < count($modelNameTxt); $i++) {
            if($i > 0){
             echo $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
             }
         }
         ?> For Cash | Best Price For Old Phone At Cashkar</title>
         <?php } 
      }
      ?>
      
      <meta property="og:url" content="https://www.cashkar.in/sell-mobile" />
      <meta property="og:type" content="website" />
            <meta property="og:image" content="https://cashkar.in/images/cashkar card image.jpg" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.jpg" type="image/x-icon">
      <meta property="og:site_name" content="Cashkar" />

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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
     
   </head>
   <body>
      <div class="container-fluid p-0">
         <!-- include header navigation bar -->
         <?php include "../content/menu.php" ?>
         <!-- ends header nagivation bar -->
      </div>
      <?php
         if (!(isset($_GET['question']))) {
         ?>
      <div class="container p-0">
         <h3 class="txt-underline p-1 font-size">
             <a href="https://cashkar.in" class="text-decorataion-none text-dark">
                 Home</a> >
                <span class="breadCrums"><a href="https://cashkar.in/sell-mobile" class="text-decorataion-none text-dark">Select Brand </a></span> > <span class="breadCrums"><a href="https://cashkar.in/sell-mobile/<?php echo $_GET['brand'];?>" class="text-decorataion-none text-dark">Select Model </a></span>><span class="breadCrums"> Select Variant</span>
         </h3>
         <div class="col-12 mx-auto mt-5 row">
            <?php
               $getModelData = "SELECT * FROM model where slug = '$modelSlug' and brand = '$brandName'";
               $queryModelData = mysqli_query($connect, $getModelData);
               if (mysqli_num_rows($queryModelData) > 0) {
                   $storeData = mysqli_fetch_array($queryModelData);
                   $img = $storeData['img'];
                   $alt = $storeData['alt'];
                   $modelName = $storeData['model_name'];
                   $price = $storeData['price'];
                   $modelId = $storeData['id'];
                   $modelCode = $storeData['modelCode'];
                   $selectStorage = $storeData['storage'];
                   $selectRam = $storeData['ram'];
                  if($selectRam != ''){
                       $selectStorage = $selectRam.'/'.$selectStorage;
                  }
                   
               ?>
            <div class="col-lg-4 col-md-4 col-sm-12 p-1">
               <img src="https://cashkar.in/images/model/mobile/<?php echo $img; ?>" alt="<?php echo $alt; ?>" class="img-fluid">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 p-0">
               <div class="col-lg-11 col-sm-12 m-auto p-0">
                  <h1 class="text-center mb-3 sell-heading"><?php echo 'Sell ' . $modelName . '.' . '<br> ' . ' Get Best Price & Instant Cash'; ?></h1>
                  <div class="d-flex center flex-wrap m-auto row p-0">
                     <?php
                        $getModelData = "SELECT * FROM model where modelCode = '$modelCode' and brand = '$brandName'";
                        $queryModelData = mysqli_query($connect, $getModelData);
                        if (mysqli_num_rows($queryModelData) > 0) {
                        ?>
                     <div class="col-12">
                         <ul class="storage-selector-list">
                            <?php 
                            while($resModelData = mysqli_fetch_array($queryModelData)){
                                 $storageSize = $resModelData['storage'];
                                $ram = $resModelData['ram'];
                                $urlModel = $resModelData['slug'];
                                if ($ram == '') {
                                    $internalStorage = $storageSize;
                                    $showStorage = $storageSize . 'GB';
                                }else {
                                    $internalStorage = $ram.'/'.$storageSize;
                                    $showStorage = $ram . 'GB/' . $storageSize . 'GB';
                                }
                            ?>
                            <li class="shadow" id="<?php echo $internalStorage;?>"><strong><a href="https://cashkar.in/sell-old-mobile/sell-<?php echo $brandName.'/'.$urlModel;?>" class="text-decoration-none btn-active-link"><?php echo $showStorage;?></a></strong></li>
                           <?php
                        }
                        
                        ?>
                        </ul>
                        <style>.storage-selector-list {list-style: none;display:flex;justify-content:center;}.storage-selector-list>li {display:flex;align-items:center;margin: 0.25rem;padding:8px 0px;width:fit-content;background:#eee;outline:none;cursor: pointer;border-radius:10px;}.storage-selector-list>li>strong>a{padding:14.4px 28.6px;}.active-selected-storage{border: 2px solid #b3d01e!important;}.btn-active-link, btn-active-link:hover{color:unset!important;}</style>
                     </div>
                     <?php
                        }
                        $_SESSION['MODEL_ID'] = $modelId;
                        $slugBrand = 'sell-'.$brandName;
                         ?>
                  </div>
                  <h3 class="text-center my-3">Get Up to:</h3>
                  <h3 class="text-center my-3 font-oswald price-txt"><i class="fa fa-inr price-txt"></i> <span id="price-txt"><?php echo $price; ?></span>*</h3>
                  <center>
                     <a href="https://cashkar.in/sell-old-mobile/<?php echo $slugBrand;?>/<?php echo $modelSlug;?>/1">
                     <button class="btn-value btn-active p-3 text-btn mr-3 border-radius-15" onclick="">Get Accurate Value</button>
                     </a>
                  </center>
               </div>
            </div>
            <?php } else {
               } ?>
         </div>
      </div>
      <script>
         function checkVariantPrice(data) {
            //  // alert(data);
             var ajaxVariationSwitch = new XMLHttpRequest();
             ajaxVariationSwitch.open('GET', 'https://cashkar.in/ajax/variationChangePrice.php?brand=<?php echo $brandName; ?>&mCode=<?php echo $modelCode; ?>&brandStorage=' + data, 'TRUE');
             ajaxVariationSwitch.send();
             ajaxVariationSwitch.onreadystatechange = function() {
                 if (ajaxVariationSwitch.readyState == 4 && ajaxVariationSwitch.status == 200) {
                    //  document.querySelector('#price-txt').innerHTML = ajaxVariationSwitch.responseText;
                     window.location.href = 'https://cashkar.in/sell-old-mobile/sell-<?php echo $brandName;?>/'+ajaxVariationSwitch.responseText;
                 }
             };
            
         }
      </script>
      <!-- question section starts -->
      <?php
         } else {
             // question first starts
             if ($_GET['question'] === '1') {
             ?>
      <script>window.onload = function() {var checkAccessories = new XMLHttpRequest();checkAccessories.open("GET", "https://cashkar.in/ajax/does-switchon.php?setSession=false&unset=all", "TRUE");checkAccessories.send();}</script>
      <div class="container">
         <div class="col-lg-10 col-sm-12 mx-auto mt-4">
            <h1 class="text-center mb-4 ttl-fit">Selling Your <?php $modelNameTxt = explode('-', $_GET['model']);
       for ($i = 0; $i < count($modelNameTxt); $i++) {
         echo  $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
       } ?></h1>
            <h3 class="text-center mb-4 font-quicksand" style="font-weight:600;color:var(--orange)">Does Your Device Switch on Successfully <i class="fa fa-quote-left fa-1x fa-border" aria-hidden="true"></i></h3>
            <div class="row my-2 d-flex center">
               <div class="col-lg-4 col-sm-4 col-6 d-flex center">
                  <button value="yes" type="button" id="section1-q1" class="mb-2 btn-value btn-price px-5 py-2 text-btn mr-3 border-radius-15 border-black-2" onclick="doesSwitchOnTrue(this.value);">
                  Yes
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
               </div>
               <div class="col-lg-4 col-sm-4 col-6 d-flex center">
                  <button value="no" type="button" id="section1-q2" class="mb-2 btn-value btn-price px-5 py-2 text-btn mr-3 border-radius-15 border-black-2" onclick="doesSwitchOnFalse(this.value);">
                  No
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
               </div>
            </div>
            <h3 class="text-center my-4 con-txt-al">If you select 'Yes', Please make sure your device meets below expactions</h3>
            <div class="row" id="properties">
               <div class="col-lg-8 col-sm-3 col-12 m-auto p-3 border-dashed">
                  <div class="container-fluid">
                     <ul class="mb-0">
                        <li class="">Device must be able to make and recive calls.</li>
                        <li class="">Should not have Brand/ Cloud/ Password lock.</li>
                        <li class="">IMEI/Serial No. should be authentic.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!--<div class="col-10 d-flex right-center mt-4 pt-3">-->
         <!--   <button class="btn btn-warning" id="nxt" disabled> Next >> </button>-->
         <!--</div>-->
      </div>
      <?php } ?>
      <!-- ends question first -->
      <!-- starts question second -->
      <?php
         if ($_GET['question'] === '2') {
             if(isset($_SESSION['DOES-SWITCH-ON']) && $_SESSION['DOES-SWITCH-ON'] === 'no'){
                 header("location://cashkar.in/sorry");
             }
         ?>
      <script>
         window.onload = function() {
             var checkAccessories = new XMLHttpRequest();
             checkAccessories.open("GET", "https://cashkar.in/ajax/screenCondition.php?setSession=false&unset=all", "TRUE");
             checkAccessories.send();
         
         }
      </script>
      <div class="container">
         <div class="col-lg-10 col-sm-12 mx-auto mt-4">
            <h1 class="text-center mb-4 ttl-fit">Selling Your <?php $modelNameTxt = explode('-', $_GET['model']);
       for ($i = 0; $i < count($modelNameTxt); $i++) {
         echo  $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
       } ?></h1>
            <div>
            <h3 class="text-center mb-4 font-quicksand" style="font-weight:600;color:var(--orange)">Select Screen Condition <i class="fa fa-quote-left fa-1x fa-border" aria-hidden="true"></i></h3>
            <div class="row center">
               <div class="col-lg-3 col-sm-3 col-6 mx-auto mb-3 d-flex center">
                  <button value="8" type="button" id="section2-q1" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="screenConditon1(this.value);">
                  Flawless Screen (Like New Screen)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-2">What's this?</p>-->
               </div>
               <div class="col-lg-3 col-sm-4 mx-auto mb-3 col-6 d-flex center flex-column">
                  <button value="12" type="button" id="section2-q2" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="screenConditon2(this.value);">
                  Scratches On Screen (Visible Scratches On Screen)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-2">What's this?</p>-->
               </div>
               <div class="col-lg-3 col-sm-4 mx-auto mb-3 col-6  d-flex center">
                  <button value="11" type="button" id="section2-q3" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="screenConditon3(this.value);">
                  Cracked Screen (Crack On Screen/ Broken Screen)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-2">What's this?</p>-->
               </div>
               <div class="col-lg-3 col-sm-4 col-6 mx-auto mb-2 d-flex center">
                  <button value="9" type="button" id="section2-q4" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="screenConditon4(this.value);">
                  Faulty Screen (Lines/ Spots/ Blank Display/ Non-working Touch)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-2">What's this?</p>-->
               </div>
            </div>
            <div class="row" hidden id="properties">
               <div class="col-lg-3 col-sm-3 col-6 m-auto p-3 border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Scratch-less Screen</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 m-auto col-6 border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Scratches on Screen</li>
                        <li>Scratches on Corners</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 m-auto col-6 m-auto border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Screen Cracked</li>
                        <li>Glass Broken</li>
                        <li>Cracks on edges</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 m-auto border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Device's Touch Screen Faulty</li>
                        <li>Dead Pixels/spots on Screen</li>
                        <li>Visible lines on screen</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- next and previous button -->
            <div class="col-11 d-flex  mt-3 mx-auto pt-2">
               <button class="btn btn-warning" id="prev" onclick="goBack(1)">
               << Previous </button> 
               <!--<button class="btn btn-warning" disabled id="nxt"> Next >>-->
               </button>
            </div>
         </div>
         </div>
      </div>
      <?php
         }
         ?>
      <!-- ends quesion second -->
      <!-- question section third starts -->
      <?php
         if ($_GET['question'] === '3') {
         ?>
      <script>
         window.onload = function() {
             var ajax1 = new XMLHttpRequest();
             ajax1.open(
                 "GET",
                 `https://cashkar.in/ajax/device-function.php?unset=true`,
                 "TRUE"
             );
             ajax1.send();
         }
      </script>
      <div class="container">
         <div class="col-lg-10 col-sm-12 mx-auto mt-4">
            <h1 class="text-center mb-4 ttl-fit">Selling Your <?php $modelNameTxt = explode('-', $_GET['model']);
       for ($i = 0; $i < count($modelNameTxt); $i++) {
         echo  $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
       } ?></h1>
            <h3 class="text-center font-quicksand mb-4" style="font-weight:600;color:var(--orange)">Select Device Functionality <i class="fa fa-quote-left fa-1x fa-border" aria-hidden="true"></i></h3>
            <div class="row d-flex center">
               <div class="col-lg-3 col-sm-3 col-6 d-flex center">
                  <button value="/" type="button" id="section3-q1" class="mb-2 btn-value btn-price btn-square px-4 py-2 text-btn mr-3 border-radius-15 border-black-2" onclick="deviceFunction1(this.value);">
                  Fully Functional
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
               </div>
               <div class="col-lg-3 col-sm-4 col-6 d-flex center">
                  <button value="scratches" type="button" id="section3-q2" data-toggle="modal" data-target="#myModal" class="mb-2 btn-square btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2" onclick="deviceFunction2(this.id);">
                  Facing issues
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
                  <!-- Button to Open the Modal -->
                  <!-- The Modal -->
                  <div class="modal animate__animated animate__fadeInDownBig" id="myModal">
                     <div class="modal-dialog modal-dialog-centered" style="max-width:750px!important">
                        <div class="modal-content ">
                           <!-- Modal Header -->
                           <div class="modal-header font-work-sans">
                              <h4 class="modal-title font-model">Select Issues</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                           </div>
                           <!-- Modal body -->
                           <div class="modal-body row">
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Back Camera.png" id="i1" alt="" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Finger Print.png" id="i2" alt="" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Speakers-Viberators.png" id="i4" alt="" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Face Scanner.png" alt="" id="i5" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Battery.png" alt="" id="i6" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Wifi.png" alt="" id="i7" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Bent Phone.png" alt="" id="i3" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Network Problem.png" alt="" id="i9" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Microphone.png" alt="" id="i10" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Display Changed.png" alt="" id="i12" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Charging Problem.png" alt="" id="i13" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Bluetooth.png" alt="" id="i14" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                              <div class="col-lg-2 col-sm-3 col-4 d-flex center mb-2">
                                 <img src="https://cashkar.in/images/elements/Front Camera.png" alt="" id="i15" class="p-1" onclick="selectIssue(this.id)">
                              </div>
                           </div>
                           <!-- Modal footer -->
                           <div class="modal-footer">
                              <button type="button" class="btn btn-warning" data-dismiss="modal" id="model_data">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-11 d-flex mt-3 mx-auto pt-2">
               <button class="btn btn-warning" id="prev" onclick="goBack(2);">
               << Previous </button> 
               <!--<button class="btn btn-warning" id="nxt" disabled onclick="next(5)"> Next >>-->
               </button>
            </div>
         </div>
      </div>
      <?php
         }
         ?>
      <!-- question section third ends -->
      <!-- question fourth starts -->
      <?php
         if ($_GET['question'] === '6') {
            //  echo $_SESSION['no'];
         ?>
      <script>
         window.onload = function() {
             var checkAccessories = new XMLHttpRequest();
             checkAccessories.open("GET", "https://cashkar.in/ajax/overallBody.php?setSession=false&unset=all", "TRUE");
             checkAccessories.send();
         
         }
      </script>
      <div class="container">
         <div class="col-lg-10 col-sm-12 mx-auto mt-4">
            <h1 class="text-center mb-4 ttl-fit">Selling Your <?php $modelNameTxt = explode('-', $_GET['model']);
       for ($i = 0; $i < count($modelNameTxt); $i++) {
         echo  $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
       } ?></h1>
            <h3 class="text-center font-quicksand mb-4" style="font-weight:600;color:var(--orange)">Select Overall Body Condition <i class="fa fa-quote-left fa-1x fa-border" aria-hidden="true"></i></h3>
            <div class="row center">
               <?php
                  if (isset($_SESSION['0-3']) || isset($_SESSION['3-6'])) {
                  ?>
               <div class="col-lg-3 col-sm-3 col-6 mx-auto mb-3">
                  <button value="flawless" type="button" id="section4-q1" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="bodyCondition1(this.value);">
                  Flawless (Like New/ No Usage Signs)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
               </div>
               <?php } ?>
               <div class="col-lg-3 col-sm-4 mb-3 col-6 mx-auto">
                  <button value="good" type="button" id="section4-q2" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="bodyCondition2(this.value);">
                  Good (Light Usage Signs/ Minor Scratches)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
               </div>
               <div class="col-lg-3 col-sm-4 mx-auto col-6 mb-3">
                  <button value="average" type="button" id="section4-q3" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="bodyCondition3(this.value);">
                  Average (Minor Dents/ Major Scratches)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
               </div>
               <div class="col-lg-3 col-sm-4 col-6 mx-auto mb-3">
                  <button value="bellowAverage" type="button" id="section4-q4" class="mb-2 btn-value btn-price px-2 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="bodyCondition4(this.value);">
                  Below Average (Major Dents/ Cracked Or Broken Panel)
                  </button>
                  <!--<p class="info-txt text-center txt-underline mb-0">What's this?</p>-->
               </div>
            </div>
            <div class="col-lg-5 col-sm-10 mx-auto mt-4">
               <input type="checkbox" name="backGlassBroken" id="backglass" onclick="checkBackGlassBroken(this.value)">
               <label for="backglass"><strong>Check if back glass is broken</strong></label>
            </div>
            <div class="row" hidden id="properties">
               <div class="col-lg-3 col-sm-3 col-6 m-auto p-3 border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Scratch-less Screen</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 m-auto col-6 border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Scratches on Screen</li>
                        <li>Scratches on Corners</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 m-auto col-6 m-auto border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Screen Cracked</li>
                        <li>Glass Broken</li>
                        <li>Cracks on edges</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 m-auto border-dashed">
                  <div class="container-fluid">
                     <ul>
                        <li>Device's Touch Screen Faulty</li>
                        <li>Dead Pixels/spots on Screen</li>
                        <li>Visible lines on screen</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- next and previous button -->
            <div class="col-11 d-flex space-between mt-3 mx-auto pt-2">
               <button class="btn btn-warning" id="prev" onclick="goBack(4)">
               << Previous </button> <button value="scratches" type="button" disabled data-toggle="modal" id="nxt" data-target="#phnModal" class="mb-2 btn bg-warning">
               Next >>
               </button>
               <!-- Button to Open the Modal -->
               <!-- The Modal -->
               <div class="modal animate__animated animate__fadeInDownBig" id="phnModal">
                  <div class="modal-dialog modal-dialog-centered">
                     <div class="modal-content ">
                        <!-- Modal Header -->
                        <div class="modal-header font-work-sans">
                           <h4 class="modal-title font-model">Kindly Enter Your Phone Number.</h4>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <?php 
                           if(isset($_POST['phn'])){
                               $phoneNumber = $_POST['phn'];
                               $_SESSION['phn'] = $phoneNumber;
                               if(isset($_SESSION['phn'])){
                                   header("location:https://cashkar.in/checkout");
                               }
                           }
                           ?>
                        <form action="" method="post">
                           <div class="modal-body">
                              <div class="form-group">
                                 <label for="phnNmbr">Your Phone Number:</label>
                                 <input type="text" name="phn" id="phnNmbr" required maxlength="10" minlength="10" class="form-control" style="border-radius: 15px;" placeholder="Enter your phone number Ex: ***********">
                              </div>
                           </div>
                           <!-- Modal footer -->
                           <div class="modal-footer">
                              <button type="submit" class="btn btn-warning">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
         }
         ?>
      <!-- question fourth ends -->
      <!-- question fifth starts -->
      <?php
         if ($_GET['question'] === '4') {
         ?>
      <script>
         window.onload = function() {
             var checkAccessories = new XMLHttpRequest();
             checkAccessories.open("GET", "https://cashkar.in/ajax/accessories.php?setSession=false&unset=all", "TRUE");
             checkAccessories.send();
             if (onreadystatechange = function() {
                     if (checkAccessories.readyState == 4 && checkAccessories.status == 200) {
                        //  console.log('unseting session');
                     }
                 });
         }
      </script>
      <div class="container">
         <div class="col-lg-10 col-sm-12 mx-auto mt-4">
            <h1 class="text-center mb-4 ttl-fit">Selling Your <?php $modelNameTxt = explode('-', $_GET['model']);
       for ($i = 0; $i < count($modelNameTxt); $i++) {
         echo  $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
       } ?></h1>
            <h3 class="text-center font-quicksand mb-4" style="font-weight:600;color:var(--orange)">Select Accessories You Have<i class="fa fa-quote-left fa-1x fa-border" aria-hidden="true"></i></h3>
            <div class="row center">
               <div class="col-lg-3 col-sm-3 col-6 mx-auto mb-3">
                  <button value="Box" type="button" id="section5-q1" class="mb-2 btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="accessories(this.id);">
                  Box
                  </button>
               </div>
               <div class="col-lg-3 col-sm-4 col-6 mx-auto mb-3">
                  <button value="Charger" type="button" id="section5-q2" class="mb-2 btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="accessories(this.id);">
                  Charger
                  </button>
               </div>
               <div class="col-lg-3 col-sm-4 m-auto col-6 mx-auto">
                  <button value="Earphone" type="button" id="section5-q3" class="mb-2 btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="accessories(this.id);">
                  Earphone
                  </button>
               </div>
               <div class="col-lg-3 col-sm-4 col-6 mx-auto">
                  <button value="Bill" type="button" id="section5-q4" class="mb-2 btn-value  btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="accessoriesBill(this.id);">
                  Bill
                  </button>
               </div>
            </div>
            <!-- next and previous button -->
            <div class="col-11 d-flex mt-3 mx-auto pt-2 d-flex space-between">
               <button class="btn btn-warning" id="prev" onclick="goBack(3)">
               << Previous </button> 
               <button class="btn btn-warning" id="nxt" onclick="checkbillNext()"> Next >>
               </button>
            </div>
         </div>
      </div>
      <?php
         }
         ?>
      <!-- question fitfth ends here -->
      <!-- question sixth starts here -->
      <?php
         if ($_GET['question'] === '5') {
             if (isset($_SESSION['BILL'])) {
         ?>
      <script>
         window.onload = function() {
             var checkAccessories = new XMLHttpRequest();
             checkAccessories.open("GET", "https://cashkar.in/ajax/warrantyCase.php?setSession=false&unset=all", "TRUE");
             checkAccessories.send();
             if (onreadystatechange = function() {
                     if (checkAccessories.readyState == 4 && checkAccessories.status == 200) {
                         console.log('unseting session');
                     }
                 });
         }
      </script>
      <div class="container">
         <div class="col-lg-10 col-sm-12 mx-auto mt-4">
            <h1 class="text-center mb-4 ttl-fit">Selling Your <?php $modelNameTxt = explode('-', $_GET['model']);
       for ($i = 0; $i < count($modelNameTxt); $i++) {
         echo  $showModelName = ucfirst($modelNameTxt[$i]) . ' ';
       } ?></h1>
            <h3 class="text-center font-quicksand" style="font-weight:600;color:var(--orange)">Select Device Warranty <i class="fa fa-question-circle"></i></h3>
            <div class="row center">
               <div class="col-lg-3 col-sm-3 col-6 mx-auto mb-3">
                  <button value="0-3" type="button" id="section6-q1" class="mb-2 btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="warranty1(this.id);">
                  0 - 3 Months
                  </button>
               </div>
               <div class="col-lg-3 col-sm-4 mx-auto col-6 mb-3">
                  <button value="3-6" type="button" id="section6-q2" class="mb-2 btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="warranty2(this.id);">
                  3 - 6 Months
                  </button>
               </div>
               <div class="col-lg-3 col-sm-4 mx-auto col-6 mb-3">
                  <button value="6-11" type="button" id="section6-q3" class="mb-2 btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="warranty3(this.id);">
                  6 - 11 Months
                  </button>
               </div>
               <div class="col-lg-3 col-sm-4 col-6 mx-auto mb-3">
                  <button value="no" type="button" id="section6-q4" class="mb-2 btn-value btn-price px-4 py-2 text-btn mr-3 border-radius-15 border-black-2 btn-square" onclick="warranty4(this.id);">
                  No Warranty
                  </button>
               </div>
            </div>
            <!-- next and previous button -->
            <div class="col-11 d-flex mt-3 mx-auto pt-2">
               <button class="btn btn-warning" id="prev" onclick="goBack(4)">
               << Previous </button> 
               <!--<button class="btn btn-warning" disabled id="nxt" onclick="next(6)"> Next >>-->
               </button>
            </div>
         </div>
      </div>
      <?php
         } else {
             header("location:?question=6");
         }
         }
         ?>
      <!-- question sixth starts here -->
      <?php } ?>
      <!-- question section ends -->
      <script src="https://cashkar.in/js/main.js"></script>
      <br>
      <?php include "faq-mobile.php";?>
       <?php include "../top-selling-mbl.php";?>
       <?php include "../about-us.php";?>
     <style type="text/css">
       .border-b-2{
         border-bottom: 3px solid var(--yellow);
       }
     </style>
      <?php include "../footer.php";?>
      <script>var activeStorage = '<?php echo $selectStorage;?>';const selectorOption = document.getElementById(activeStorage);selectorOption.classList.add('active-selected-storage');</script>
   </body>
</html>