<?php
session_start();
include('../../../config/db_connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login/login.html");
    exit();
}

// Fetch user details
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Management | Roz-गार</title>
    
    <!-- CSS here -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/themify-icons.css">
    <link rel="stylesheet" href="../../../css/nice-select.css">
    <link rel="stylesheet" href="../../../css/flaticon.css">
    <link rel="stylesheet" href="../../../css/gijgo.css">
    <link rel="stylesheet" href="../../../css/animate.min.css">
    <link rel="stylesheet" href="../../../css/slicknav.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../css/dashboard-style.css">
</head>

<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- bradcam_area  -->
    <div class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Profile Management | प्रोफ़ाइल प्रबंधन</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Section -->
    <section class="profile-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Display any messages -->
                    <?php if (isset($_SESSION['message'])): ?>
                        <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                            <?php 
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            unset($_SESSION['message_type']);
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Profile Form -->
                    <div class="profile-form-wrap bg-white p-4 rounded shadow-sm">
                        <form action="update_profile.php" method="POST" class="profile-form">
                            <div class="mb-4">
                                <label for="name" class="form-label">Name | नाम</label>
                                <input type="text" class="form-control" id="name" name="name" 
                                       value="<?php echo htmlspecialchars($user['name'] ?? ''); ?>" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label">Email | ईमेल</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" required>
                            </div>

                            <div class="mb-4">
                                <label for="new_password" class="form-label">New Password | नया पासवर्ड</label>
                                <input type="password" class="form-control" id="new_password" name="new_password" 
                                       minlength="6">
                                <small class="text-muted">Leave blank to keep current password | वर्तमान पासवर्ड रखने के लिए खाली छोड़ें</small>
                            </div>

                            <div class="mb-4">
                                <label for="confirm_password" class="form-label">Confirm New Password | नए पासवर्ड की पुष्टि करें</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>

                            <div class="mb-4">
                                <label for="current_password" class="form-label">Current Password | वर्तमान पासवर्ड</label>
                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                                <small class="text-muted">Required to save changes | परिवर्तन सहेजने के लिए आवश्यक</small>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="boxed-btn3">Update Profile | प्रोफ़ाइल अपडेट करें</button>
                                <a href="../jobprovider.html" class="boxed-btn3" style="background: #6c757d;">Back to Dashboard | डैशबोर्ड पर वापस जाएं</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password confirmation validation
        document.querySelector('.profile-form').addEventListener('submit', function(e) {
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (newPassword && newPassword !== confirmPassword) {
                e.preventDefault();
                alert('New passwords do not match! | नए पासवर्ड मेल नहीं खाते!');
            }
        });
    </script>
</body>
</html>
