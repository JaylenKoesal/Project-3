<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wings.css">
    <title>Homepage</title>
</head>

<body>
    <div class="header">
        <img src="Pictures/Logo.png" alt="" class="logo" width="200px">
        <h1>Wing's Paradise</h1>
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

    <div class="slideshow-container">
        <div class="slide fade">
            <img src="Pictures/slideshow 1.jpg" alt="Slide 1" width="850" height="600">
        </div>
        <div class="slide fade">
            <img src="Pictures/slideshow 2.jpg" alt="Slide 2" width="850" height="600">
        </div>
        <div class="slide fade">
            <img src="Pictures/slideshow 3.jpg" alt="Slide 3" width="850" height="600">
        </div>
        <div class="slide fade">
            <img src="Pictures/slideshow 4.jpg" alt="Slide 4" width="850" height="600">
        </div>

        <!-- voor meer slider -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div>
        <div>
            <h2 class="nieuws-text">Nieuws</h2>
            <h3 class="nieuws-text-2">9 JUICY HOT WINGS VOOR MAAR €4,99!</h3>
            <img src="Pictures/nieuws 1.jpg" width="400px" class="nieuws-1">
        </div>
        <div>
            <h3 class="nieuws-text-3">DE KLASSIEKE BUCKET IS TERUG! VOOR MAAR €9</h3>
            <img src="Pictures/nieuws 2.png" width="370px" class="nieuws-2">
        </div>
        <div>
            <h3 class="nieuws-text-4">6 ICE CREAM NUGGETS?? HOE ZOU DAT SMAKEN!</h3>
            <img src="Pictures/nieuws 3.jpg" width="370px" class="nieuws-3">
        </div>

    </div>

    <script src="script.js"></script>
</body>


<footer>
    <div>
        <p>Contact</p>
        <p>Adres</p>
        <P>Vragen</P>
    </div>
</footer>


</html>
