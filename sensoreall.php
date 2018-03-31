<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
   
<?php
     include 'homeU.php';
    

     
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";

$codU = $_SESSION['id'] ;

try {
$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT *  FROM dispositivo where proprieta = '$codU' ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    echo " Sensore: <br>";
     echo "-Id: ".$row['id']." - Tipo : ".$row["tipo"]." -Marca  ".$row['marca']." - Zona ".$row['zona ']."  Codice Utente  ".$row['proprieta']." <br>";
    
       
       
    }
    
 }else {
     echo" Questo utente non ha  sensori ";
	 
}
 

   
   
   
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$cn = null;

?> 




</div>
</body>
</html>
