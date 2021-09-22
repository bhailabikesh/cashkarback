<style>
    .faq-txt{
        font-size:16.7px!important;
    }
</style>
<?php 
$faqWord = 'Phone';
$bestPrice = 99000;
if(isset($_GET['brand']) && isset($_GET['model'])){
    $faqWord = $modelName;
    $faqSlug = $_GET['model'];
    $sqlModelPrice = "SELECT * FROM model where slug = '$faqSlug' ORDER BY price DESC";
    $queryModelPrice = mysqli_query($connect,$sqlModelPrice);
    if(mysqli_num_rows($queryModelPrice)> 0){
        $resBrandPrice = mysqli_fetch_array($queryModelPrice);
        $bestPrice = $resBrandPrice['price'];
    }
    
}else{
    if(isset($_GET['brand'])){
    $faqWord = $brand4FAQ;
    $sqlBrandPrice = "SELECT * FROM orderlist where brand  = '$brand4FAQ' ORDER BY finalPrice DESC";
    $queryBrandPrice = mysqli_query($connect,$sqlBrandPrice);
    if(mysqli_num_rows($queryBrandPrice)> 0){
        $resBrandPrice = mysqli_fetch_array($queryBrandPrice);
        $bestPrice = $resBrandPrice['finalPrice'];
    }
    
    }
    
}
?>
<div class="testimonials text-center p-5" id="faq">
            <div class="container">
               <h3 style="font-size:30px;font-weight:500;">
                  FAQ
                  <!--<i class="fa fa-question-circle"></i>-->
               </h3>
               <div class="row">
                  <!--faq-->
                  <!--faq left-->
                  <div class="col-lg-6 col-sm-12 col-12">
                     <div class="accordion" id="faqR">
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h2 class="mb-0">
                                 <button class="text-dark btn btn-link btn-block text-left collapsed faq-txt" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="collapseThree">
                                 How To Sell <?php echo $faqWord;?> Online For Cash?
                                 </button>
                              </h2>
                           </div>
                           <div id="faq1" class="collapse" aria-labelledby="headingThree" data-parent="#faqR">
                              <div class="card-body">
                                 You Can Easily Sell Your Old <?php echo $faqWord;?> Online For Instant Cash At Cash Kar by just following these simple steps <a href="https://cashkar.in/blogs/how-to-sell-old-mobile-phone-for-best-price-value/">How To Sell</a>. 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--faq right-->
                  <div class="col-lg-6 col-sm-12 col-12">
                     <div class="accordion" id="faql">
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h2 class="mb-0">
                                 <button class="text-dark btn btn-link btn-block text-left collapsed faq-txt" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="collapseThree">
                                 Where To Sell Old <?php echo $faqWord;?> Nearby For Best Price?
                                 </button>
                              </h2>
                           </div>
                           <div id="faq2" class="collapse" aria-labelledby="headingThree" data-parent="#faql">
                              <div class="card-body">
                                 Cash-Kar is one of the best place to sell your old <?php echo $faqWord;?>. Best Price, Free Home Pick-Up & Instant Cash.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-12">
                     <div class="accordion" id="faqm">
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h2 class="mb-0">
                                 <button class="text-dark btn btn-link btn-block text-left collapsed faq-txt" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="collapseThree">
                                How Much Money Will I get for my Old <?php echo $faqWord;?> Mobile Phone?
                                 </button>
                              </h2>
                           </div>
                           <div id="faq3" class="collapse" aria-labelledby="headingThree" data-parent="#faqm">
                              <div class="card-body">
                                 You Can Get Upto <?php echo $bestPrice;?>/- Rupees For Your Used <?php echo $faqWord;?>.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-12">
                     <div class="accordion" id="faqn">
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h2 class="mb-0">
                                 <button class="text-dark btn btn-link btn-block text-left collapsed faq-txt" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="collapseThree">
                                 Do I Get Spot Cash When I Sell My Old <?php echo $faqWord;?>?
                                 </button>
                              </h2>
                           </div>
                           <div id="faq4" class="collapse" aria-labelledby="headingThree" data-parent="#faqn">
                              <div class="card-body">
                                 Cash-Kar is one of the highest paying service for your old mobile phone. After the inspection is completed spot payment is done as per your preference. Cash, UPI, Bank Transfer, Gpay or Paytm.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>