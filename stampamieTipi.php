<?php
// Start the session
session_start();
?>

 <?php
     
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";

$codU = $_SESSION['id'] ;

try {
$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = " SELECT  id , primaP, secondaP, terzaP, tipologia
        FROM  dispositivo  inner join tipo on tipo = tipologia 
        WHERE proprieta = '$codU' ";
        
     
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris > 0){
    echo " Lista dei tipi dei miei  sensori : <br>";
   
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    echo "-Id sensore : ".$row['id']." di tipo : ".$row['tipologia']."";
     echo "   Tipo valore stringa    - :  ".$row['primaP']." -  ".$row['secondaP']." - ".$row['terzaP']."<br>";
    }
    
 }else {
     echo" Questo utente non rrrrrrrrilevazioni ";
	 
}
 

   
   
   
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$cn = null;

?> 