<?php
session_start();
include('../../config/db_connection.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login/login.html");
    exit();
}

// Check if job ID is provided
if (!isset($_GET['id'])) {
    header("Location: myservices.php");
    exit();
}

$job_id = $_GET['id'];
$job_provider_id = $_SESSION['user_id'];

// Fetch job details
$stmt = $conn->prepare("SELECT * FROM jobs WHERE id = ? AND job_provider_id = ?");
$stmt->bind_param("ii", $job_id, $job_provider_id);
$stmt->execute();
$result = $stmt->get_result();
$job = $result->fetch_assoc();

if (!$job) {
    header("Location: myservices.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job | Roz-गार</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/dashboard-style.css">
    <style>
        .edit-field {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            margin-bottom: 10px;
            background: #fff;
            border-radius: 5px;
            border: 1px solid #e8e8e8;
        }
        .field-content {
            flex-grow: 1;
            margin-right: 15px;
        }
        .field-label {
            font-weight: 600;
            color: #001D38;
            margin-bottom: 5px;
        }
        .field-value {
            color: #666;
        }
        .edit-btn {
            padding: 8px 20px;
            background: #00D363;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .edit-btn:hover {
            background: #00b354;
        }
        .modal-header {
            background: #00D363;
            color: white;
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

    <section class="post-job-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Edit Job | नौकरी संपादित करें</h2><br><br><br><br>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="edit-field">
                        <div class="field-content">
                            <div class="field-label">Job Title | नौकरी का शीर्षक</div>
                            <div class="field-value"><?php echo htmlspecialchars($job['job_title']); ?></div>
                        </div>
                        <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editTitleModal">Edit</button>
                    </div>

                    <div class="edit-field">
                        <div class="field-content">
                            <div class="field-label">Job Type | नौकरी का प्रकार</div>
                            <div class="field-value"><?php echo htmlspecialchars($job['job_type']); ?></div>
                        </div>
                        <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editTypeModal">Edit</button>
                    </div>

                    <div class="edit-field">
                        <div class="field-content">
                            <div class="field-label">Location | स्थान</div>
                            <div class="field-value"><?php echo htmlspecialchars($job['job_location']); ?></div>
                        </div>
                        <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editLocationModal">Edit</button>
                    </div>

                    <div class="edit-field">
                        <div class="field-content">
                            <div class="field-label">Salary | वेतन</div>
                            <div class="field-value"><?php echo htmlspecialchars($job['salary']); ?></div>
                        </div>
                        <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editSalaryModal">Edit</button>
                    </div>

                    <div class="edit-field">
                        <div class="field-content">
                            <div class="field-label">Description | विवरण</div>
                            <div class="field-value"><?php echo nl2br(htmlspecialchars($job['job_description'])); ?></div>
                        </div>
                        <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editDescriptionModal">Edit</button>
                    </div>

                    <div class="edit-field">
                        <div class="field-content">
                            <div class="field-label">Contact Info | संपर्क जानकारी</div>
                            <div class="field-value"><?php echo htmlspecialchars($job['contact_info']); ?></div>
                        </div>
                        <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editContactModal">Edit</button>
                    </div>

                    <div class="text-center mt-4">
                        <a href="manage-jobs.php" class="boxed-btn3">Back to Jobs | वापस नौकरियों पर</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals for each field -->
    <!-- Title Modal -->
    <div class="modal fade" id="editTitleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Job Title | नौकरी का शीर्षक संपादित करें</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="update_job.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="field" value="job_title">
                        <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                        <input type="text" class="form-control" name="value" value="<?php echo htmlspecialchars($job['job_title']); ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel | रद्द करें</button>
                        <button type="submit" class="btn btn-success">Save | सहेजें</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Job Type Modal -->
    <div class="modal fade" id="editTypeModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Job Type | नौकरी का प्रकार संपादित करें</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="update_job.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="field" value="job_type">
                        <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                        <select class="form-control" name="value" required>
                            <option value="Full-time" <?php echo ($job['job_type'] == 'Full-time') ? 'selected' : ''; ?>>Full-time | पूर्णकालिक</option>
                            <option value="Part-time" <?php echo ($job['job_type'] == 'Part-time') ? 'selected' : ''; ?>>Part-time | अंशकालिक</option>
                            <option value="Freelance" <?php echo ($job['job_type'] == 'Freelance') ? 'selected' : ''; ?>>Freelance | फ्रीलांस</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel | रद्द करें</button>
                        <button type="submit" class="btn btn-success">Save | सहेजें</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Location Modal -->
    <div class="modal fade" id="editLocationModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Location | स्थान संपादित करें</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="update_job.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="field" value="job_location">
                        <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                        <input type="text" class="form-control" name="value" value="<?php echo htmlspecialchars($job['job_location']); ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel | रद्द करें</button>
                        <button type="submit" class="btn btn-success">Save | सहेजें</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Salary Modal -->
    <div class="modal fade" id="editSalaryModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Salary | वेतन संपादित करें</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="update_job.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="field" value="salary">
                        <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                        <input type="text" class="form-control" name="value" value="<?php echo htmlspecialchars($job['salary']); ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel | रद्द करें</button>
                        <button type="submit" class="btn btn-success">Save | सहेजें</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Description Modal -->
    <div class="modal fade" id="editDescriptionModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Description | विवरण संपादित करें</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="update_job.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="field" value="job_description">
                        <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                        <textarea class="form-control" name="value" rows="5" required><?php echo htmlspecialchars($job['job_description']); ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel | रद्द करें</button>
                        <button type="submit" class="btn btn-success">Save | सहेजें</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Contact Info Modal -->
    <div class="modal fade" id="editContactModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Contact Info | संपर्क जानकारी संपादित करें</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="update_job.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="field" value="contact_info">
                        <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                        <input type="text" class="form-control" name="value" value="<?php echo htmlspecialchars($job['contact_info']); ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel | रद्द करें</button>
                        <button type="submit" class="btn btn-success">Save | सहेजें</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 