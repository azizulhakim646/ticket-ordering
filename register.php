<?php
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";


if (mysqli_query($conn, $sql)) {
header("Location: login.php");
exit;
} else {
echo "Error: " . mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="form-container">
<h2>Register</h2>
<form method="POST">
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit">Register</button>
</form>
<a href="login.php">Already have an account? Login</a>
</div>
</body>
</html>