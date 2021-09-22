<?php
session_start();
if (!(isset($_SESSION['USER-LOGIN']))) {
    header("location:https://cashkar.in/login");
} else {
    $userID = $_SESSION['USER-LOGIN'];
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
    <title>Dashboard</title>

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
    <?php include "overlay-menu.php"; ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        

            <?php include "u-menu.php";?>


      
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php include "topbar.php";?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4 pr-3">
                        <h1 class="h3 mb-0 text-gray-800">Orders</h1>

                    </div>
                    <div class="msg-box" id="msg-bx"></div>
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 order-table">


                                <table id="datatable"
                                    class="table table-striped table-hover table-bordered table-responsive"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Brand Name</th>
                                            <th>Model</th>
                                            <th>Selling Price</th>
                                            <th>Picked up by</th>
                                            <th>Status</th>
                                            <th>View</th>
                                            <th>Re-schedule</th>
                                            <th>Cancel</th>

                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        $userData = "SELECT * FROM orderlist where byUser = '$userID' ORDER BY id DESC";
                                        $queryUserData = mysqli_query($connect, $userData);
                                        if (mysqli_num_rows($queryUserData) > 0) {
                                            while ($resModel = mysqli_fetch_array($queryUserData)) {
                                                $brandName = $resModel['brand'];
                                                $sellingPrice = $resModel['finalPrice'];
                                                $orderId = $resModel['id'];
                                                $status = $resModel['status'];
                                                if ($status == 'failed') {
                                                    $disabled = 'disabled';
                                                    $showStatus = '<p class="text-danger text-center">Failed</p>';
                                                }
                                                if ($status == 'success') {
                                                    $showStatus = '<p class="text-success text-center">Success</p>';
                                                    $disabled = 'disabled';
                                                }
                                                if ($status == 'pending') {
                                                    $disabled = '';
                                                    $showStatus = '<p class="text-warning text-center bold">Pending</p>';
                                                }
                                                $pickedUpBy = $resModel['pickedUpBy'];
                                                if ($pickedUpBy == 0) {
                                                    $showPickUpBy = 'Not Pickup yet';
                                                } else {
                                                    $sqlPickUp = "SELECT * FROM vendor where id ='$pickedUpBy'";
                                                    $queryPickUp = mysqli_query($connect, $sqlPickUp);
                                                    $resPickUp = mysqli_fetch_array($queryPickUp);
                                                    $vendorName = $resPickUp['fullName'];
                                                    $showPickUpBy = $vendorName;
                                                }
                                                $modelId = $resModel['model_id'];
                                                $sqlModelId = "SELECT * FROM model where id = '$modelId'";
                                                $queryModelId = mysqli_query($connect, $sqlModelId);
                                                $resModelName = mysqli_fetch_array($queryModelId);
                                                $modelName = $resModelName['model_name'];
                                        ?>
                                        <tr>
                                            <style>
                                                .bold {
                                                    font-weight: 700 !important;
                                                }
                                            </style>
                                            <td data-label="Brand Name"><?php echo $brandName; ?></td>
                                            <td data-label="Model"><?php echo $modelName; ?></td>
                                            <td data-label="Selling Price"><?php echo $sellingPrice; ?></td>
                                            <td data-label="Picked up by"><?php echo $showPickUpBy; ?></td>
                                            <td data-label="Status"><?php echo $showStatus; ?></td>
                                            <td data-label="Edit">
                                                <p data-placement="top" data-toggle="tooltip" title="Re schedule">
                                                    <button class="btn btn-secondary btn-xs table-icons" id="test"
                                                        value="<?php echo $orderId; ?>" data-title="schedule"
                                                        data-toggle="modal" data-target="#edit"
                                                        onclick="viewAction(this.value)"><i
                                                            class="fas fa-eye table-icons"></i></button></p>
                                            </td>
                                            <td data-label="Edit">
                                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                                        <?php echo $disabled; ?> value="<?php echo $orderId; ?>"
                                                        class="btn btn-primary btn-xs table-icons" data-title="Edit"
                                                        data-toggle="modal" data-target="#reschedule"
                                                        onclick="reschedule(this.value)"><i
                                                            class="fas fa-calendar-day"></i></button></p>
                                            </td>
                                            <td data-label="Delete">
                                                <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                                        <?php echo $disabled; ?> value="<?php echo $orderId; ?>"
                                                        class="btn btn-danger btn-xs table-icons" data-title="Delete"
                                                        data-toggle="modal" data-target="#delete"
                                                        onclick="deleteOrder(this.value)"><i
                                                            class="fas fa-trash-alt table-icons"></i></button></p>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        } ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    <style>
                        /* increasing model width */
                        @media(min-width:768px) {
                            .mdl-width {
                                width: 720px !important;
                            }
                        }
                    </style>
                    <!-- view model -->
                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit"
                        aria-hidden="true">
                        <div class="modal-dialog mdl-width">
                            <div class="modal-content mdl-width">
                                <div class="modal-header">
                                    <h4 class="modal-title custom_align" id="Heading">Order Preview</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <script>
                                        function viewAction(id) {
                                            var veiwAction = new XMLHttpRequest();
                                            veiwAction.open("GET", "https://cashkar.in/ajax/user/view.php?oid=" + id, "TRUE");
                                            veiwAction.send();
                                            veiwAction.onreadystatechange = function () {
                                                if (veiwAction.status == 200 && veiwAction.readyState == 4) {
                                                    document.getElementById('view-box').innerHTML = veiwAction
                                                        .responseText;
                                                }
                                            };
                                        }
                                    </script>
                                    <div class="view-body" id="view-box">

                                    </div>
                                </div>
                                <div class="modal-footer ">
                                    <button type="button" data-dismiss="modal" class="btn btn-success"><span
                                            class="glyphicon glyphicon-ok-sign"></span>Done</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- reschedule model -->
                    <div class="modal fade" id="reschedule" tabindex="-1" role="dialog" aria-labelledby="edit"
                        aria-hidden="true">
                        <div class="modal-dialog mdl-width">
                            <div class="modal-content mdl-width">
                                <div class="modal-header">
                                    <h4 class="modal-title custom_align" id="Heading">Reschedule PickUp</h4>
                                    <button type="button" class="close" data-dismiss="modal" id="closeBtn"
                                        aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <script>
                                        function reschedule(id) {
                                            var inputDateVal = document.getElementById('update');
                                            var dateData = document.getElementById('datePickup');
                                            dateData.onchange = function () {
                                                var newDateChange = dateData.value;
                                                inputDateVal.removeAttribute('disabled');
                                                inputDateVal.onclick = function () {
                                                    var reschedule = new XMLHttpRequest();
                                                    reschedule.open("GET",
                                                        `https://cashkar.in/ajax/user/reschedule.php?new-date=${newDateChange}&oid=${id}`,
                                                        "TRUE");
                                                    reschedule.send();

                                                    reschedule.onreadystatechange = function () {
                                                        if (reschedule.status == 200 && reschedule
                                                            .readyState == 4) {
                                                            var closeBtn = document.getElementById(
                                                                'closeBtn');
                                                            closeBtn.click();
                                                            document.getElementById('msg-bx').innerHTML =
                                                                reschedule.responseText;
                                                        }
                                                    };

                                                }
                                            }
                                        }
                                    </script>
                                    <div class="view-body" id="reschedule-box">
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="reschedule">Select Another Date:</label>
                                                <input type="date" name="date" id="datePickup" class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer ">
                                    <button type="button" disabled id="update" class="btn btn-success"><span
                                            class="glyphicon glyphicon-ok-sign"></span>Update</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-warning"><span
                                            class="glyphicon glyphicon-ok-sign"></span>Cancel</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>



                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                <button type="button" class="close" id="closeBtnD" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <script>
                                    function deleteOrder(id) {
                                        var delBtn = document.getElementById('deleteBtn');
                                        delBtn.onclick = function () {
                                            //    alert(id);
                                            var delQry = new XMLHttpRequest();
                                            delQry.open("GET", "https://cashkar.in/ajax/user/delete-order.php?oid=" + id,
                                                "TRUE");
                                            delQry.send();

                                            delQry.onreadystatechange = function () {
                                                if (delQry.status == 200 && delQry.readyState == 4) {
                                                    var closeBtn = document.getElementById('closeBtnD');
                                                    closeBtn.click();
                                                    document.getElementById('msg-bx').innerHTML = delQry
                                                        .responseText;
                                                }
                                            };

                                        }

                                    }
                                </script>
                                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete this Record?</div>

                            </div>
                            <div class="modal-footer ">
                                <button type="button" id="deleteBtn" class="btn btn-success"><span
                                        class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> No</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/linechart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"
        integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw=="
        crossorigin="anonymous"></script>

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