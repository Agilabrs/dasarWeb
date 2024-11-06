<?php
require 'config.php';

// Mendapatkan semua item dari tabel
$stmt = $conn->query("SELECT * FROM Items");
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Item List</h1>
    <a href="add.php">Add New Item</a>
    <ul>
        <?php foreach ($items as $item): ?>
            <li>
                <?= htmlspecialchars($item['name']) ?> - <?= htmlspecialchars($item['description']) ?>
                <a href="edit.php?id=<?= $item['id'] ?>">Edit</a>
                <form action="delete.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
