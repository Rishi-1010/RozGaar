<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Seeker Profile | Roz-गार</title>
    <meta name="description" content="Job Seeker Profile Management on Roz-गार">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../../../img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/themify-icons.css">
    <link rel="stylesheet" href="../../../css/nice-select.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
    <!-- Header Section -->
    <header class="page-banner">
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="../../../index.php">
                                        <img width="150" height="150" src="../../../img/logo.png" alt="Roz-गार Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="../../../index.php">Home (होम)</a></li>
                                            <li><a href="../jobseeker.html">Dashboard (डैशबोर्ड)</a></li>
                                            <li><a href="../../../contact.html">Contact (संपर्क करें)</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="../../../logout.php">Logout (लॉगआउट)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Profile Section -->
    <div class="profile-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="profile-form-box">
                        <h2>Profile Management (प्रोफ़ाइल प्रबंधन)</h2>
                        <form action="../../../database/create_jobseeker_profile_table.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Profile Picture (प्रोफ़ाइल फोटो):</label>
                                <input type="file" name="profile_picture" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Full Name (पूरा नाम):</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Email (ईमेल):</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Phone (फ़ोन):</label>
                                <input type="tel" name="phone" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Education (शिक्षा):</label>
                                <select name="education" class="form-control" required>
                                    <option value="10th">10th | 10वीं</option>
                                    <option value="12th">12th | 12वीं</option>
                                    <option value="graduate">Graduate | स्नातक</option>
                                    <option value="postgraduate">Post Graduate | स्नातकोत्तर</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Skills (कौशल):</label>
                                <textarea name="skills" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Experience (अनुभव):</label>
                                <select name="experience" class="form-control" required>
                                    <option value="fresher">Fresher | फ्रेशर</option>
                                    <option value="1-2">1-2 years | 1-2 साल</option>
                                    <option value="2-5">2-5 years | 2-5 साल</option>
                                    <option value="5+">5+ years | 5+ साल</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Location (स्थान):</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary update-btn">Update Profile (प्रोफ़ाइल अपडेट करें)</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/main.js"></script>
</body>
</html> 