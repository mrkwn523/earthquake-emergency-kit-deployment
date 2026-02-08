<?php
include("db_connect.php");

$id = $_GET['id'];
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$result = $conn->query("SELECT * FROM kits WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Update Emergency Kit</h1>
    <a href="index.php?page=<?php echo $page; ?>">← Back to Dashboard</a>
</header>

<!-- Kit Gallery Section -->
<div class="kit-gallery">
    <div class="kit-card">
        <img src="familykit.png" alt="Family Kit">
        <h3>Family Kit</h3>
        <ul>
            <li>Water</li>
            <li>Food</li>
            <li>Flashlight</li>
            <li>Radio</li>
        </ul>
    </div>

    <div class="kit-card">
        <img src="firstaidkit.png" alt="First Aid Kit">
        <h3>First Aid Kit</h3>
        <ul>
            <li>Bandages</li>
            <li>Alcohol</li>
            <li>Medicine</li>
        </ul>
    </div>

    <div class="kit-card">
        <img src="rescuekit.png" alt="Rescue Kit">
        <h3>Rescue Kit</h3>
        <ul>
            <li>Helmet</li>
            <li>Gloves</li>
            <li>Rope</li>
        </ul>
    </div>
</div>

<div class="form-container">
    <form method="POST" action="edit_process.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="page" value="<?php echo $page; ?>">

        <!-- Kit Type via Radio Buttons -->
        <label>Kit Type</label>
        <div class="radio-group">
            <label>
                <input type="radio" name="kit_type" value="Family Kit" 
                    <?php if($row['kit_type'] == 'Family Kit') echo 'checked'; ?>>
                Family Kit
            </label>
            <label>
                <input type="radio" name="kit_type" value="First Aid Kit" 
                    <?php if($row['kit_type'] == 'First Aid Kit') echo 'checked'; ?>>
                First Aid Kit
            </label>
            <label>
                <input type="radio" name="kit_type" value="Rescue Kit" 
                    <?php if($row['kit_type'] == 'Rescue Kit') echo 'checked'; ?>>
                Rescue Kit
            </label>
        </div>

        <!-- Location -->
        <label for="location">Location</label>
        <textarea name="location" id="location" rows="3" required><?php echo $row['location']; ?></textarea>


        <!-- Status -->
        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="Currently Stocked" <?php if($row['status']=='Currently Stocked') echo 'selected'; ?>>Currently Stocked</option>
            <option value="Needs Restock" <?php if($row['status']=='Needs Restock') echo 'selected'; ?>>Needs Restock</option>
        </select>

        <button type="submit">Update Kit</button>
    </form>
</div>

</body>
</html>
