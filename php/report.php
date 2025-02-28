<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_analytics";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS total_clicks FROM button_clicks WHERE DATE(created_at) = CURDATE()";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "Number of clicks today: " . $row['total_clicks'];

$conn->close();
?>
