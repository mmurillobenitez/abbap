<?php
// Start the session
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

$codU = $_SESSION['id'] ;


$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT *  FROM dispositivo ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati


include 'homeU.php';


   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    echo " Sensore: <br>";
     echo "-Id: ".$row['id']." - Tipo : ".$row["tipo"]." -Marca  ".$row['marca']." - Zona ".$row['zona ']."  Codice Utente  ".$row['proprieta']." <br>";
    
       
       
    }
    
 }else {
     echo" Questo utente non ha  sensori ";
	 

 

   
   
   
    


$cn = null;

?> 
</body>
</html>
