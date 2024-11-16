<html>
<head>
    <title>Paolo</title>
</head>

<body>
    <h1>Es2</h1>
    
    <?php
    $paolo = "Paolo";
    $today = new DateTime("now", new DateTimeZone('Europe/Rome'));
    echo $today->format('H:i:s');
    $ora = $today->format('H');
    echo "<br>\n Sono le $ora";
    
    if ($ora >= 18 || $ora < 0) {
        echo " Buonasera $paolo";
    } elseif ($ora >= 0 && $ora < 7) {
        echo " Buonanotte $paolo";
    } elseif ($ora >= 7 && $ora < 18) {
        echo " Buongiorno $paolo";
    }
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    echo "<br>\n Stai utilizzando il browser: ";
    if (strpos($userAgent, 'Chrome') !== false) {
        echo "Google Chrome";
    } elseif (strpos($userAgent, 'Firefox') !== false) {
        echo "Mozilla Firefox";
    } elseif (strpos($userAgent, 'Safari') !== false && strpos($userAgent, 'Chrome') === false) {
        echo "Safari";
    } elseif (strpos($userAgent, 'Edge') !== false) {
        echo "Microsoft Edge";
    } elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
        echo "Opera";
    } else {
        echo "un browser sconosciuto";
    }
    ?>
    <br>
    <a href="slide1.html">torna indietro</a><br> 
</body>
<p>
<b>Creazione delle variabili e impostazione dell'orario:</b><br>
$paolo = "Paolo" crea una variabile per il nome. $today utilizza la classe DateTime per ottenere l'orario corrente nella zona Europa/Roma e lo stampa nel formato H:i:s. La variabile $ora contiene solo l'ora corrente.
<br>
<b>Condizioni per il saluto:</b><br>
Viene utilizzato un blocco if-elseif per determinare il saluto appropriato in base all'orario:
- Se l'ora è maggiore o uguale a 18 o minore di 0, stampa "Buonasera Paolo".
- Se l'ora è compresa tra 0 e 7, stampa "Buonanotte Paolo".
- Se l'ora è compresa tra 7 e 18, stampa "Buongiorno Paolo".
<br>
<b>Rilevamento del browser:</b><br>
$userAgent utilizza $_SERVER['HTTP_USER_AGENT'] per ottenere informazioni sul browser usato. Con il blocco if-elseif si verifica se la stringa del browser contiene:
- 'Chrome' per Google Chrome (escluso Safari)
- 'Firefox' per Mozilla Firefox
- 'Safari' (senza 'Chrome') per Safari
- 'Edge' per Microsoft Edge
- 'Opera' o 'OPR' per Opera
Se nessuna di queste condizioni è soddisfatta, stampa "un browser sconosciuto".
</p>
</html>