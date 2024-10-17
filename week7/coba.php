<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil semua input dari form
    $inputs = $_POST['input'];

    echo "<h2>Form Inputs Submitted</h2>";
    foreach ($inputs as $index => $input) {
        echo "Input " . ($index + 1) . ": " . htmlspecialchars($input) . "<br>";
    }
} else {
    echo "No data submitted.";
}
?>
