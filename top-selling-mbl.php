<div class="top-selling container">
<div class="abt-1">
       <h3 style="font-size:30px;font-weight:500;" class="text-center pl-3">
                     Top Selling Models
                     </h3>
<div class="container">
    <div class="row p-0">
               <?php
               $sqlTop = "SELECT * from orderlist where status ='success' and category = 'mobile' ORDER BY id DESC  LIMIT 6";
               $queryTop = mysqli_query($connect,$sqlTop);
               if(mysqli_num_rows($queryTop) > 0){
               while($resTop = mysqli_fetch_array($queryTop)){
                   $resTopId = $resTop['model_id'];
                   $sqlModel = "SELECT * FROM model where id = '$resTopId'";
                   $queryModel = mysqli_query($connect,$sqlModel);
                   $resModel = mysqli_fetch_array($queryModel);
                   
                       $modelName = $resModel['model_name'];
                          $img = $resModel['img'];
                          $slug = $resModel['slug'];
                        $alt = $resModel['alt'];
                        $brand = $resModel['brand'];
                        $brandName ='sell-'.strtolower($brand);
                
               ?>
               <div class="col-lg-2 col-md-3 col-sm-4 col-4 mb-2 pr-2 mb-2">
                  <div class="model-box">
                     <a href="https://cashkar.in/sell-old-mobile/<?php echo $brandName;?>/<?php echo $slug;?>" class="text-decoration-none">
                        <img src="https://cashkar.in/images/model/mobile/<?php echo $img; ?>" width="100%" height="auto" alt="<?php echo $alt; ?>">
                        <h3 class="text-center model_name-txt"><?php echo $modelName; ?></h3>
                     </a>
                  </div>
               </div>
               <?php
                
               }
               }else{
                   ?>
                   <div class="alert alert-warning p-3 m-auto">
                       No data Found.
                   </div>
                   <?php
               }
                  ?>
            </div>
</div>
     </div>
     </div>
     </div>
     <style type="text/css">
       .border-b-2{
         border-bottom: 3px solid var(--yellow);
       }
     </style>