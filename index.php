<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Earthquake Emergency Kit Deployment</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <h1>Emergency Kits Dashboard</h1>
    <a href="add.php">➕ Add New Kit</a>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Contents</th><th>Location</th><th>Status</th><th>Actions</th>
        </tr>
        <?php
        $sql = "SELECT * FROM kits";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['kit_name']."</td>
                <td>".$row['contents']."</td>
                <td>".$row['location']."</td>
                <td>".$row['status']."</td>
                <td>
                    <a href='edit.php?id=".$row['id']."'>Edit</a> |
                    <a href='delete.php?id=".$row['id']."' onclick='return confirmDelete();'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
