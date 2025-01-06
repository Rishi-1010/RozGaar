<?php
// Include database connection
include('../config/db_connection.php');

// Start session to store messages
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['message'] = "Please login first to post a job.";
    $_SESSION['message_type'] = "error";
    header("Location: ../login/login.html");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $jobTitle = $_POST['job_title'];
    $jobType = $_POST['job_type'];
    $jobLocation = $_POST['job_location'];
    $salary = $_POST['salary'];
    $jobDescription = $_POST['job_description'];
    $contactInfo = $_POST['contact_info'];
    $jobProviderId = $_SESSION['user_id'];

    // Prepare SQL query to insert job data
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, job_type, job_location, salary, job_description, contact_info, job_provider_id) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $jobTitle, $jobType, $jobLocation, $salary, $jobDescription, $contactInfo, $jobProviderId);

    // Execute the query
    if ($stmt->execute()) {
        // Set a success message in session
        $_SESSION['message'] = "Job posted successfully! | नौकरी सफलतापूर्वक पोस्ट की गई!";
        $_SESSION['message_type'] = "success";
        // Redirect to job provider dashboard after successful post
        header("Location: ../dashboard/JobProvider/jobprovider.html");
        exit();
    } else {
        // Set an error message in session
        $_SESSION['message'] = "Error posting job. Please try again. | नौकरी पोस्ट करने में त्रुटि। कृपया पुनः प्रयास करें।";
        $_SESSION['message_type'] = "error";
        // Redirect back to hire.html in case of failure
        header("Location: hire.html");
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>