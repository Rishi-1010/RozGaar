<?php
$servername = "localhost";
$username = "root"; // default username for MySQL
$password = ""; // default password for MySQL
$dbname = "rozgar_db"; // the name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
