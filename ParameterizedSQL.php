<?php
/* 
See https://xkcd.com/327
Parameterized SQL is your buddy
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = $_GET["fname"];
$firstname = filter_var ( $firstname, FILTER_SANITIZE_STRING); // Taint Check

$lastname =  $_GET["lname"];
$lastname = filter_var ( $lastname, FILTER_SANITIZE_STRING); // Taint Check

$email = $_GET["email"];
$email = filter_var ( $email, FILTER_SANITIZE_EMAIL); // Taint Check

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>