<?php include "top.inc.php";?>
<!--Table part-->
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>Added On</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $sqlEmail = "SELECT * FROM `subscriber`";
        $queryEmail = mysqli_query($connect,$sqlEmail);
        $rows = mysqli_num_rows($queryEmail);
        if($rows > 0){
            $x=0;
            while($resEmail = mysqli_fetch_array($queryEmail)){
                $email = $resEmail['email'];
                $addedOn = $resEmail['addedON'];
                $x++;
                ?>
                 <tr>
        <td><?php echo $x;?></td>
        <td><?php echo $email;?></td>
        <td><?php echo $addedOn;?></td>
      </tr>
                <?php
            }  
        }
        ?>
     
    </tbody>
  </table>
  </div>
<?php include "buttom.inc.php";?>