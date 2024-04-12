<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="header">
        <img src="Pictures/Logo.png" alt="" class="logo" width="200px">
        <h1>Wing's Paradise|Wings</h1>
    </div>
    <nav>
        <ul>
            <li><a href="Homepage.php">Home</a></li>
            <li class="dropdown">
                <a href="#">Bestel nu</a>
                <ul class="dropdown-content">
                    <li><a href="#">AFHALEN</a></li>
                    <li><a href="https://www.thuisbezorgd.nl" target="_blank">VIA THUISBEZORGD</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Menu</a>
                <ul class="dropdown-content">
                    <li><a href="Wings.php">Wings</a></li>
                    <li><a href="Tenders.php">Tenders</a></li>
                    <li><a href="Nuggets.php">Nuggets</a></li>
                    <li><a href="Bucket.php">Buckets</a></li>
                </ul>
            </li>
            <li><a href="Service.php">Service</a></li>
        </ul>
    </nav>
    
    <h2>Wings List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Hoeveel</th>
            <th>Prijs</th>
        </tr>
        <?php include "Wings Crud/connect.php"; ?>

        <?php
        $conn = connectDb();
        $query = $conn->prepare("SELECT * FROM " . CRUD_TABLE);
        $query->execute();
        $wings = $query->fetchAll();

        foreach($wings as $wing): ?>
            <tr>
                <td><?= $wing['id'] ?></td>
                <td><?= $wing['name'] ?></td>
                <td><?= $wing['hoeveel'] ?></td>
                <td><?= $wing['prijs'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <footer>
        <div>
            <p>Contact</p> 
            <p>Adres</p>
            <p>Vragen</p>
        </div>
    </footer>
</body>
</html>
