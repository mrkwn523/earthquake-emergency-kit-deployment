<?php
include("db_connect.php");

$id = (int)$_POST['id']; 
$page = isset($_POST['page']) ? (int)$_POST['page'] : 1;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kit_type = $_POST['kit_type'];
    $location = $_POST['location'];
    $status   = $_POST['status'];

  
    $stmt = $conn->prepare("UPDATE kits SET kit_type=?, location=?, status=? WHERE id=?");
    $stmt->bind_param("sssi", $kit_type, $location, $status, $id);

    if ($stmt->execute()) {
        header("Location: index.php?page=$page");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
