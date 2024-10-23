<?php
// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 403 Forbidden');
    exit('Forbidden');
}

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$roomType = $_POST['roomType'] ?? '';
$checkIn = $_POST['checkIn'] ?? '';
$checkOut = $_POST['checkOut'] ?? '';
$notes = $_POST['notes'] ?? '';

// Basic validation
if (empty($name) || empty($email) || empty($phone) || empty($roomType) || empty($checkIn) || empty($checkOut)) {
    http_response_code(400);
    exit('Missing required fields');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Invalid email format');
}

// Format email content
$to = "hotel@example.com"; // Ganti dengan email hotel
$subject = "New Reservation Request";
$message = "
New reservation details:

Name: $name
Email: $email
Phone: $phone
Room Type: $roomType
Check-in: $checkIn
Check-out: $checkOut
Notes: $notes
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();


if (mail($to, $subject, $message, $headers)) {
    // You could also save to a simple text file if needed
    $logFile = 'reservations.txt';
    $logEntry = date('Y-m-d H:i:s') . " - $name, $email, $roomType, $checkIn to $checkOut\n";
    file_put_contents($logFile, $logEntry, FILE_APPEND);
    
    http_response_code(200);
    echo "Reservation request sent successfully";
} else {
    http_response_code(500);
    echo "Failed to send reservation request";
}
?>