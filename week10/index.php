<?php
require 'config.php';

// Mendapatkan semua film dari tabel
$stmt = $conn->query("SELECT * FROM Film");
$films = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD App - Film</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Film List</h1>
        <a href="add.php">Add New Film</a>
        <ul>
            <?php foreach ($films as $film): ?>
                <li>
                    <?= htmlspecialchars($film['title']) ?> (<?= htmlspecialchars($film['release_year']) ?>) - <?= htmlspecialchars($film['genre']) ?> - Rating: <?= htmlspecialchars($film['rating']) ?>
                    <div>
                        <a href="edit.php?id=<?= $film['id'] ?>">Edit</a>
                        <form action="delete.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $film['id'] ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
