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
    
    


$codU = $_SESSION['id'] ;


$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");
$sql = "SELECT *  FROM Utente ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
     echo " <p>Lista Utenti : </p>";
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
 echo "<p>-Id: ".$row['id']." - Nome : ".$row["nome"]." -e_mail  ".$row['email']." - Livello ".$row['livello']."
 -Codice dati ".$row["datiCode"]." </p>";
    
       
       
    }
    
 }else {
     echo" <p>Non ci sono sensori non assegnati </p>";
	 
}
 

   
   
   
    

$cn = null;
 

   
   
   
    



?> 
