 <?php 
     session_start();
    ?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Home</TITLE>
</HEAD>
    <h1> Admin</h1>
    <br>
    <?php 
     echo "-Id: ".$_SESSION['id']."  ".$_SESSION["nome"]."  ".$_SESSION["email"]."<br>";
    ?>

<br>
<A href="formdropC.php">Elimina un un Utente  </A>
 <br>
<A href="formdropS.php">Elimina un sensore  </A>
 <br>
 <A href="formdropR.php">Elimina una  rilevazione </A>
 <br>
 <A href="formdropMarca.php">Elimina una  marca   </A>
 <br>
 <A href="formdropT.php">Elimina un  tipo di  sensore  </A>
 <br>

<A href="homeU.php"> Indietro </A>
<br>