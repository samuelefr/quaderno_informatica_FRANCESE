
<?php
// Verifica se i dati sono stati inviati tramite POST
if(isset($_POST["username"]) && isset($_POST["password"])) {
    $usr=$_POST["username"];
    $pwd=$_POST["password"];
if (empty($usr) || empty($pwd)) {
    echo "Inserire i dati!";
}
elseif ($usr!="Samuele" || $pwd!="password") {
    echo "Accesso negato!";
}
else {
    echo "benvenuto ". $usr ." nella pagina di amministrazione!";
}
}
?>    
