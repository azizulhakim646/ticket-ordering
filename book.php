<?php
session_start();
include 'db.php';


if (!isset($_SESSION['user_id'])) {
header("Location: login.php");
exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$event = $_POST['event'];
$date = $_POST['date'];
$user_id = $_SESSION['user_id'];


$sql = "INSERT INTO tickets (user_id, event, event_date) VALUES ($user_id, '$event', '$date')";


if (mysqli_query($conn, $sql)) {
header("Location: my_tickets.php");
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
<h2>Book Ticket</h2>
<form method="POST">
<input type="text" name="event" placeholder="Event Name" required><br>
<input type="date" name="date" required><br>
<button type="submit">Book</button>
</form>
</body>
</html>