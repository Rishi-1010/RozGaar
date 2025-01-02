<?php
session_start();
include('../config/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute query to fetch user data by email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Store user session data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_type'] = $user['user_type'];

            // Redirect based on user type
            if ($user['user_type'] === 'jobSeeker') {
                header("Location: ../dashboard/jobseeker.html");
            } elseif ($user['user_type'] === 'jobProvider') {
                header("Location: ../dashboard/jobprovider.html");
            } else {
                // Fallback for undefined user type
                echo "User type not recognized.";
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
    $conn->close();
}
?>
