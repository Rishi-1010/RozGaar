<?php
session_start();
include('../../config/db_connection.php');

if (!isset($_SESSION['user_id']) || $_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../../login/login.html");
    exit();
}

$job_id = $_POST['job_id'];
$job_provider_id = $_SESSION['user_id'];
$field = $_POST['field'];
$value = $_POST['value'];

// Validate field name to prevent SQL injection
$allowed_fields = ['job_title', 'job_type', 'job_location', 'salary', 'job_description', 'contact_info'];
if (!in_array($field, $allowed_fields)) {
    $_SESSION['message'] = "Invalid field";
    header("Location: edit_job.php?id=" . $job_id);
    exit();
}

$sql = "UPDATE jobs SET $field = ? WHERE id = ? AND job_provider_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $value, $job_id, $job_provider_id);

if ($stmt->execute()) {
    $_SESSION['message'] = "Job updated successfully!";
    $_SESSION['message_type'] = "success";
} else {
    $_SESSION['message'] = "Error updating job.";
    $_SESSION['message_type'] = "error";
}

header("Location: edit_job.php?id=" . $job_id);
exit(); 