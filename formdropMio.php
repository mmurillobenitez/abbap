 <?php 
     session_start();
    ?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Eliminazione</TITLE>
</HEAD>
    <h1> Utente</h1>
    <br>
    <?php 
     echo "-Id: ".$_SESSION['id']."  ".$_SESSION["nome"]."  ".$_SESSION["email"]."<br>";
    ?>
<br>
<A href="formdropMS.php">Elimina una mio sensore  </A>
<br>
<A href="formdropMR.php">Elimina una rilevazione di un mio sensore  </A>

<br>
<A href="homeU.php"> Indietro </A>
<br>