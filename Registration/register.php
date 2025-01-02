<?php
include('../config/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $userType = $_POST['userType'];

    // Check if email already exists
    $checkEmailStmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $result = $checkEmailStmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email is already registered.";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, user_type) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $hashedPassword, $userType);

        if ($stmt->execute()) {
            // Redirect to login page after successful registration
            header("Location: ../Login/login.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $checkEmailStmt->close();
    $conn->close();
}
?>
