<?php
session_start();
$msg = '';
include "../content/connection.php";
if (!(isset($_SESSION['VENDOR-LOGIN']))) {
  header("location:https://cashkar.in/login");
} else {
  $vendorID = $_SESSION['VENDOR-LOGIN'];
  $sqlUserData = "SELECT * FROM vendor where id = '$vendorID'";
$queryUserData = mysqli_query($connect,$sqlUserData);
$resUserData = mysqli_fetch_array($queryUserData);
$fullName = $resUserData['fullName'];
$email = $resUserData['email'];
}

if (isset($_POST['updateData'])) {
  $oldPw = md5($_POST['currentPw']);
  $newPw = $_POST['newPw'];
  $confirmNew = $_POST['newCpW'];
  // checking old is correct or not
  $sqlOldPw = "SELECT * FROM vendor where id=$vendorID and `password` = '$oldPw'";
  $queryOldPw = mysqli_query($connect, $sqlOldPw);
  if (mysqli_num_rows($queryOldPw) > 0) {
    if(!empty($newPw) and strlen($newPw) > 6){
      if ($newPw === $confirmNew) {
        $newPw = md5($newPw);
        $sqlUpdatePw = "UPDATE vendor SET `password` = '$newPw' where id = '$vendorID'";
        $queryUpdatePw = mysqli_query($connect, $sqlUpdatePw);
        if ($queryUpdatePw) {
          // generate update success msg
          $msg = '
              <div class="alert alert-success p-3">
              Password Upadated Successfully
            </div>
              ';
        } else {
          // generate unable to update error
                  $msg = '
            <div class="alert alert-danger p-3">
            Unable to Password Upadate
            </div>
            ';
        }
      } else {
        // generate password does not match
              $msg = '
          <div class="alert alert-danger p-3">
          New password does not match with each other
          </div>
          ';
      }
    }else{
      $msg = '
      <div class="alert alert-danger p-3">
      Password must not contain only whitespaces and longer than 6 character
      </div>
      ';
    }
    
  } else {
    /// generate old password doesnot match error
          $msg = '
        <div class="alert alert-danger p-3">
        Old password didn\'t match
        </div>
        ';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <?php include "v-menu.php";?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "top.php";?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4 pr-3">
            <h1 class="h3 mb-0 text-gray-800">Profile Settings</h1>
          </div>
          <div class="container">
            <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div class="container">
                <div class="row flex-lg-nowrap">
                  <div class="col">
                    <div class="row">
                      <div class="col mb-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="e-profile">
                              <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                              </ul>
                              <div class="tab-content pt-3">
                                <div class="tab-pane active">
                                  <form class="form needs-validation" novalidate="" method="POST">
                                    <div class="row">
                                      <div class="col">
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Full Name</label>
                                              <input class="form-control" disabled type="text" name="name" value="<?php echo $fullName;?>">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Email</label>
                                              <input class="form-control" disabled type="text" value="<?php echo $email;?>" placeholder="user@example.com">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">

                                      <div class="col-12 col-sm-6 mb-3">
                                        <div class="mb-2"><b>Change Password</b>
                                          <?php echo $msg; ?>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Current Password</label>
                                              <input class="form-control" type="password" name="currentPw" placeholder="••••••">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>New Password</label>
                                              <input class="form-control" type="password" name="newPw" placeholder="••••••" minlength="6" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                              <input class="form-control" type="password" name="newCpW" placeholder="••••••" minlength="6" required></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col d-flex justify-content-end">
                                        <button class="btn btn-primary " href="#myModal" class="trigger-btn" data-toggle="modal" type="button">Save Changes</button>
                                        <div id="myModal" class="modal fade">
                                          <div class="modal-dialog modal-confirm">
                                            <div class="modal-content">
                                              <div class="modal-header flex-column">
                                                <h4 class="modal-title w-100">Are you sure?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              </div>
                                              <div class="modal-body">
                                                <p>Do you really want to make changes to your profile?</p>
                                              </div>
                                              <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="updateData" class="btn btn-success">Confirm</button>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>



          </div>



        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="./loginv2/index.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/linechart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>