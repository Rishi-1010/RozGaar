<?php
require_once '../config/db_connection.php';

$sql = "CREATE TABLE IF NOT EXISTS job_seeker_profiles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15),
    profile_picture VARCHAR(255),
    education ENUM('10th', '12th', 'graduate', 'postgraduate') NOT NULL,
    skills TEXT,
    experience ENUM('fresher', '1-2', '2-5', '5+') NOT NULL,
    location VARCHAR(100),
    resume VARCHAR(255),
    about_me TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table job_seeker_profiles created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 