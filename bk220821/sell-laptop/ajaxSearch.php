<?php
include "../content/connection.php";
$brandKeyword = mysqli_real_escape_string($connect, $_REQUEST['keyword']);
$sqlSearch = "SELECT * FROM model WHERE (isParent = '1' and category = 'mobile') and (model_name LIKE '%$brandKeyword%' or brand like '%$brandKeyword%') ORDER BY `id` ASC Limit 3";
$querySearch = mysqli_query($connect, $sqlSearch);
                                if(mysqli_num_rows($querySearch) > 0){
                                    while($resultSearch = mysqli_fetch_array($querySearch)){
                                $brandName = strtolower($resultSearch['brand']);
                                $modelSlug = $resultSearch['slug'];
                                   
                                $modelName = $resultSearch['model_name'];
                                $modelImg = $resultSearch['img'];
                                
                                ?>
                                
                                 <a href="https://cashkar.in/sell-old-mobile/<?php echo 'sell-'.$brandName; ?>/<?php echo $modelSlug; ?>" class="text-decoration-none text-dark" style="font-size:17.6px!important">
                                <div class="row p-2" style="height:90px">
                                <div id="sr-bx-0 mb-1" class="col-4">
                                    <img src="https://cashkar.in/images/model/mobile/<?php echo $modelImg; ?>" height="70px" width="auto" alt="gadgetzco <?php echo $modelName;?>"/>
                                </div>
                                 <div id="sr-bx-0" class="col-8 mt-2 mb-1">
                                    <h4 class="s-txt" style="font-size:17.6px!important"><?php echo $modelName;?></h4>
                                                                                <small><?php echo $brandName;?></small>
                                </div>
                                </div>
                                </a>
                                <?php
                                    }
                                    
                                }else{
                                  echo "<h4 style='color:red;'>Nothing found for ".'"'.$brandKeyword.'"'."</h4>";
                                }
?>