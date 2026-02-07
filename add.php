<?php include("db_connect.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Kit</title>
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
        .error {
            border-color: #ff4d4f;
        }
        .error-text {
            color: #ff4d4f;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
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

<form method="POST" action="add_process.php">
    <h2>Add New Kit</h2>

    <label for="kit_name">Kit Name</label>
    <input type="text" name="kit_name" id="kit_name" required>

    <label for="contents">Contents</label>
    <textarea name="contents" id="contents" rows="3" required></textarea>

    <label for="location">Location</label>
    <input type="text" name="location" id="location" required>

    <label for="status">Status</label>
    <select name="status" id="status" required>
        <option value="Available">Available</option>
        <option value="Deployed">Deployed</option>
        <option value="Needs Restock">Needs Restock</option>
    </select>

    <button type="submit">Add Kit</button>
    <a class="back-link" href="index.php">← Back to Dashboard</a>
</form>

</body>
</html>
