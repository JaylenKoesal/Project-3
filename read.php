<?php
// Include database connection
include 'connection.php';

// Fetch users from database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);


?>
