<?php
session_start();
?>
<!DOCTYPE HTML>
<html>  
<body>
    
     <?php
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";
$name =  $_POST["name"];
$ps=  $_POST["pass"];
$email= $_POST["email"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Utente(   nome, password, email)  VALUES('$name','$ps','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    include'homeadmin.php';
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 
<br>
<br>
    <A href="index.php">Torna alla home page</A>
</body>
</html>