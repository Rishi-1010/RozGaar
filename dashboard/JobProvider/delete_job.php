<?php
session_start();
include('../../config/db_connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login/login.html");
    exit();
}

if (isset($_GET['id'])) {
    $job_id = $_GET['id'];
    $job_provider_id = $_SESSION['user_id'];

    // Only allow deletion if the job belongs to this provider
    $stmt = $conn->prepare("DELETE FROM jobs WHERE id = ? AND job_provider_id = ?");
    $stmt->bind_param("ii", $job_id, $job_provider_id);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Job deleted successfully!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error deleting job.";
        $_SESSION['message_type'] = "error";
    }
    
    $stmt->close();
}

header("Location: myservices.php");
exit(); 