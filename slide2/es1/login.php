<?php
$usr=$_POST["username"];
$pwd=$_POST["password"];
if ($usr!="utente" || $pwd!="password") {
    echo "Accesso negato!";
}
else {
    echo "benvenuto ". $usr ." nella pagina di amministrazione!";
}
?> 
<html>
<a href="http://127.0.0.1/esphp/slide2/slide2.html">torna indietro</a><br> 
</html>   
