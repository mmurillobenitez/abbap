<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>SENSORI</TITLE>
</HEAD>
    <body>
<h2> Inserire i dati per assegnare il sensore  </h2>

 
<form action="giaEsistenteS.php" method="post">
<h3> Dati utente </h3><br>
Id Utente a cui lo si vuole assegnare : <input type="text" name="user"><br>
<br>
<?php
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
<h3>Dati sensore  </h3><br>
Id Sensore da assegnare  : <input type="text" name="ide"><br>
<br>

<?php
     
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";




$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT *  FROM dispositivo   ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati




   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    echo " Lista sensori assegnabili: <br>";
     echo "-Id: ".$row['id']." - Tipo : ".$row["tipo"]." -Marca  ".$row['marca']." - Codice Utente  ".$row['proprieta']." <br>";
    
       
       
    }
    

    
}else {
     echo" Non ci sono sensori non assegnati ";
	 
}
 

   
   
   
    

$cn = null;

?> 

<input type="submit">

</form>


 


 </body>

</HTML>

   
   
   
    

$cn = null;

?> 

<input type="submit">

</form>


 


 </body>

</HTML>
