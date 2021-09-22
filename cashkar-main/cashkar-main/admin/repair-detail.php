<?php include "top.inc.php"; ?>
<?php 
   if(isset($_GET['id']) and isset($_GET['action'])){
       $repairId= $_GET['id'];
   }
   ?>
<div class="col-6">
   <td>
      <form method="POST">
         <div class="input-group">
            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="vendorId">
               <option selected disabled>Choose vendor</option>
               <?php 
                  $sqlVendor = "SELECT * FROM vendor";
                  $queryVendor = mysqli_query($connect,$sqlVendor);
                  while($resVendor = mysqli_fetch_array($queryVendor)){
                      $vendorEmail = $resVendor['email'];
                      $vendorId = $resVendor['id'];
                  ?>
               <option value="<?php echo $vendorId;?>"><?php echo $vendorEmail;?></option>
               <?php } ?>
            </select>
            <div class="input-group-append">
               <button class="btn btn-success btn-sm" type="submit" name="assignVendor">Assign</button>
            </div>
         </div>
      </form>
   </td>
</div>
<?php 
                                         if(isset($_POST['assignVendor'])){
                                               $vId = $_POST['vendorId'];
                                               $sqlAddVendor = "UPDATE repair SET assignTo = '$vId' where id = '$repairId'";
                                               $queryAddVendor = mysqli_query($connect,$sqlAddVendor);
                                               if($queryAddVendor){
                                                   echo " <script>alert('Vendor assign successfully');</script>";
                                               }else{
                                                    echo " <script>alert('Unable to assign vendor');</script>";
                                               }
                                           }?>
<?php include "buttom.inc.php"; ?>