<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Kit</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <h2>Add New Emergency Kit</h2>
    <form method="POST">
        Kit Name: <input type="text" name="kit_name" required><br>
        Contents: <textarea name="contents" required></textarea><br>
        Location: <input type="text" name="location"><br>
        Status: 
        <select name="status">
            <option value="Available">Available</option>
            <option value="Deployed">Deployed</option>
            <option value="Needs Restock">Needs Restock</option>
        </select><br>
        <input type="submit" name="submit" value="Save">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $kit_name = $_POST['kit_name'];
        $contents = $_POST['contents'];
        $location = $_POST['location'];
        $status   = $_POST['status'];

        $sql = "INSERT INTO kits (kit_name, contents, location, status) 
                VALUES ('$kit_name','$contents','$location','$status')";
        if($conn->query($sql) === TRUE){
            echo "New kit added successfully! <a href='index.php'>Back to Dashboard</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
