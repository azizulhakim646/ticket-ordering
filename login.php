<?php
session_start();
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if ($row && password_verify($password, $row['password'])) {
$_SESSION['user_id'] = $row['id'];
$_SESSION['username'] = $row['username'];
header("Location: index.php");
exit;
} else {
echo "Invalid login";
}
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="form-container">
<h2>Login</h2>
<form method="POST">
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit">Login</button>
</form>
<a href="register.php">Create new account</a>
</div>
</body>
</html>