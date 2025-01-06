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
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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

    <!-- bradcam_area -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>4536+ Jobs Available | 4536+ नौकरियाँ उपलब्ध हैं</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area -->

<!-- job_listing_area_start -->
<div class="job_listing_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="job_filter white-bg">
                    <div class="form_inner white-bg">
                        <h3>Filter | फ़िल्टर करें</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <input type="text" placeholder="Search for job | काम का नाम खोजें">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide">
                                            <option data-display="Location | स्थान">Location | स्थान</option>
                                            <option value="1">Mumbai | मुंबई</option>
                                            <option value="2">Delhi | दिल्ली</option>
                                            <option value="3">Bangalore | बेंगलुरु</option>
                                            <option value="4">Chennai | चेन्नई</option>
                                            <option value="5">Hyderabad | हैदराबाद</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide">
                                            <option data-display="Category | श्रेणी">Category | श्रेणी</option>
                                            <option value="1">Home Tutor | होम ट्यूटर</option>
                                            <option value="2">Data Entry | डेटा एंट्री</option>
                                            <option value="3">Cooking | खाना बनाना</option>
                                            <option value="4">Delivery | डिलीवरी</option>
                                            <option value="5">Office Assistant | ऑफिस सहायक</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide">
                                            <option data-display="Experience | अनुभव">Experience | अनुभव</option>
                                            <option value="1">Fresher | शुरुआत करने वाला</option>
                                            <option value="2">1+ years | 1+ साल</option>
                                            <option value="3">2+ years | 2+ साल</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide">
                                            <option data-display="Job type | काम का प्रकार">Job type | काम का प्रकार</option>
                                            <option value="1">Full-time | पूरा समय</option>
                                            <option value="2">Part-time | आंशिक समय</option>
                                            <option value="3">Freelance | स्वतंत्र</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide">
                                            <option data-display="Qualification | शिक्षा">Qualification | शिक्षा</option>
                                            <option value="1">10th | 10वीं</option>
                                            <option value="2">12th | 12वीं</option>
                                            <option value="3">Graduation | स्नातक</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide">
                                            <option data-display="Gender | लिंग">Gender | लिंग</option>
                                            <option value="1">Male | पुरुष</option>
                                            <option value="2">Female | महिला</option>
                                            <option value="3">Any | कोई भी</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="range_wrap">
                        <label for="amount">Salary range | वेतन सीमा:</label>
                        <div id="slider-range"></div>
                        <p>
                            <input type="text" id="amount" readonly style="border:0; color:#7A838B; font-size: 14px; font-weight:400;">
                        </p>
                    </div>
                    <div class="reset_btn">
                        <button class="boxed-btn3 w-100" type="submit">Reset | रीसेट करें</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="recent_joblist_wrap">
                    <div class="recent_joblist white-bg ">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4>Job Listing | नौकरी की सूची</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="serch_cat d-flex justify-content-end">
                                    <select>
                                        <option data-display="Most Recent | नवीनतम">Most Recent | नवीनतम</option>
                                        <option value="1">Home Tutor | होम ट्यूटर</option>
                                        <option value="2">Data Entry | डेटा एंट्री</option>
                                        <option value="3">Cook | कुक</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job_lists m-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/1.svg" alt="">
                                        </div>
                                        <div class="jobs_conetent">
                                            <a href="jobs\tutorjob.html"><h4>Home Tutor | होम ट्यूटर</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                    <p><i class="fa fa-map-marker"></i> Mumbai | मुंबई</p>
                                                </div>
                                                <div class="location">
                                                    <p><i class="fa fa-clock-o"></i> Part-time | आंशिक समय</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="jobs\tutorjob.html" class="boxed-btn3">Apply Now | अभी आवेदन करें</a>
                                        </div>
                                        <div class="date">
                                            <p>Date line: 31 Jan 2020 | आवेदन की अंतिम तिथि: 31 जनवरी 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/2.svg" alt="">
                                        </div>
                                        <div class="jobs_conetent">
                                            <a href="jobs\data_entry_job.html"><h4>Data Entry | डेटा एंट्री</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                    <p><i class="fa fa-map-marker"></i> Delhi | दिल्ली</p>
                                                </div>
                                                <div class="location">
                                                    <p><i class="fa fa-clock-o"></i> Full-time | पूरा समय</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="jobs\data_entry_job.html" class="boxed-btn3">Apply Now | अभी आवेदन करें</a>
                                        </div>
                                        <div class="date">
                                            <p>Date line: 31 Jan 2020 | आवेदन की अंतिम तिथि: 31 जनवरी 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/3.svg" alt="">
                                        </div>
                                        <div class="jobs_conetent">
                                            <a href="jobs\home_cook_tiffin_service.html"><h4>Cook | कुक</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                    <p><i class="fa fa-map-marker"></i> Bangalore | बेंगलुरु</p>
                                                </div>
                                                <div class="location">
                                                    <p><i class="fa fa-clock-o"></i> Full-time | पूरा समय</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="jobs\home_cook_tiffin_service.html" class="boxed-btn3">Apply Now | अभी आवेदन करें</a>
                                        </div>
                                        <div class="date">
                                            <p>Date line: 31 Jan 2020 | आवेदन की अंतिम तिथि: 31 जनवरी 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_wrap text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ job_listing_area_end -->


    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                finloan@support.com <br>
                                +10 873 672 6782 <br>
                                600/D, Green road, NewYork
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
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="#">About </a></li>
                                <li><a href="#"> Pricing</a></li>
                                <li><a href="#">Carrier Tips</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                Category
                            </h3>
                            <ul>
                                <li><a href="#">Design & Art</a></li>
                                <li><a href="#">Engineering</a></li>
                                <li><a href="#">Sales & Marketing</a></li>
                                <li><a href="#">Finance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

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
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/range.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>


	<script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 24600,
                values: [ 750, 24600 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] +"/ Year" );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                " - $" + $( "#slider-range" ).slider( "values", 1 ) + "/ Year");
        } );
        </script>
</body>

</html>