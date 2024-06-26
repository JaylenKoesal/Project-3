<?php
include_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDb();
    $sql = "INSERT INTO " . CRUD_TABLE . " (name, hoeveel, prijs, foto) VALUES (:name, :hoeveel, :prijs, :foto)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':hoeveel', $_POST['hoeveel']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->bindParam(':foto', $_POST['foto']);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Wing</title>
</head>
<body>
    <h2>Insert New Wing</h2>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Hoeveel: <input type="text" name="hoeveel"><br>
        Prijs: <input type="text" name="prijs"><br>
        foto: <input type="foto" name="foto"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
