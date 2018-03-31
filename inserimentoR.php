<?php
session_start();
?>

 <!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Dati Sensore </TITLE>
</HEAD>
    <body>

 
 <?php
     
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";


$id =  $_POST['idS'];
$valore = $_POST['valore'];
$descrizione = $_POST["desc"];
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO rilevazione  VALUES('$id', '$valore','$descrizione')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Rilevazione assegnata";
    
   include 'homeU.php';
    
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 


</body>
</HEAD>
</HTML>