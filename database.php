<?php
$host = 'localhost:3307'; 
$dbname = 'activity1';
<<<<<<< HEAD
=======
>>>>>>> e99517d11ff6e057b8c7f3435ca762f2b63b70ba
$dbname = 'activity2';
>>>>>>> b42e4fff410d40c23cc56a8539902be9eac6ba91
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