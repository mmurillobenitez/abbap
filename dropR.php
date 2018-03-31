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

$idR= $_POST['idR'];
$valoreR= $_POST["valoreR"];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM rilevazione WHERE codice_S = '$idR' and valore = '$valoreR' ";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Rilevazione cancellata";
    
   include 'homeU.php';

    
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