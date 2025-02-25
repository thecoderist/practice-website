<?php
$host = 'localhost:3307'; 
<<<<<<< HEAD
$dbname = 'Activity1';
=======
$dbname = 'activity1';
>>>>>>> e99517d11ff6e057b8c7f3435ca762f2b63b70ba
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