<?php
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'wings_project');
define('CRUD_TABLE', 'wings');

try {
    $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DATABASE, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die(); // Terminate script if connection fails
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM " . CRUD_TABLE . " WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $wing = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wings.css">
    <title>Edit Wing</title>
</head>
<body>
    <h2>Edit Wing</h2>
    <form method="post" action="update_process.php">
    <input type="hidden" name="id" value="<?= $wing['id'] ?>">
    Name: <input type="text" name="name" value="<?= $wing['name'] ?>"><br>
    Hoeveel: <input type="text" name="hoeveel" value="<?= $wing['hoeveel'] ?>"><br>
    Prijs: <input type="text" name="prijs" value="<?= $wing['prijs'] ?>"><br>
    Foto: <input type="text" name="foto" value="<?= $wing['foto'] ?>"><br>
    <input type="submit" value="Update">
</form>

</body>
</html>
