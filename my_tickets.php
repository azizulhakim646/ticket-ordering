<?php
session_start();
include 'db.php';


if (!isset($_SESSION['user_id'])) {
header("Location: login.php");
exit;
}


$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM tickets WHERE user_id=$user_id";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"></head>
<body>
<h2>My Tickets</h2>
<table border="1">
<tr><th>Event</th><th>Date</th></tr>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['event']; ?></td>
<td><?php echo $row['event_date']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>