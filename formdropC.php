<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body> 


<form action="dropC.php" method="post">
Inserisci l'id dell'Utente  che si vuole eliminare  <br>
id  <input type="text" name="id"><br>
<br>
<input type="submit" name= "Invio">
</form>
     <?php
     include 'tempAllU.php';
     ?>
</body>
</html>