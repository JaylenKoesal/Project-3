<?php
include_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $conn = connectDb();
    $sql = "UPDATE " . CRUD_TABLE . " SET name = :name, hoeveel = :hoeveel, prijs = :prijs WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':hoeveel', $_POST['hoeveel']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
}
?>
