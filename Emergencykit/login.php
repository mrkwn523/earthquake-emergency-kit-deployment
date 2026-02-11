<?php
session_start();
include("db_connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE adm_user='$username' AND adm_pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Emergency Kits System</h1>
</header>

<div class="form-container">
    <h2>Admin Login</h2>

    <?php if (isset($error)) echo "<p style='color:red;text-align:center;'>$error</p>"; ?>

    <form method="post">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login</button>

    </form>
</div>

</body>
</html>
