<?php
// Include database connection
include('../config/db_connection.php');

// Start session to store messages
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $jobTitle = $_POST['job_title'];
    $jobType = $_POST['job_type'];
    $jobLocation = $_POST['job_location'];
    $salary = $_POST['salary'];
    $jobDescription = $_POST['job_description'];
    $contactInfo = $_POST['contact_info'];
    $jobProviderId = $_SESSION['user_id']; // Assume the job provider is logged in and user ID is stored in session

    // Prepare SQL query to insert job data
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, job_type, job_location, salary, job_description, contact_info, job_provider_id) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $jobTitle, $jobType, $jobLocation, $salary, $jobDescription, $contactInfo, $jobProviderId);

    // Execute the query
    if ($stmt->execute()) {
        // Set a success message in session
        $_SESSION['message'] = "Job posted successfully!";
        $_SESSION['message_type'] = "success"; // Success message type
        // Redirect to jobs page after successful post
        header("Location: jobs.html");
        exit();̥̥̥̥
    } else {
        // Set an error message in session
        $_SESSION['message'] = "Error posting job. Please try again.";
        $_SESSION['message_type'] = "error"; // Error message type
        // Redirect back to hire.html in case of failure
        header("Location: hire.html");
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
