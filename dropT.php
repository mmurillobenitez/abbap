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

$idt= $_POST["id"];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM tipo WHERE tipologia = '$idt' ";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Tipo dispositivo eliminato";
    
   include 'homeU.php';

    
    


$conn = null;
?> 
<br>
<br>
   
</body>
</html>
