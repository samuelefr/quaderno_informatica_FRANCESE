<html>
    <head>
        <title>ITCS</title>
    </head>
<body>
    <h3>controllo credenziali</h3>
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
</body>

</html>