<?php include "top.inc.php";?>
   <!-- Content -->
   <?php 
   
   ?>
   <div class="content">
       <!-- Animated -->
       <div class="animated fadeIn">
           <!-- Widgets  -->
           <div class="row">
               <div class="col-lg-3 col-md-6">
                   <div class="card">
                       <div class="card-body">
                           <div class="stat-widget-five">
                               <div class="stat-icon dib flat-color-1">
                                   <i class="fa fa-user-circle"></i>
                               </div>
                               <?php 
                                    $sqlUser = "SELECT * FROM users";
                                    $queryUser = mysqli_query($connect,$sqlUser);
                                    $userRows = mysqli_num_rows($queryUser);
                                ?>
                               <div class="stat-content">
                                   <div class="text-left dib">
                                       <div class="stat-text"><span class="count"><?php echo $userRows;?></span></div>
                                       <div class="stat-heading">Leads</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                   <div class="card">
                       <div class="card-body">
                           <div class="stat-widget-five">
                               <div class="stat-icon dib flat-color-2">
                                   <i class="fa fa-opencart"></i>
                               </div>
                               <?php 
                                    $sqlSales = "SELECT * FROM orderlist";
                                    $querySales = mysqli_query($connect,$sqlSales);
                                    $salesRows = mysqli_num_rows($querySales);
                                ?>
                               <div class="stat-content">
                                   <div class="text-left dib">
                                       <div class="stat-text"><span class="count"><?php echo $salesRows;?></span></div>
                                       <div class="stat-heading">Orders</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                   <div class="card">
                       <div class="card-body">
                           <div class="stat-widget-five">
                               <div class="stat-icon dib flat-color-3">
                                   <i class="fa fa-check"></i>
                               </div>
                               <?php 
                                    $sqlSales = "SELECT * FROM orderlist where status = 'success'";
                                    $querySales = mysqli_query($connect,$sqlSales);
                                    $salesRows = mysqli_num_rows($querySales);
                                ?>
                               <div class="stat-content">
                                   <div class="text-left dib">
                                       <div class="stat-text"><span class="count"><?php echo $salesRows;?></span></div>
                                       <div class="stat-heading">Completed</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                   <div class="card">
                       <div class="card-body">
                           <div class="stat-widget-five">
                               <div class="stat-icon dib flat-color-4">
                                   <i class="fa fa-times"></i>
                               </div>
                                <?php 
                                    $sqlSales = "SELECT * FROM orderlist where status = 'failed'";
                                    $querySales = mysqli_query($connect,$sqlSales);
                                    $salesRows = mysqli_num_rows($querySales);
                                ?>
                               <div class="stat-content">
                                   <div class="text-left dib">
                                       <div class="stat-text"><span class="count"><?php echo $salesRows;?></span></div>
                                       <div class="stat-heading">Failed</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6">
                   <div class="card">
                       <div class="card-body">
                           <div class="stat-widget-five">
                               <div class="stat-icon dib flat-color-4">
                                   <i class="fa fa-exclamation-triangle"></i>
                               </div>
                                <?php 
                                    $sqlSales = "SELECT * FROM orderlist where status = 'pending'";
                                    $querySales = mysqli_query($connect,$sqlSales);
                                    $salesRows = mysqli_num_rows($querySales);
                                ?>
                               <div class="stat-content">
                                   <div class="text-left dib">
                                       <div class="stat-text"><span class="count"><?php echo $salesRows;?></span></div>
                                       <div class="stat-heading">Pending</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- /Widgets -->
           <!-- Scripts -->
         <?php include "buttom.inc.php";?>