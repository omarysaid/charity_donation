<?php
session_start();
include './connections/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Charity Donation System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
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
                    <li><a class="active" href="../CharitySystem/index.php">
                            <h7>Home</h7>
                        </a></li>
                    <li><a href="./fontend/about.php">
                            <h7>About_us</h7>
                        </a></li>
                    <li><a href="./fontend//team.php">
                            <h7>Teams</h7>
                        </a></li>
                    <li><a href="./fontend/events.php">
                            <h7>Events</h7>
                        </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="./backend/login.php" class="get-started-btn">ENTER</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Getting envolved Today,<br>Donate child for the <br> better lives tomorrow</h1>
            <h2>"They are us, we are them"</h2>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/charity.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h7>Volunteer in Breaking the Cycle of Poverty:</h7>

                        <ul>
                            <li><i class="bi bi-check-circle"></i> Accessible environments are crucial for people with
                                disabilities to fully participate in society..</li>
                            <li><i class="bi bi-check-circle"></i> Access to quality healthcare services is essential
                                for managing health conditions, preventing secondary complications,
                                and promoting overall well-being.</li>
                            <li><i class="bi bi-check-circle"></i> People with needs have the right to inclusive and
                                accessible education at all levels.</li>
                        </ul>


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

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Charity Donation?</h3>
                            <p>
                                Participating in or supporting charity events can be empowering for both beneficiaries
                                and donors alike. For
                                beneficiaries, it can provide essential resources and support to overcome challenges and
                                improve their quality of life.
                                For donors, it offers a sense of fulfillment and purpose, knowing that their
                                contributions are making a meaningful
                                difference in the world.


                            </p>
                            <div class="text-center">
                                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h7>Building Community</h7>
                                        <p>Charity events bring people together from diverse backgrounds who share a
                                            common goal of making a positive impact.


                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i><br>
                                        <h7>Basic Needs</h7>
                                        <p>often they lack access to basic necessities such as food, shelter, clothing,
                                            and healthcare. Charity can help
                                            fulfill these needs, ensuring that they have a better quality of life and
                                            improved well-being.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Psychosocial Support</h4>
                                        <p>

                                            Charity can fund programs that offer psychosocial support, counseling, and
                                            rehabilitation services to help street
                                            children heal and overcome their past experiences.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <h7>Common Needs</h7>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-4">

                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <img src="./assets/img/needs/food.png"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7> Foods</h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <img src="./assets/img/needs/water.jpg"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Water</a></h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <img src="./assets/img/needs/healthy.jpeg"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Healthcare services </h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">

                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <img src="./assets/img/needs/edumaterials.jpeg"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Educational Materials</h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <img src="./assets/img/needs/clothes.webp"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Clothing and Personal Items</h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <img src="./assets/img/needs/safety.jpeg"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Safety and Security Measures</h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">

                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <img src="./assets/img/needs/psychology.jpg"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Psychosocial Support</h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <img src="./assets/img/needs/empower.png"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Empowerment</h7>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <img src="./assets/img/needs/shelter.png"
                                style="height: 100px;width: 100px; border-radius: 30px;">
                            <h7>Shelter:</h7>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->


        <!-- ======= Events Section ======= -->
        <section id="events" class="events">

            <div class="container" data-aos="fade-up">
                <h7>Some Events</h7>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event 1.jpg" alt="...">
                            </div>
                            <div class="card-body">

                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p class="card-text">In the picture, residents of Karue street visited the orphanage
                                    homes in Magomeni, Dar es Salaam, where they were warmly
                                    welcomed by the head of the center, accompanied by the distribution of various
                                    donations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events/event4.jpg" alt="...">
                            </div>
                            <div class="card-body">

                                <p class="fst-italic text-center">Sunday, April 24th 2024</p>
                                <p class="card-text">
                                    In the picture, residents of Karue street visited the orphanage homes in Magomeni,
                                    Dar es Salaam, where they were warmly
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
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>