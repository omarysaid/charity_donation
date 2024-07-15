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
    <link href=".assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


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
                    <li><a href="../fontend/events.php">
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
            <div class="container" style="background-color: white;border-radius: 20px;">

                <h7 style="color: black;">
                    Discover more about who we are, what we stand for, and how you can join us in making a difference.






                </h7>
            </div>
        </div><!-- End Breadcrumbs -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up" style="margin-top: 50px;">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/font1.jpg" class="img-fluid" alt="" style="height: 500px;">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Welcome to [Charity Donation], where compassion meets empowerment.
                        </h3>
                        <p class="fst-italic">
                            At [Charity Donation], we believe in the power of compassion to transform lives. We are a
                            dedicated team of individuals
                            who are passionate about making a positive impact in our communities and beyond.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Our mission:
                                to extend a helping hand to those in need and empower them to create brighter
                                futures
                                for
                                themselves and their communities.</li><br><br>

                            <li><i class="bi bi-check-circle"></i>Our vission: Through our commitment to compassion, we
                                strive to
                                uplift and support individuals facing adversity, providing them with
                                the resources, assistance, and encouragement they need to overcome challenges and
                                thrive.</li><br>

                            <li><i class="bi bi-check-circle"></i>
                                At the core of our work is the belief in empowerment. We believe that every individual
                                has the potential to achieve
                                greatness, given the right opportunities and support</li><br><br>
                        </ul>
                        <p>
                            Join us on our journey of compassion and empowerment. Together, we can make a difference.
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <h7>Sreet childrens</h7>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <h7>Orphans</h7>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <h7>Drugs_Addictions</h7>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <h7>Refugees</h7>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" style="margin-top: 60px;">

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
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>