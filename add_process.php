<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kit_name = $_POST['kit_name'];
    $location = $_POST['location'];
    $status   = $_POST['status'];

    // Insert query without contents column
    $stmt = $conn->prepare("INSERT INTO kits (kit_name, location, status) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $kit_name, $location, $status);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
