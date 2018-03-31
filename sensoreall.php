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
    

     


$codU = $_SESSION['id'] ;

	$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");

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
 

   
   
   
   

$cn = null;

?> 




</div>
</body>
</html>
