<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Emergency Kit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header-inner">
        <h1>Add Emergency Kit</h1>
        <div class="header-actions">
            <a href="index.php">← Back to Dashboard</a>
        </div>
    </div>
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

<!-- Form Section -->
<div class="form-container">
    <form method="POST" action="add_process.php">
        <!-- Kit Type via Radio Buttons -->
        <label>Kit Type</label>
        <div class="radio-group">
            <label><input type="radio" name="kit_type" value="Family Kit" required> Family Kit</label>
            <label><input type="radio" name="kit_type" value="First Aid Kit"> First Aid Kit</label>
            <label><input type="radio" name="kit_type" value="Rescue Kit"> Rescue Kit</label>
        </div>

        <!-- Location -->
        <label for="location">Location</label>
        <textarea name="location" id="location" rows="3" required></textarea>


        <!-- Status -->
        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="Currently Stocked">Currently Stocked</option>
            <option value="Needs Restock">Needs Restock</option>
        </select>

        <button type="submit">Add Kit</button>
    </form>
</div>

</body>
</html>
