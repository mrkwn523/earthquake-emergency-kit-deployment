<?php
$servername = "sql107.infinityfree.com"; 
$username   = "if0_41088693";        
$password   = "m8s2xKqc4LiD7TE";        
$dbname     = "if0_41088693_db_earthquakekit";           

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
