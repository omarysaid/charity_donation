<?php
session_start();
include './connections/connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Charity System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">CHARITY DONATION</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="../index.php">
                            <h7>Home</h7>
                        </a></li>
                    <li><a href="../fontend/about.php">
                            <h7>About_us</h7>
                        </a></li>
                    <li><a href="../fontend/team.php">
                            <h7>Teams</h7>
                        </a></li>
                    <li><a href="./events.php">
                            <h7>Events</h7>
                        </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="../backend/login.php" class="get-started-btn">ENTER</a>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container" style="background-color: white; border-radius: 30px;">

                <h7 style="color: black;">
                    Welcome to Our Charity Events Page!

                    Our charity events are more than just
                    gatherings – they're opportunities to create positive change, foster community spirit, and support
                    important causes.

                </h7>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event 1.jpg" alt="...">
                            </div>
                            <div class="card-body" style="margin-top: 30px;">
                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p>In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were
                                    warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event4.jpg" alt="...">
                            </div>
                            <div class="card-body" style="margin-top: 30px;">

                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p>In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were
                                    warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event5.webp" alt="...">
                            </div>
                            <div class="card-body" style="margin-top: 30px;">
                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p>In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event6.jpeg" alt="...">
                            </div>
                            <div class="card-body" style="margin-top: 30px;">

                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p>In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were
                                    warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event8.png" alt="...">
                            </div>
                            <div class="card-body" style="margin-top: 30px;">
                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p>In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were
                                    warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event9.jpg" alt="...">
                            </div>
                            <div class="card-body" style="margin-top: 30px;">
                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p>In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were
                                    warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event10.jpg" alt="...">
                            </div>
                            <div class="card-body" style="margin-top: 30px;">
                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p>In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were
                                    warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section><!-- End Events Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3 style="color: white;">CHARITY DONATION</h3>
                        <p style="color: white;">
                            Dar-Es- Salaam - Tanzania<br>
                            <strong>Phone:</strong> +255 672488849<br>
                            <strong>Email:</strong> charitydonation@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4 style="color: white;">Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">
                                    <h4 style="color: white;">Home</h4>
                                </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="./about.html">
                                    <h4 style="color: white;">About us</h4>
                                </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="./trainers.html">
                                    <h4 style="color: white;">Team</h4>
                                </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="./events.html">
                                    <h4 style="color: white;">Events</h4>
                                </a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 style="color: white;">Our Vision</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="#">
                                    <h4 style="color: white;">Building Community</h4>
                                </a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="#">
                                    <h4 style="color: white;">Charity Events</h4>
                                </a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="#">
                                    <h4 style="color: white;">Connect people's needs</h4>
                                </a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="#">
                                    <h4 style="color: white;">Ensuring Socilalisations</h4>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4 style="color: white;">Join us</h4>
                        <p style="color: white;">Come closser with us for charity donations</p>

                    </div>

                </div>
            </div>
        </div>


    </footer><!-- End Footer -->

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>