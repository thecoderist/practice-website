<?php
$host = 'localhost:3307'; 
$dbname = 'Activity1';
$username = 'root';  
$password = '';  

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "You are connected!";
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
?>