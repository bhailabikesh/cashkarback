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
    <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
    <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
    <title>User Dashboard</title>

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

</head>

<body id="page-top" style="background-color:#fff!important;">
    <?php include "overlay-menu.php"; ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

            <?php include "u-menu.php";?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Collapse button -->
                    <div class="sidenav-toggler hide">
                        <section>
                            <a href="#" onclick="openNav()"><i class="fas fa-bars"></i></a>
                        </section>
                    </div>
                    <!-- Full Screen Btn -->
                    <section>
                        <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                            <i class="full-screen feather icon-maximize"></i>
                        </a>
                    </section>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username</span> -->
                                <img class="img-profile rounded-circle" src="./assets/img/user.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- <div class="row"> -->


                    <!-- <div class="col-xl-9 col-lg-8"> -->
                    <!-- <div class="card shadow mb-4"> -->
                    <!-- Incomplete Orders-->
                    <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"> -->
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Incomplete Orders</h6> -->
                    <!-- </div> -->
                    <!-- Card Body -->
                    <!-- <div class="card-body">
                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th>Address</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>


                                        <tbody>

                                            <tr>
                                                <td data-label="Brand">Kaji</td>
                                                <td data-label="Price">$11110</td>
                                                <td data-label="Address">Dang</td>
                                                <td><button
                                                    class="btn btn-success btn-sm table-icons" data-title="Delete"
                                                    data-toggle="modal" data-target="#delete"><i
                                                        class="fas fa-check table-icons"></i> Accept</button></p>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Brand">Kaji</td>
                                                <td data-label="Price">$11110</td>
                                                <td data-label="Address">Dang</td>
                                                <td><button
                                                    class="btn btn-success btn-sm table-icons" data-title="Delete"
                                                    data-toggle="modal" data-target="#delete"><i
                                                        class="fas fa-check table-icons"></i> Accept</button></p>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Brand">Kaji</td>
                                                <td data-label="Price">$11110</td>
                                                <td data-label="Address">Dang</td>
                                                <td><button
                                                    class="btn btn-success btn-sm table-icons" data-title="Delete"
                                                    data-toggle="modal" data-target="#delete"><i
                                                        class="fas fa-check table-icons"></i> Accept</button></p>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Brand">Kaji</td>
                                                <td data-label="Price">$11110</td>
                                                <td data-label="Address">Dang</td>
                                                <td><button
                                                    class="btn btn-success btn-sm table-icons" data-title="Delete"
                                                    data-toggle="modal" data-target="#delete"><i
                                                        class="fas fa-check table-icons"></i> Accept</button></p>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Brand">Kaji</td>
                                                <td data-label="Price">$11110</td>
                                                <td data-label="Address">Dang</td>
                                                <td><button
                                                    class="btn btn-success btn-sm table-icons" data-title="Delete"
                                                    data-toggle="modal" data-target="#delete"><i
                                                        class="fas fa-check table-icons"></i> Accept</button></p>
                                                    </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div> -->
                    <!-- </div> -->
                    <!-- </div> -->

                    <!-- </div> -->


                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white mx-auto" style="position: fixed;bottom:0;left:0;right:0;">
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
                        <a class="btn btn-primary" href="https://cashkar.in/user/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Custom scripts for all pages-->
        <script src="./assets/js/app.js"></script>

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