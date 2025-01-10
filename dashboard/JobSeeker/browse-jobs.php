<?php
session_start();
include('../../config/db_connection.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login/login.html");
    exit();
}

// Fetch all jobs from the database
$sql = "SELECT * FROM jobs ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Browse Jobs | Roz-गार</title>
    <meta name="description" content="Browse available jobs on Roz-गार">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/themify-icons.css">
    <link rel="stylesheet" href="../../css/nice-select.css">
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/gijgo.css">
    <link rel="stylesheet" href="../../css/animate.min.css">
    <link rel="stylesheet" href="../../css/slicknav.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="css/dashboard-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.png">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="../../index.php">
                                        <img width="200" height="200" src="../../img/logo.png" alt="Roz-गार Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="../../index.php">Home (होम)</a></li>
                                            <li><a href="jobseeker.html">Dashboard (डैशबोर्ड)</a></li>
                                            <li><a href="../../contact.html">Contact (संपर्क करें)</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="Appointment">
                                    <a class="boxed-btn3" href="logout.php">Logout (लॉगआउट)</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- After header, before main content -->
    <div class="bradcam_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text"><br>
                    <h2 class="section-title text-center mb-4">Available Jobs | उपलब्ध नौकरियां</h2>
                    <div class="text-center mb-5">
                        <a href="jobseeker.html" class="boxed-btn3">
                            <i class="fa fa-dashboard"></i> Dashboard | डैशबोर्ड
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <div class="job_listing_area">
                <div class="container">
                    <?php if ($result->num_rows > 0): ?>
                        <div class="job_lists">
                            <div class="row">
                                <?php while ($job = $result->fetch_assoc()): ?>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single_jobs white-bg d-flex justify-content-between">
                                            <div class="jobs_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="../../img/svg_icon/1.svg" alt="job icon">
                                                </div>
                                                <div class="jobs_conetent">
                                                    <h4><?php echo htmlspecialchars($job['job_title']); ?></h4>
                                                    <div class="links_locat d-flex align-items-center">
                                                        <div class="location">
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>
                                                                <?php echo htmlspecialchars($job['job_location']); ?>
                                                            </p>
                                                        </div>
                                                        <div class="location">
                                                            <p>
                                                                <i class="fa fa-clock-o"></i>
                                                                <?php echo htmlspecialchars($job['job_type']); ?>
                                                            </p>
                                                        </div>
                                                        <div class="location">
                                                            <p>
                                                                <i class="fa fa-money"></i>
                                                                ₹<?php echo htmlspecialchars($job['salary']); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jobs_right">
                                                <div class="apply_now">
                                                    <a href="job-details.php?id=<?php echo $job['id']; ?>" 
                                                       class="boxed-btn3">View Details | विवरण देखें</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <div class="no_job_found">
                                <h3>No jobs found | कोई नौकरी नहीं मिली</h3>
                                <p>Check back later for new job listings.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS for Styling -->
    <style>
    .single_jobs {
        padding: 30px;
        margin-bottom: 20px;
        border: 1px solid #e8e8e8;
        border-radius: 5px;
        transition: all 0.3s;
    }

    .single_jobs:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .no_job_found {
        padding: 50px 20px;
        background: #f9f9f9;
        border-radius: 10px;
        margin: 20px 0;
    }

    .apply_now a {
        background: #00D363;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.3s;
    }

    .apply_now a:hover {
        background: #008F2E;
    }
    </style>
</body>
</html>
