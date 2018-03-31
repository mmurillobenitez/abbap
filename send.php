<?php
session_start();
?>


<!DOCTYPE html>

<html>
<body>
<?php
 



$var_value =  "".$_SESSION["email"]."";
$to = $_POST["emailto"];
$subject = "My subject";
$txt = "invioooooooooooo";
$headers = "From: $var_value      " . "\r\n" .
"CC: $var_value";

mail($to,$subject,$txt,$headers);
 echo "Invio email eseguito ";
 
include 'homeU.php';


?> 
</body>
</html>