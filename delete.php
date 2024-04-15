<?php
include_once "connect.php";

function deleteWing() {
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $conn = connectDb();
        
        // Prepare and execute the delete query
        $sql = "DELETE FROM " . CRUD_TABLE . " WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        // Check if the deletion was successful
        if ($stmt->rowCount() > 0) {
            // Redirect back to the wings page after successful deletion
            header("Location: wings.php");
            exit();
        } else {
            // Handle deletion failure
            echo "Failed to delete the record.";
        }
    } else {
        // Handle invalid request or missing ID parameter
        echo "Invalid request or missing ID parameter.";
    }
}

deleteWing();
?>
