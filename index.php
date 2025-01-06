<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx"></html>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
<header>
    <div class="header-area">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <!-- Logo Section -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img width="200" height="200" src="img/logo.png" alt="Roz-गार Logo">
                                </a>
                            </div>
                        </div>
                        <!-- Navigation Section -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home (होम)</a></li>
                                        <li><a href="jobs.php">Browse Job (नौकरी देखें)</a></li>
                                        <li><a href="contact.html">Contact (संपर्क करें)</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Appointment Buttons Section -->
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="Appointment">
                                <?php if(!isset($_SESSION['user_id'])): ?>
                                    <div class="phone_num d-none d-xl-block">
                                        <div class="login-register-buttons">
                                            <a href="login/login.html" class="login-btn">Login (लॉग इन)</a>
                                            <a href="Registration/register.html" class="register-btn">Register (पंजीकरण)</a>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="phone_num d-none d-xl-block">
                                        <div class="login-register-buttons">
                                            <a href="dashboard/JobProvider/jobprovider.html" class="login-btn">Dashboard (डैशबोर्ड)</a>
                                            <a href="logout.php" class="register-btn">Logout (लॉगआउट)</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- Post a Job Button -->
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="post-job/hire.html">Post a Job (नौकरी डालें)</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="slider_text">
                        <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">4536+ Jobs Available</h5>
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find a Job</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Your job description here</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="ilstration_img wow fadeInRight d-none d-lg-block" data-wow-duration="1s" data-wow-delay=".2s">
                        <img src="img/banner/illustration.png" alt="Job Search Illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->


   <!-- catagory_area -->
<div class="catagory_area">
    <div class="container">
        <div class="row cat_search">
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <input type="text" placeholder="Search keyword (कीवर्ड खोजें)">
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <select class="wide">
                        <option data-display="Location (स्थान)">Location (स्थान)</option>
                        <option value="1">Mumbai (मुंबई)</option>
                        <option value="2">Delhi (दिल्ली)</option>
                        <option value="3">Bangalore (बेंगलुरु)</option>
                        <option value="4">Hyderabad (हैदराबाद)</option>
                        <option value="5">Chennai (चेन्नई)</option>
                        <option value="6">Kolkata (कोलकाता)</option>
                        <option value="7">Pune (पुणे)</option>
                        <option value="8">Ahmedabad (अहमदाबाद)</option>
                        <option value="9">Jaipur (जयपुर)</option>
                        <option value="10">Noida (नोएडा)</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="job_btn">
                    <a href="#" class="boxed-btn3">Find Job (नौकरी खोजें)</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_search d-flex align-items-center">
                    <span>Popular Search (लोकप्रिय खोज):</span>
                    <ul>
                        <li><a href="#">Home Tuition (होम ट्यूशन)</a></li>
                        <li><a href="#">Data Entry (डाटा एंट्री)</a></li>
                        <li><a href="#">Cooking & Catering (खाना बनाना और कैटरिंग)</a></li>
                        <li><a href="#">Part-time Sales (पार्ट-टाइम सेल्स)</a></li>
                        <li><a href="#">Office Assistant (ऑफिस असिस्टेंट)</a></li>
                        <li><a href="#">Delivery Jobs (डिलीवरी जॉब्स)</a></li>
                        <li><a href="#">Content Writing (कंटेंट राइटिंग)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ catagory_area -->


    <!-- popular_catagory_area_start  -->
<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Popular Categories (लोकप्रिय श्रेणियाँ)</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <a href="jobs\tutorjob.html"><h4>Home Tuition (होम ट्यूशन)</h4></a>
                    <p><span>₹3-15K</span> मासिक</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <a href="jobs\data_entry_job.html"><h4>Data Entry (डाटा एंट्री)</h4></a>
                    <p><span>₹8-15K</span> मासिक</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <a href="jobs\home_cook_tiffin_service.html"><h4>Cooking & Tiffin Service (खाना और टिफिन सेवा)</h4></a>
                    <p><span>₹5-20K</span> मासिक</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                    <a href="jobs\beauty_wellness_consultant.html"><h4>Beauty & Wellness (सौंदर्य और स्वास्थ्य)</h4></a>
                    <p><span>₹8-25K</span> मासिक</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                    <a href="jobs\delivery_partner.html"><h4>Delivery Partner (डिलीवरी पार्टनर)</h4></a>
                    <p><span>₹10-20K</span> मासिक</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                    <a href="jobs.php"><h4>Office Assistant (ऑफिस असिस्टेंट)</h4></a>
                    <p><span>₹12-18K</span> मासिक</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                    <a href="jobs.php"><h4>Content Writing (कंटेंट राइटिंग)</h4></a>
                    <p><span>₹5-15K</span> मासिक</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="jobs.php"><h4>Retail Sales (रिटेल सेल्स)</h4></a>
                    <p><span>₹10-18K</span> मासिक</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_catagory_area_end  -->


    <!-- job_listing_area_start -->
<div class="job_listing_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Job Listings (नौकरी सूची)</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brouse_job text-right">
                    <a href="jobs.php" class="boxed-btn4">Browse More Jobs (अधिक नौकरियाँ देखें)</a><br><br><br>
                </div>
            </div>
        </div>
        <div class="job_lists">
            <div class="row">
                <!-- Job 1 -->
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/company/tutor.svg" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="jobs\tutorjob.html"><h4>Math & Science Tutor (Class 6-10)</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p><i class="fa fa-map-marker"></i> Noida</p>
                                    </div>
                                    <div class="location">
                                        <p><i class="fa fa-money"></i> ₹200-300/hour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a href="jobs\tutorjob.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Job 2 -->
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/company/data_entry.svg" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="jobs\data_entry_job.html"><h4>Data Entry Operator (डाटा एंट्री ऑपरेटर)</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p><i class="fa fa-map-marker"></i> Delhi</p>
                                    </div>
                                    <div class="location">
                                        <p><i class="fa fa-money"></i> ₹8,000-15,000/month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a href="jobs\data_entry_job.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Job 3 -->
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/company/cooking.svg" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="jobs\home_cook_tiffin_service.html"><h4>Home Cook / Tiffin Service (होम कुक / टिफिन सेवा)</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p><i class="fa fa-map-marker"></i> Mumbai</p>
                                    </div>
                                    <div class="location">
                                        <p><i class="fa fa-money"></i> ₹10,000-20,000/month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a href="jobs\home_cook_tiffin_service.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Job 4 -->
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/company/delivery.svg" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="jobs\delivery_partner.html"><h4>Delivery Partner (डिलीवरी पार्टनर)</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p><i class="fa fa-map-marker"></i> Bengaluru</p>
                                    </div>
                                    <div class="location">
                                        <p><i class="fa fa-money"></i> ₹12,000-20,000/month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a href="jobs\delivery_partner.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Job 5 -->
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/company/beauty.svg" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="jobs\beauty_wellness_consultant.html"><h4>Beauty & Wellness Consultant (सौंदर्य और स्वास्थ्य)</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p><i class="fa fa-map-marker"></i> Jaipur</p>
                                    </div>
                                    <div class="location">
                                        <p><i class="fa fa-money"></i> ₹15,000-25,000/month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a href="jobs\beauty_wellness_consultant.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end -->


    



    <!-- job_searcing_wrap  -->
<div class="job_searcing_wrap overlay">
    <div class="container">
        <div class="row">
            <!-- Looking for a Job section -->
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Looking for a Job? (क्या आप नौकरी ढूंढ रहे हैं?)</h3>
                    <p>Browse available part-time and easy jobs like home tuition, data entry, cooking, and more.</p>
                    <a href="jobs.php" class="boxed-btn3">Browse Jobs (नौकरियाँ देखें)</a>
                </div>
            </div>
            <!-- Looking for an Expert section -->
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Looking for Help? (क्या आप मदद चाहते हैं?)</h3>
                    <p>Post your job requirements and hire people for part-time or simple tasks.</p>
                    <a href="post-job/hire.html" class="boxed-btn3">Post a Job (नौकरी पोस्ट करें)</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_searcing_wrap end  -->


    


   <!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <!-- Footer Logo and Contact Information -->
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <p>
                            teamrozgaar@gmail.com <br>
                            +91 123456789 <br>
                            24, Rishi Society, Aanya Nagar
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Company Section (renamed for relevance) -->
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            About Us
                        </h3>
                        <ul>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">How It Works</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Job Categories (Simplified) -->
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Job Categories
                        </h3>
                        <ul>
                            <li><a href="#">Teaching & Tuition</a></li>
                            <li><a href="#">Data Entry</a></li>
                            <li><a href="#">Home Cooking</a></li>
                            <li><a href="#">Part-time Sales</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Newsletter Subscription -->
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                        <h3 class="footer_title">
                            Subscribe for Updates
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your email">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Stay updated with the latest jobs and opportunities!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end -->


    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>

