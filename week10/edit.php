<?php
require 'config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id === 0) {
    echo "ID tidak valid";
    exit;
}

// Mengambil data film berdasarkan ID
$stmt = $conn->prepare("SELECT * FROM Film WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$film = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$film) {
    echo "Film tidak ditemukan";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $release_year = $_POST['release_year'];
    $rating = $_POST['rating'];

    // Mengupdate data film
    $stmt = $conn->prepare("UPDATE Film SET title = :title, genre = :genre, release_year = :release_year, rating = :rating WHERE id = :id");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':release_year', $release_year, PDO::PARAM_INT);
    $stmt->bindParam(':rating', $rating);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Film</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Film</h1>
        <form action="edit.php?id=<?= htmlspecialchars($film['id']) ?>" method="POST">
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($film['title']) ?>" required>
            <br>
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" value="<?= htmlspecialchars($film['genre']) ?>" required>
            <br>
            <label for="release_year">Tahun Rilis:</label>
            <input type="number" id="release_year" name="release_year" value="<?= htmlspecialchars($film['release_year']) ?>" required>
            <br>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" value="<?= htmlspecialchars($film['rating']) ?>" step="0.1" min="0" max="10" required>
            <br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
