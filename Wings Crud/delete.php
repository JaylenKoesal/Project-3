<?php
include_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $conn = connectDb();
    $sql = "DELETE FROM " . CRUD_TABLE . " WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
}
?>
