<?php 
include("database.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dela Cruz</title>
</head>
<body>
    <h1>Hello world! Liz panget HAHAHHAHA EDI WOW</h1>
    <h1>HAHAHHAHAH HELLO</h1>
    <form action="" method="post">
         <label for="">firstname:</label>
         <br>
        <input type="text" name ="firstname">
        <br>
        <label for="">lastname:</label>
        <br>
        <input type="text" name ="lastname">
        <br> <br>
        <input type="submit" name ="btnSubmit">
        <input type="submit" name ="btnShow" value="Show">
    </form>        
</body>
</html>

<?php 
if(isset($_POST['btnSubmit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];

    if (empty($fname) && empty($lname)){
        echo "Your details are empty";
    }
    else {
      
        try {
            $sql = "INSERT INTO users (firstname, lastname) VALUES (:firstname, :lastname)";
            $view = "SELECT * FROM users";
            $sentence = $conn->prepare($sql);
            $sentence->bindParam(':firstname', $fname);
            $sentence->bindParam(':lastname', $lname);
            if ($sentence->execute()) {
                echo "<script> alert('New record is added') </script>";
            } else {
                echo "Error: Could not execute the query.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}


if(isset($_POST['btnShow'])){
    try {
        $sql = 'SELECT * FROM users';
        $sentence = $conn ->prepare($sql);
        $sentence ->execute();
        $result = $sentence->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0){
            echo "<h1>USERS TABLE DATA</h1>";
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>";
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>