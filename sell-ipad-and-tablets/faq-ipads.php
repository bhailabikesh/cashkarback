<style>
    .faq-txt{
        font-size:16.7px!important;
    }
    .ans, .ans>ul{
        padding-left:12px;
        font-size:15.2px!important;
        margin-bottom:10px;
    }
    .faq-main h2{
        font-size:20px!important;
    }
</style>
<?php 
$faqWord = 'Ipads And Tablets';
$bestPrice = 99000;
if(isset($_GET['brand']) && isset($_GET['model'])){
    $faqWord = $modelName;
    $faqSlug = $_GET['model'];
    $sqlModelPrice = "SELECT * FROM model where slug = '$faqSlug' ORDER BY price DESC";
    $queryModelPrice = mysqli_query($connect,$sqlModelPrice);
    if(mysqli_num_rows($queryModelPrice)> 0){
        $resBrandPrice = mysqli_fetch_array($queryModelPrice);
        $bestPrice = $resBrandPrice['price'];
        $ram = $resBrandPrice['ram'];
        $storage = $resBrandPrice['storage'];
        if($ram != ''){
            $faqStorage = $ram.'GB/'.$storage.'GB';
        }else{
         $faqStorage = $storage.'GB';   
        }
    }
    
}else{
    if(isset($_GET['brand'])){
    $faqWord = ucfirst($brand4FAQ).' '.$faqWord;
    
    $sqlBrandPrice = "SELECT * FROM orderlist where brand  = '$brand4FAQ' ORDER BY finalPrice DESC";
    $queryBrandPrice = mysqli_query($connect,$sqlBrandPrice);
    if(mysqli_num_rows($queryBrandPrice)> 0){
        $resBrandPrice = mysqli_fetch_array($queryBrandPrice);
        $bestPrice = $resBrandPrice['finalPrice'];
        $brand4FAQ = '';
        // $ram = $resBrandPrice['ram'];
        // $storage = $resBrandPrice['storage'];
        // if($ram != ''){
        //     $faqStorage = $ram.'GB/'.$storage.'GB';
        // }else{
        //  $faqStorage = $storage.'GB';   
        // }
    }
    
    }
    
}
?>
<div class="testimonials  p-5" id="faq">
            <div class="container">
               <h3 style="font-size:30px;font-weight:500;" class="text-center">
                  FAQ
                  <!--<i class="fa fa-question-circle"></i>-->
               </h3>
               <div class="row faq-main">
                  <!--faq-->

                  <div class="col-lg-6 col-sm-12 col-12 p-3">
                      <!--question-->
                     <h2 class="qus">How to sell old <?php echo $faqWord.' '.$faqStorage; ?></h2>
                     <!--answer-->
                     <p class="ans">
                         You can sell your old <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?> by following these simple steps.
                        
                     </p>
                      <ul class="ans">
                             <li><strong>Select Device Model-</strong> search for <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?> and select the model.</li>
                             <li><strong>About Device-</strong> Tell us about your device by selecting the appropriate condition and functioning.</li>
                             <li><strong>Get quote-</strong> Get quote for your old <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?> according to your selections.</li>
                             <li><strong>Sell Device -</strong> Once satisfied with the pricing, Scheduled a free pickup as per your convenience.</li>
                             <li><strong>Get Paid-</strong> Get instant payment via Cash, Bank Transfer, Google Pay or PayTm as soon as your device is collected.</li>
                         </ul>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-12 p-3">
                      <!--question-->
                     <h2 class="qus">How Much Is <?php echo $faqWord.' '.$faqStorage; ?> resale value?</h2>
                     <!--answer-->
                     <p class="ans">
                         You can get upto  ₹ <?php echo $bestPrice; ?> for your used <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?>.
                        Accurate value for your old <?php echo $faqWord.' '.$faqStorage; ?> is based on market trends, condition and functioning of your device.
                        The resale value of Your old <?php echo $faqWord.' '.$faqStorage; ?> is much higher when the condition of your device is flawless with all accessories as compared to an <?php echo $faqWord.' '.$faqStorage; ?> that has dents and scratches and has no accessories.
                     </p>
                      
                  </div>
                  <div class="col-lg-6 col-sm-12 col-12 p-3">
                      <!--question-->
                     <h2 class="qus">Can I sell my broken <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?>?</h2>
                     <!--answer-->
                     <p class="ans">
                         Yes, You can sell your broken <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?> for instant cash. But the value of a non-functional or a broken <?php echo $faqWord.' '.$faqStorage; ?> will be much lesser than a perfect functioning <?php echo $faqWord.' '.$faqStorage; ?>. If you want to know how much you can get for a broken <?php echo $faqWord.' '.$faqStorage; ?>, just follow the steps above, mention appropriate issues and a best value for your <?php echo $faqWord.' '.$faqStorage; ?> will be generated.
                     </p>
                      
                  </div>
                   <div class="col-lg-6 col-sm-12 col-12 p-3">
                      <!--question-->
                     <h2 class="qus">Where To Sell old <?php echo $faqWord.' '.$faqStorage; ?> Nearby?</h2>
                     <!--answer-->
                     <p class="ans">
                         You can sell your old <?php echo $faqWord.' '.$faqStorage; ?> online at Cash Kar for a best price value. Get Free Home Pickup, Hassle Free Service and Instant cash for your old <?php echo $faqWord.' '.$faqStorage; ?>. Just follow the steps above and place an order now!
                     </p>
                      
                  </div>
                   
               </div>
            </div>
         </div>
         <!--  schema    -->
      <script type="application/ld+json">
      {
   "@context": "https://schema.org",
   "@type": "FAQPage",
   "mainEntity": [
      {
         "@type": "Question",
         "name": "How to sell old <?php echo $faqWord.' '.$faqStorage; ?>?",
         "acceptedAnswer": {
            "@type": "Answer",
            "text": "You Can Easily Sell Your Old <?php echo $modelNameFAQ;?> Online For Instant Cash At Cash Kar by just following these simple steps How To Sell. 1 Select Device Model - search for <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?> and select the model. 2 About Device - Tell us about your device by selecting the appropriate condition and functioning. 3 Get quote - Get quote for your old <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?> according to your selections. 4 Get Paid - Get instant payment via Cash, Bank Transfer, Google Pay or PayTm as soon as your device is collected."
         }
      },
      {
         "@type": "Question",
         "name": "How Much Is <?php echo $faqWord.' '.$faqStorage; ?> resale value?",
         "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can get upto  ₹ <?php echo $bestPrice; ?> for your used <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?>.Accurate value for your old <?php echo $faqWord.' '.$faqStorage; ?> is based on market trends, condition and functioning of your device.The resale value of Your old <?php echo $faqWord.' '.$faqStorage; ?> is much higher when the condition of your device is flawless with all accessories as compared to an <?php echo $faqWord.' '.$faqStorage; ?> that has dents and scratches and has no accessories."
         }
      },
      {
         "@type": "Question",
         "name": "Can I sell my broken <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?>?",
         "acceptedAnswer": {
            "@type": "Answer",
            "text": " Yes, You can sell your broken <?php echo $brand4FAQ.' '.$faqWord.' '.$faqStorage; ?> for instant cash. But the value of a non-functional or a broken <?php echo $faqWord.' '.$faqStorage; ?> will be much lesser than a perfect functioning <?php echo $faqWord.' '.$faqStorage; ?>. If you want to know how much you can get for a broken <?php echo $faqWord.' '.$faqStorage; ?>, just follow the steps above, mention appropriate issues and a best value for your <?php echo $faqWord.' '.$faqStorage; ?> will be generated."
         }
      },
      {
         "@type": "Question",
         "name": "Where To Sell old <?php echo $faqWord.' '.$faqStorage; ?> Nearby?",
         "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can sell your old <?php echo $faqWord.' '.$faqStorage; ?> online at Cash Kar for a best price value. Get Free Home Pickup, Hassle Free Service and Instant cash for your old <?php echo $faqWord.' '.$faqStorage; ?>. Just follow the steps above and place an order now!"
         }
      }
   ]
}
      </script>
      