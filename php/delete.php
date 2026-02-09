<?php
include("db_connect.php");

if (isset($_GET['id'])) {
    $id = (int)$_GET['id']; 
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $conn->query("DELETE FROM kits WHERE id = $id");

    // stays in dahsboard
    header("Location: index.php?page=$page&deleted=1");
    exit();
}

// If no ID is found, return to dashboard
header("Location: index.php");
exit();
?>
