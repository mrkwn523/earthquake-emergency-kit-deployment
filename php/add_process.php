<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kit_type = $_POST['kit_type'];
    $location = $_POST['location'];
    $status   = $_POST['status'];

    // Database insert using kit_type, location, and status
    $stmt = $conn->prepare("INSERT INTO kits (kit_type, location, status) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $kit_type, $location, $status);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
