<?php

$serverName = "DESKTOP-EJS5FCV"; // Nama server SQL Server atau IP address
$database = "Cihuy";             // Nama database
$username = "";                  // Username SQL Server jika menggunakan SQL Server Authentication
$password = "";                  // Password SQL Server jika menggunakan SQL Server Authentication

try {
   $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Error connecting to SQL Server : ".$e->getMessage());
}
?>
