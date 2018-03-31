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


$id =  $_POST["ide"];
$dato =  $_POST['d'];
$descrizione =  $_POST["descri"];
$rell = $_SESSION['id'];
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO sensori  VALUES('$id','$dato','$descrizione', '$rell')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    
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