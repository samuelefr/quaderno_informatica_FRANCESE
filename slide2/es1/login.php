<?php
$usr=$_POST["username"];
$pwd=$_POST["password"];
if ($usr!="Samuele" || $pwd!="password") {
    echo "Accesso negato!";
}
else {
    echo "benvenuto ". $usr ." nella pagina di amministrazione!";
}
?>    
