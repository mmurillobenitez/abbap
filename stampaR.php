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
$sql = " SELECT codice_S , valore, descrizione
        FROM  rilevazione";
        
     
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris > 0){
    echo " Lista rilevazione sensori : <br>";
    
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    echo "-Id sensore : ".$row['codice_S']." - Valore ".$row['valore']." - Descrizione ".$row['descrizione']."<br>";
     
    }
    
 }else {
     echo" Questo utente non rilevazioni ";
	 
}
 

   
   
   
    


$cn = null;



?>
