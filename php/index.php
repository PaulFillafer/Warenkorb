<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Buchshop</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
<h1>Willkommen im Online Buchshop</h1>

<?php
require_once 'Book.php';
require_once 'CartItem.php';

$books = Book::getAll();

echo '<form action="verarbeitung.php" method="POST">';

if (empty($books)) {
    echo "<p>Keine Bücher verfügbar.</p>";
} else {
    echo "<table>";
    echo "<tr><th>Daten</th><th>Menge</th><th>Kaufen</th></tr>";

    foreach ($books as $book) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($book->getTitle()) . '<br>' . number_format($book->getPrice(), 2, ',', '.') ."</td>";
        echo "<td>";
            if ($book->getStock() > 0) {
            echo "<select name='quantity_{$book->getId()}'>";
            for ($i = 1; $i <= $book->getStock(); $i++) {
                echo "<option value='$i'>$i</option>";
            }
            echo "</select></td>";
        } else {
            echo "Ausverkauft</td>";
        }
        echo "<td> <button name='button' type='submit' value='Kaufen'  </td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>