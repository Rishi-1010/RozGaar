-- Create the database
CREATE DATABASE IF NOT EXISTS alumni_network;
USE alumni_network;

-- Users table for basic authentication and profile
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP,
    status ENUM('active', 'inactive', 'suspended') DEFAULT 'active'
);

-- Educational details
CREATE TABLE educational_details (
    edu_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    university_name VARCHAR(200) NOT NULL,
    enrollment_number VARCHAR(50) NOT NULL,
    graduation_year YEAR NOT NULL,
    verification_status ENUM('pending', 'verified', 'rejected') DEFAULT 'pending',
    verified_by INT,
    verification_date TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    UNIQUE KEY unique_enrollment (university_name, enrollment_number)
);

-- Professional status
CREATE TABLE professional_status (
    status_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    current_status ENUM('employed', 'seeking', 'student', 'other') NOT NULL,
    company_name VARCHAR(200),
    position VARCHAR(100),
    start_date DATE,
    is_current BOOLEAN DEFAULT TRUE,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Status history (for tracking changes)
CREATE TABLE status_history (
    history_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    status_type ENUM('employed', 'seeking', 'student', 'other') NOT NULL,
    company_name VARCHAR(200),
    position VARCHAR(100),
    start_date DATE,
    end_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Admin users
CREATE TABLE admins (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    role ENUM('super_admin', 'college_admin', 'department_admin') NOT NULL,
    department VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Universities list
CREATE TABLE universities (
    university_id INT PRIMARY KEY AUTO_INCREMENT,
    university_name VARCHAR(200) NOT NULL,
    location VARCHAR(200),
    website VARCHAR(200),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create connection file