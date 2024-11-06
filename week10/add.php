<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $release_year = $_POST['release_year'];
    $rating = $_POST['rating'];

    // Menambahkan film baru
    $stmt = $conn->prepare("INSERT INTO Film (title, genre, release_year, rating) VALUES (:title, :genre, :release_year, :rating)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':release_year', $release_year, PDO::PARAM_INT);
    $stmt->bindParam(':rating', $rating);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Film</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add New Film</h1>
        <form action="add.php" method="POST">
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" required>
            <br>
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" required>
            <br>
            <label for="release_year">Tahun Rilis:</label>
            <input type="number" id="release_year" name="release_year" required>
            <br>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" step="0.1" min="0" max="10" required>
            <br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
