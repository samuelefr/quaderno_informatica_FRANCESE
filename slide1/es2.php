<!DOCTYPE html>
<html lang="en">
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
</html>