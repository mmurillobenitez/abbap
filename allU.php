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
$sql = "SELECT *  FROM Utente ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
     echo " Lista Utenti : <br>";
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
 echo "-Id: ".$row['id']." - Nome : ".$row["nome"]." -e_mail  ".$row['email']." - Livello ".$row['livello']."
 -Codice dati ".$row["datiCode"]." <br>";
    
       
       
    }
    
 }else {
     echo" Questo utente non ha  sensori ";
	 
}
 

   
   
   
    

$cn = null;

?> 
