<?php include("db_connect.php"); ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM kits WHERE id=$id";
if($conn->query($sql) === TRUE){
    echo "Kit deleted successfully! <a href='index.php'>Back to Dashboard</a>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
