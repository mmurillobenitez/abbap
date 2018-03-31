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

try {
$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = " SELECT   marca.id , marca.nome , marca.dataP
        FROM ( dispositivo inner join marca on dispositivo.marca = marca.id) 
        WHERE  proprieta = '$codU'";
        
$ris = mysqli_query($cn,$sql) ; //esegue la queryinclude 'homeU.php';
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati


include 'homeU.php';


   
if ($n_ris> 0){
     echo " Lista marche dei miei dispositivi  : <br>";
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
   echo "-Id Marca : ".$row['id']." -  :  Nome ".$row["nome"]." -Data creazione  ".$row['dataP']." - <br>";
    
        
       
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
</body>
</html>
