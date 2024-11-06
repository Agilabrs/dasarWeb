<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM Items WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$item = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Mengupdate item
    $stmt = $conn->prepare("UPDATE Items SET name = :name, description = :description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
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
    <title>Edit Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Item</h1>
    <form action="edit.php?id=<?= $item['id'] ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($item['name']) ?>" required>
        <br>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" value="<?= htmlspecialchars($item['description']) ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
