<?php 
session_start();
ob_start();
include "connection.inc.php";
include "function.inc.php";
 $loginStatus = $_SESSION['isLogin'];
 $username = $_SESSION['admin_username'];
 if (!(isset($_SESSION['isLogin'])) and $_SESSION['islogin'] != 1) {
     $msg = "<p class='error-text'>Please login to access</p>";
     $_SESSION['loginReturnMsg'] = $msg;
     header("location:login.php");
 }
 $sql = "SELECT * FROM `admin` where username = '$username'";
 $queryAdmin = mysqli_query($connect, $sql);
 $result = mysqli_fetch_array($queryAdmin);
 $adminId = $result['id'];
 $adminName = $result['fullName'];
 $adminImg = $result['profileImg'];
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gadgetzco Admin - Admin Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="custom.css">
<script src="https://cdn.tiny.cloud/1/kfslrspesb24b7pi6dotvv24hf6fmjcywwseglapiz0pvvlj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
        
        .no-link{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="">
                        <?php 
                        $newSql = "SELECT * FROM orderlist where assignTo = 0";
                        $queryNew = mysqli_query($connect,$newSql);
                        if(mysqli_num_rows($queryNew) > 0){
                            $addClass = "badge badge-success";
                            $newTxt = "new";
                        }
                        ?>
                        <a href="order-list.php"><i class="menu-icon fa fa-list"></i>Orders Received<span class="<?php echo $addClass;?>"><?php echo $newTxt;?></span></a>
                    </li>
                    <li class="">
                        <a href="uncomplete-order.php"><i class="menu-icon fa fa-times"></i>Leads Received</a>
                    </li>
                    <!-- <li class="">
                        <a href="blogs.php"><i class="menu-icon fa fa-article"></i>Blog </a>
                    </li> -->
                    <li class="">
                        <a href="repair.php"><i class="menu-icon fa fa-refresh"></i>Repair </a>
                    </li>
                    <li class="">
                        <a href="models.php"><i class="menu-icon fa fa-font-awesome"></i>Add New Model</a>
                    </li>
                    <li class="">
                        <a href="email-data.php"><i class="menu-icon fa fa-envelope-square"></i>Newsletter Emails</a>
                    </li><hr>
                                        <li class="">
                        <a href="contact-data.php"><i class="menu-icon fa fa-paper-plane-o"></i>Contact Emails</a>
                    </li><hr>
                    <li class="">
                        <a href="add-vendor.php"><i class="menu-icon fa fa-user-plus"></i>Add Vendor </a>
                    </li><hr>
                    <li class="">
                        <a href="add-repair.php"><i class="menu-icon fa fa-refresh"></i>Repair Rates </a>
                    </li>
                    <!-- <p class='pl-4'>Store </p>
                    <li class="">
                        <a href="store_category.php"><i class="menu-icon fa fa-cart"></i>Product Category</a>
                    </li>
                    <li class="">
                        <a href="product_order.php"><i class="menu-icon fa fa-user"></i>Product Order</a>
                    </li>
                    
                    <li class="">
                        <a href="products.php"><i class="menu-icon fa fa-cart"></i>Products</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/avatar/4.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->