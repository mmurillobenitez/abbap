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

$name =  $_POST["user"];
$ps=  $_POST["password"];
 
try {
$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT *  FROM Utente WHERE  nome = '$name' and password = '$ps'";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati



   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
       
         $_SESSION["email"] = $row["email"];
      $_SESSION["nome"] = $row["nome"];
      $_SESSION["id"] = $row['id'];
      $_SESSION['livello'] = $row['livello'];
      
         
       include 'homeU.php';
    }
    
 }else {
     echo" Password o nome Utente Errati ";
	 include 'index.html';
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
