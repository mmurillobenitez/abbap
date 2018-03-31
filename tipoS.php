<?php
// Start the session
session_start();
?>

 <?php
     
if ($_SESSION['livello']>1 ){
        include 'dentroUser2.php';
        
    }else{
        include 'homeadmin2.php';
        
    }


$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";

$codU = $_SESSION['id'] ;


$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = " SELECT  tipologia , primaP, secondaP, terzaP
        FROM  tipo ";
        
     
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris > 0){
    echo " Lista tipi dei   sensori : <br>";
   
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    echo "-Tipologia sensore  : ".$row['tipologia']." ";
     echo "   Tipo valore stringa    - :  ".$row['primaP']." -  ".$row['secondaP']." - ".$row['terzaP']."<br>";
    }
    
 }else {
     echo" Questo utente non rilevazioni ";
	 
}
 

   
   
   
    


$cn = null;

?> 
