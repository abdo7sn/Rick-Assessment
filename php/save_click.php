<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "site_analytics"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$sql = "INSERT INTO button_clicks (ip_address, user_agent) VALUES ('$ip_address', '$user_agent')";

if ($conn->query($sql) === TRUE) {
    echo "Click recorded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
