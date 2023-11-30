<?php
session_start();
require("../includes/database_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, full_name, password FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    $response = array("success" => false, "message" => "Error: " . mysqli_error($conn));
    echo json_encode($response);
    exit();
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["full_name"] = $row["full_name"];

        $response = array("success" => true, "message" => "Login successful");
        echo json_encode($response);
        exit();
    }
}

$response = array("success" => false, "message" => "Login failed. Check your email and password.");
echo json_encode($response);
exit();
