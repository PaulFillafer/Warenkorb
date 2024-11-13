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

$books = Book::getAll();

if (empty($books)) {
    echo "<p>Keine Bücher verfügbar.</p>";
} else {
    echo "<table>";
    echo "<tr><th>ID</th><th>Titel</th><th>Preis (EUR)</th><th>Verfügbar</th></tr>";

    foreach ($books as $book) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($book->getId()) . "</td>";
        echo "<td>" . htmlspecialchars($book->getTitle()) . "</td>";
        echo "<td>" . number_format($book->getPrice(), 2, ',', '.') . "</td>";
        echo "<td>" . $book->getStock() . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>
