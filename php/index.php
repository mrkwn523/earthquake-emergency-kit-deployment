<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Earthquake Emergency Kit Deployment</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this kit?");
        }
    </script>
</head>

<body>

<header>
    <h1>Emergency Kits Dashboard</h1>
    <a href="add.php">+ Add New Kit</a>
</header>

<table>
<thead>
<tr>
    <th>ID</th>
    <th>Kit Type</th>
    <th>Location</th>
    <th>Status</th>
    <th>Actions</th>
</tr>
</thead>

<tbody>
<?php
$limit = 10; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

$totalResult = $conn->query("SELECT COUNT(*) as total FROM kits");
$totalRow = $totalResult->fetch_assoc();
$totalKits = $totalRow['total'];
$totalPages = ceil($totalKits / $limit);

$result = $conn->query("SELECT * FROM kits ORDER BY id ASC LIMIT $limit OFFSET $offset");

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['kit_type']}</td>
        <td>{$row['location']}</td>
        <td>{$row['status']}</td>
        <td>
           <a href='edit.php?id={$row['id']}&page=$page'>Edit</a> |
           <a href='delete.php?id={$row['id']}&page=$page' onclick='return confirmDelete()'>Delete</a>
        </td>
    </tr>";
}
?>
</tbody>
</table>

<div class="pagination">
<?php
for($i = 1; $i <= $totalPages; $i++) {
    if($i == $page) {
        echo "<span class='current'>$i</span>";
    } else {
        echo "<a href='?page=$i'>$i</a>";
    }
}
?>
</div>

</body>
</html>
