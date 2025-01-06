<?php
session_start();
include('../../../config/db_connection.php');

if (!isset($_SESSION['user_id']) || $_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../../login/login.html");
    exit();
}

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

// Verify current password
$stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!password_verify($current_password, $user['password'])) {
    $_SESSION['message'] = "Current password is incorrect! | वर्तमान पासवर्ड गलत है!";
    $_SESSION['message_type'] = "danger";
    header("Location: profile.php");
    exit();
}

// Update profile
if ($new_password) {
    // Update with new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $email, $hashed_password, $user_id);
} else {
    // Update without changing password
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $user_id);
}

if ($stmt->execute()) {
    $_SESSION['message'] = "Profile updated successfully! | प्रोफ़ाइल सफलतापूर्वक अपडेट किया गया!";
    $_SESSION['message_type'] = "success";
} else {
    $_SESSION['message'] = "Error updating profile! | प्रोफ़ाइल अपडेट करने में त्रुटि!";
    $_SESSION['message_type'] = "danger";
}

header("Location: profile.php");
exit();
