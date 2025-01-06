<?php
session_start();
require_once '../../../config/db_connection.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'jobSeeker') {
    header('Location: ../../../Login/login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    
    // Handle profile picture upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === 0) {
        $allowed = ['jpg', 'jpeg', 'png'];
        $filename = $_FILES['profile_picture']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($filetype), $allowed)) {
            $newname = "profile_".$user_id."_".time().".".$filetype;
            $upload_dir = '../../../uploads/profiles/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            move_uploaded_file($_FILES['profile_picture']['tmp_name'], $upload_dir.$newname);
            $profile_pic = $newname;
        }
    }

    // Handle resume upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === 0) {
        $allowed = ['pdf', 'doc', 'docx'];
        $filename = $_FILES['resume']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($filetype), $allowed)) {
            $newname = "resume_".$user_id."_".time().".".$filetype;
            $upload_dir = '../../../uploads/resumes/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            move_uploaded_file($_FILES['resume']['tmp_name'], $upload_dir.$newname);
            $resume = $newname;
        }
    }

    // Prepare data for database
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $education = mysqli_real_escape_string($conn, $_POST['education']);
    $skills = mysqli_real_escape_string($conn, $_POST['skills']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $about_me = mysqli_real_escape_string($conn, $_POST['about_me']);

    // Check if profile exists
    $check_query = "SELECT id FROM job_seeker_profiles WHERE user_id = $user_id";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // Update existing profile
        $query = "UPDATE job_seeker_profiles SET 
                  full_name = '$full_name',
                  email = '$email',
                  phone = '$phone',
                  education = '$education',
                  skills = '$skills',
                  experience = '$experience',
                  location = '$location',
                  about_me = '$about_me'";
        
        if (isset($profile_pic)) {
            $query .= ", profile_picture = '$profile_pic'";
        }
        if (isset($resume)) {
            $query .= ", resume = '$resume'";
        }
        
        $query .= " WHERE user_id = $user_id";
    } else {
        // Create new profile
        $query = "INSERT INTO job_seeker_profiles 
                 (user_id, full_name, email, phone, education, skills, experience, location, about_me";
        
        if (isset($profile_pic)) {
            $query .= ", profile_picture";
        }
        if (isset($resume)) {
            $query .= ", resume";
        }
        
        $query .= ") VALUES 
                 ($user_id, '$full_name', '$email', '$phone', '$education', '$skills', '$experience', '$location', '$about_me'";
        
        if (isset($profile_pic)) {
            $query .= ", '$profile_pic'";
        }
        if (isset($resume)) {
            $query .= ", '$resume'";
        }
        
        $query .= ")";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = "Profile updated successfully! | प्रोफ़ाइल सफलतापूर्वक अपडेट किया गया!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error updating profile: " . mysqli_error($conn);
        $_SESSION['message_type'] = "error";
    }

    header('Location: profile.php');
    exit();
}
?> 