<?php 
include "top.inc.php";
include "../content/function.inc.php";

?>
<div class="col-md-6 col-10  m-auto px-3 py-2 d-flex">
    <form method="POST">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Enter vendor email" name="email" aria-label="vendor email" aria-describedby="button-addon2">
  <div class="input-group-append">
    <input type="submit" class="btn btn-outline-primary"  name="add" id="button-addon2" value="Button">
  </div>
</div>
</form>
</div>
<?php 
if(isset($_POST['add'])){
    $email = $_POST['email'];
    $codeToAddVendor = md5('vendor');
    $defaultPwdForVendor = md5("welComeVendor");
    $subject ="Register for Vendor at Gadgetzco.";
    $link = .$codeToAddVendor.'&pwd='.$defaultPwdForVendor;
    $body = "
    <center>
    <div style='padding:4vw;background:#eee;width:90%;'>
    <h2>
    You are invited to be vendor of gadgetzco.
    </h2>
    <p>To became Vendor of Gadgetzco please click bellow link<a href=".$link."> Here</a></p>
    
    </div>
    </center>
    ";
    if(sendMail($email,$subject,$body)){
        echo "<script>alert('Vendor added successfully and a email is sent to vendor');</script>";
    }else{
        echo "<script>alert('Unable to add vendor');</script>";
    }
}
?>

<?php 
include "buttom.inc.php";
?>