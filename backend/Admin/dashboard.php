<?php
session_start();
include '../connections/connection.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>charitySystem</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./themes/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./themes/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./themes/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./themes/css/style.css" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>


    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a class="brand-logo">

                CHARITY DONATION
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">

                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">

                                    <i class="mdi mdi-account"></i>

                                </a>
                                <b style="color:#001F3F">
                                    <?php echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''; ?></b>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="../logout.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Sidebar start here
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">ROLES</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../role/allRoles.php">View_All</a></li>

                        </ul>
                    </li>


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">

                            <i class="icon icon-app-store">
                            </i>
                            <span class="nav-text">DONORS</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../donors/allDoners.php">View_All</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">CAMPS</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../camp/allcamps.php">View_All</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!--**********************************
            Content body start here
        ***********************************-->
        <div class="content-body" style="margin-top: 50px; height: 200px;">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <?php
                                $sql = "SELECT COUNT(*) AS total_roles FROM role ";
                                $result = $connect->query($sql);
                                $total_roles = 0;
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $total_roles = $row["total_roles"];
                                }
                                // Do not close the connection here
                                ?>
                                <div class="stat-content">
                                    <div class="stat-text">TOTAL_ROLES </div>
                                    <div class="stat-digit"> <i class="fa fa-"></i>
                                        0<?php echo $total_roles; ?>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <?php
                                $sql = "SELECT COUNT(*) AS total_users FROM user WHERE role IS NULL";
                                $result = $connect->query($sql);
                                $total_users = 0;
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $total_users = $row["total_users"];
                                }
                                // Do not close the connection here
                                ?>
                                <div class="stat-content">
                                    <div class="stat-text">REGISTERED-DONORS</div>
                                    <div class="stat-digit"> <i class="fa fa-"></i>
                                        0<?php echo $total_users; ?>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-100" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <?php
                                $sql = "SELECT COUNT(*) AS total_camp FROM camp ";
                                $result = $connect->query($sql);
                                $total_camp = 0;

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $total_camp = $row["total_camp"];
                                }
                                // Do not close the connection here
                                ?>
                                <div class="stat-content">
                                    <div class="stat-text">TOTAL-CAMPS</div>
                                    <div class="stat-digit"> <i class="fa fa-"></i>
                                        0<?php echo $total_camp; ?>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /# column -->
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end here
        ***********************************-->
    </div>


    <!-- Required vendors -->
    <script src="./themes/vendor/global/global.min.js"></script>
    <script src="./themes/js/quixnav-init.js"></script>
    <script src="./themes/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./themes/vendor/raphael/raphael.min.js"></script>
    <script src="./themes/vendor/morris/morris.min.js"></script>


    <script src="./themes/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./themes/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./theme/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./themes/vendor/flot/jquery.flot.js"></script>
    <script src="./themes/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./themes/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./themes/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./themes/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./themes/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./themes/js/dashboard/dashboard-1.js"></script>

</body>

</html>