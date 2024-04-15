<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wings.css">
    <title>Wings</title>
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
            <li><a href="Over-ons.php">Over ons</a></li>
        </ul>
    </nav>

    <div class="wings-tabel">
        <h2>Wings List</h2>
        <a href='insert.php'>Voeg nieuw product toe</a><br>
        <table border="1" class="foto-tabel">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Hoeveel</th>
                <th>Prijs</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            <?php
            include_once "connect.php";

            $conn = connectDb();
            $stmt = $conn->prepare("SELECT * FROM " . CRUD_TABLE);
            $stmt->execute();
            $wings = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($wings as $wing): ?>
                <tr>
                    <td><?= $wing['id'] ?></td>
                    <td><?= $wing['name'] ?></td>
                    <td><?= $wing['hoeveel'] ?></td>
                    <td><?= $wing['prijs'] ?></td>
                    <td><img src='img/<?= $wing['foto'] ?>' alt='<?= $wing['name'] ?>' width='100'></td>
                    <td>
                        <form method='get' action='update.php'>
                            <input type="hidden" name="id" value="<?= $wing['id'] ?>">
                            <button type="submit">Edit</button>
                        </form>
                        <form method='get' action='delete.php'>
                            <input type="hidden" name="id" value="<?= $wing['id'] ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    <footer>
        <div>
            <p>Contact</p> 
            <p>Adres</p>
            <p>Vragen</p>
        </div>
    </footer>
</body>
</html>
