<?php
session_start();
include('../../config/db_connection.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login/login.html");
    exit();
}

// Fetch jobs posted by this provider
$job_provider_id = $_SESSION['user_id'];
$sql = "SELECT * FROM jobs WHERE job_provider_id = ? ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $job_provider_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Posted Jobs | Roz-गार</title>
    <meta name="description" content="View all jobs posted by you on Roz-गार">
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
    <link rel="stylesheet" href="css/dashboard-style.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    
    <style>
    .bradcam_area {
        padding: 30px 0;
        text-align: center;
    }
    .bradcam_area .bradcam_text {
        margin-top: 0;
        padding: 10px 0;
    }
</style>

</head>

<body>
    <!-- header-start -->
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
                                            <li><a href="jobprovider.html">Dashboard (डैशबोर्ड)</a></li>
                                            <li><a href="../../contact.html">Contact (संपर्क करें)</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a class="boxed-btn3" href="../../post-job/hire.html">Post a Job (नौकरी डालें)</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="../../logout.php">Logout (लॉगआउट)</a>
                                    </div>
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
    <!-- header-end -->

    <!-- After header, before main content -->
    <div class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text"><br><br><br>
                    <h2 class="section-title text-center mb-4">Your Posted Jobs | आपकी पोस्ट की गई नौकरियां</h2>
                    <div class="text-center mb-5">
                        <a href="jobprovider.html" class="boxed-btn3">
                            <i class="fa fa-dashboard"></i> Dashboard | डैशबोर्ड
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- job_listing_area_start -->
    <div class="job_listing_area plus_padding">
        <div class="container">

            <div class="job_listing_area">
                <div class="container">
                    <?php if ($result->num_rows > 0): ?>
                        <div class="job_lists">
                            <div class="row">
                                <?php while($job = $result->fetch_assoc()): ?>
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
                                                    <a href="edit_job.php?id=<?php echo $job['id']; ?>" 
                                                       class="boxed-btn3">Edit | संपादित करें</a>
                                                    <a href="delete_job.php?id=<?php echo $job['id']; ?>" 
                                                       class="boxed-btn3" 
                                                       style="background: #dc3545;"
                                                       onclick="return confirm('Are you sure you want to delete this job? | क्या आप वाकई इस नौकरी को हटाना चाहते हैं?')">
                                                       Delete | हटाएं
                                                    </a>
                                                </div>
                                                <div class="job_details">
                                                    <h4>Job Description | नौकरी का विवरण:</h4>
                                                    <p><?php echo nl2br(htmlspecialchars($job['job_description'])); ?></p>
                                                </div>
                                                <div class="job_contact">
                                                    <p><strong>Contact | संपर्क:</strong> <?php echo htmlspecialchars($job['contact_info']); ?></p>
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
                                <h3>No jobs posted yet | अभी तक कोई नौकरी पोस्ट नहीं की गई</h3>
                                <p>Click on "Post a Job" to add your first job listing | अपनी पहली नौकरी लिस्टिंग जोड़ने के लिए "नौकरी पोस्ट करें" पर क्लिक करें</p>
                                <a href="../../post-job/hire.html" class="boxed-btn3 mt-4">Post a Job | नौकरी पोस्ट करें</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end -->

    <!-- Add this CSS to your style.css or in a style tag -->
    <style>
    .job_details {
        margin-top: 20px;
        padding: 15px;
        background: #f9f9f9;
        border-radius: 5px;
    }

    .job_contact {
        margin-top: 10px;
        padding: 10px 15px;
        background: #f0f8ff;
        border-radius: 5px;
    }

    .no_job_found {
        padding: 50px 20px;
        background: #f9f9f9;
        border-radius: 10px;
        margin: 20px 0;
    }

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

    .apply_now {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
    }

    .location {
        margin-right: 20px;
    }

    .location p i {
        margin-right: 5px;
        color: #00D363;
    }
    </style>
</body>
</html> 