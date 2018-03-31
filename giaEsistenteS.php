<?php
session_start();
?>

<!DOCTYPE html>

<html>
<body>


<?php
     
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";


$id =  $_POST["user"];

$descrizione =  $_POST["ide"];

 

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " UPDATE dispositivo SET proprieta = '$id' WHERE id = '$descrizione'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Sensore Asegnato";
    
    include 'homeU.php';
    
    
    


$conn = null;
?> 


</body>

</html>
