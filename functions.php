<?php
include_once "connect.php";

function crudwings() {
    echo "<a href='insert.php'>Add New Product</a><br>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Hoeveel</th>
                <th>Prijs</th>
            </tr>";
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM wings");
    $stmt->execute();
    $wings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($wings as $wing) {
        echo "<tr>";
        echo "<td>" . $wing['id'] . "</td>";
        echo "<td>" . $wing['name'] . "</td>";
        echo "<td>" . $wing['hoeveel'] . "</td>";
        echo "<td>" . $wing['prijs'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
