<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Dati da inserire </TITLE>
</HEAD>
    <h1>Scegli come procedere </h1>
    <br>
    <?php 
     echo "-Id: ".$_SESSION['id']."  ".$_SESSION["nome"]."  ".$_SESSION["email"]."<br>";
    ?>

<br>
<A href="registrazione.php">Inserisci un nuovo utente  </A>
 <br>
 <A href="formInserimentoSensore.php">Inserisci un nuovo sensore </A>
<br>
 <A href="forminserimentoM.php">Inserisci una nuovo marca di sensori  </A>
 <br>
<A href="formInserimentotipo.php">Inserisci un nuovo tipo di sensore  </A>


 <br>
<A href="homeU.php"> Indietro </A>
<br>



</form>

</body>