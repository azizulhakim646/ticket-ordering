<?php
session_start();
if (!isset($_SESSION['user_id'])) {
header("Location: login.php");
exit;
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"></head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<nav>
<a href="book.php">Book Ticket</a>
<a href="my_tickets.php">My Tickets</a>
<a href="logout.php">Logout</a>
</nav>
</body>
</html>