<?php

$serverName = "DESKTOP-EJS5FCV"; 
$database = "Cihuy";          
$username = "";                  
$password = "";                  

try {
   $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Error connecting to SQL Server : ".$e->getMessage());
}
?>
