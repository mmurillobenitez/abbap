<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>  

<body>
    <h1> E-mail</h1>
    <h2> Selezionare la informazione da mandare via e-mail</h2>
    <?php
     $_SESSION['emailD'] = $_POST["emaild"];
    ?>
<A href="invioMieS.php"> Invio i miei sensori</A><br>
<A href="invioRilevazioniS.php">Invio le rilevazioni dei miei sensori </A><br>
<A href="invioMarcheS.php">Invio le Marche dei miei dispositivi  </A><br>


    
     
</body>
    </html>