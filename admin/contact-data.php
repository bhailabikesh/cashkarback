<?php include "top.inc.php";?>
<!--Table part-->
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>City</th>
        <th>Address</th>
        <th>Subject</th>
        <th>Added On</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $sqlContact = "SELECT * FROM `contact`";
        $queryContact = mysqli_query($connect,$sqlContact);
        $rows = mysqli_num_rows($queryContact);
        if($rows > 0){
            $x=0;
            while($resContact = mysqli_fetch_array($queryContact)){
                $fName = $resContact['fullName'];
                $number = $resContact['phoneNumber'];
                $address = $resContact['address'];
                $city = $resContact['city'];
                $subject = $resContact['subject'];
                $email = $resContact['email'];
                $addedOn = $resContact['dateTime'];
                $x++;
                ?>
                 <tr>
        <td><?php echo $x;?></td>
        <td><?php echo $fName;?></td>
        <td><?php echo $number;?></td>
        <td><?php echo $email;?></td>
        <td><?php echo $city;?></td>
        <td><?php echo $address;?></td>
        <td><?php echo $subject;?></td>
        <td><?php echo $addedOn;?></td>
        <td><a href="mailto:<?php echo $email;?>" class="btn btn-primary shadow">Send Mail</a></td>
      </tr>
                <?php
            }  
        } 
        
        ?>
    </tbody>
    
  </table>
  </div>
<?php include "buttom.inc.php";?>