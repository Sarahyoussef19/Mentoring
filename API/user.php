<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "root";
$database = "mentoring";
if (array_key_exists('id', $_GET)) {
    $userId = $_GET['id'];
} else {
    header("HTTP/1.1 400 bad request");
    die();
}

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    header("HTTP/1.1 500 could not connect to database");
    die();
}

$query = "SELECT * FROM user WHERE id=$userId";
$result = mysqli_query($conn, $query);
$userInfos = $result->fetch_assoc();
$conn->close();
if ($userInfos === null) {
    header("HTTP/1.1 404 no user found");
    die();
}

echo json_encode($userInfos);
exit();
