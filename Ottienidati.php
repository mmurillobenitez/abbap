<?php
// Start the session
session_start();
?>

<?php
     
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";
$codiceD = $_POST["code"];
$codU = $_SESSION['id'] ;

try {
$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT *  FROM Utente where datiCode = '$codiceD' ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
       
         $_SESSION["email"] = $row["email"];
      $_SESSION["nome"] = $row["nome"];
      $_SESSION["id"] = $row['id'];
      $_SESSION['livello'] = $row['livello'];
      
         
       include 'formgrafico.php';
    }
    
 }else {
     echo"Codice dati errato ";
	 include 'index.html';
}

 

   
   
   
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$cn = null;

?> 