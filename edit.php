<?php
include("db_connect.php");

$id = (int)$_GET['id'];
$result = $conn->query("SELECT * FROM kits WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kit</title>
    <link rel="stylesheet" href="style.css">
    <style>

        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            background: #f5f5f5;
            padding-top: 50px;
        }
        form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background: #fff;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }
        button:hover {
            background: #555;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #333;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<form method="POST" action="edit_process.php?id=<?php echo $id; ?>">
    <h2>Edit Kit</h2>

    <label for="kit_name">Kit Name</label>
    <input type="text" name="kit_name" id="kit_name" value="<?php echo htmlspecialchars($row['kit_name']); ?>" required>

    <label for="contents">Contents</label>
    <textarea name="contents" id="contents" rows="3" required><?php echo htmlspecialchars($row['contents']); ?></textarea>

    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="<?php echo htmlspecialchars($row['location']); ?>" required>

    <label for="status">Status</label>
    <select name="status" id="status" required>
        <option value="Available" <?php if($row['status']=="Available") echo "selected"; ?>>Available</option>
        <option value="Deployed" <?php if($row['status']=="Deployed") echo "selected"; ?>>Deployed</option>
        <option value="Needs Restock" <?php if($row['status']=="Needs Restock") echo "selected"; ?>>Needs Restock</option>
    </select>

    <button type="submit">Update Kit</button>
    <a class="back-link" href="index.php">← Back to Dashboard</a>
</form>

</body>
</html>
