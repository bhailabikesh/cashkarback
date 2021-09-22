<?php
session_start();
if (!(isset($_SESSION['VENDOR-LOGIN']))) {
    header("location:https://cashkar.in/vendor/login/index.php");
} else {
    $vendorID = $_SESSION['VENDOR-LOGIN'];
}
include "../content/connection.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Vendor Dashboard</title>

    <!-- Custom fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles-->
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561306648/feather.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
  <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
</head>

<body id="page-top">
<?php include "overlay-menu.php";?>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <!-- Content Row -->

                    <div class="row">


                        <div class="col-xl-10 col-lg-10">
                            <div class="card shadow mb-4">
                                <!-- Incomplete Orders-->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Incomplete Orders</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="1"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Price</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php 
                                            $sqlDataVendor = "SELECT * FROM orderlist where assignTo = '$vendorID' and pickedUpBy = 0 ORDER BY id DESC";
                                            $queryDataVendor = mysqli_query($connect,$sqlDataVendor);
                                                if (mysqli_num_rows($queryDataVendor)>0) {
                                                    while ($resVendorData = mysqli_fetch_array($queryDataVendor)) {
                                                        $brandName = $resVendorData['brand'];
                                                        $orderId = $resVendorData['id'];
                                                        $price = $resVendorData['finalPrice'];
                                                        $modelId = $resVendorData['model_id'];
                                                        $modelSql = "SELECT * FROM model where id = '$modelId'";
                                                        $queryModel = mysqli_query($connect,$modelSql);
                                                        $resModelName = mysqli_fetch_array($queryModel);
                                                        $modelName = $resModelName['model_name'];
                                                        $address = $resVendorData['address'];
                                                        $optAddress = $resVendorData['opt_address'];
                                                        $city = $resVendorData['city'];
                                                        $zip = $resVendorData['zip'];
                                                        $fullAddress = $address.' '.$optAddress.' '.$city.' '.$zip;
                                                        ?>
                                            <tr>
                                                <td data-label="Brand"><?php echo $brandName;?></td>
                                                <td data-label="Model"><?php echo $modelName;?></td>
                                                <td data-label="Price"><?php echo $price;?></td>
                                                <!--<td data-label="Address"><?php //echo $fullAddress;?></td>-->
                                                <td>
                                                    <a href="https://cashkar.in/vendor/recheck.php?order=<?php echo $orderId; ?>">
                                                    <button
                                                    class="btn btn-success btn-sm table-icons" data-title="Delete"
                                                    data-toggle="modal" data-target="#delete"><i
                                                        class="fas fa-check table-icons"></i> Accept</button>
                                                        </a>
                                                    </td>
                                            </tr>
                                            <?php
                                                    }
                                                }else{
                                                    ?>
                                                    <td data-label="Model" colspan="5" class="text-center">No New Orders</td>
                                                    <?php
                                                } 
                                                ?>
                                        </tbody>
                                    </table>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="./loginv2/index.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Custom scripts for all pages-->
        <script src="https://cashkar.in/vendor/assets/js/app.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>