 <?php 
     session_start();
    ?>
<!DOCTYPE HTML>
<HTML>
    <HEAD>  
<TITLE>Home Admin</TITLE>
</HEAD>
    <h1> Admin</h1>
   
    <br>
    <?php 
     echo "-Id: ".$_SESSION['id']."  ".$_SESSION["nome"]."  ".$_SESSION["email"]."<br>";
    ?>

<br>
<A href="allU.php">Visualizza tutti gli Utenti </A>
 <br>
<A href="all.php">Visualizza tutti i  Sensori </A>
 <br>
 <A href="stampaR.php">Visualizza tutte le Rilevazioni </A>
 <br>
 <A href="marcheS.php">Visualizza tutte le Marche   </A>
 <br>
 <A href="tipoS.php">Visualizza le Tipologie dei  sensori  </A>
 <br>

<A href="homeU.php"> Indietro </A>
<br>