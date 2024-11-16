<html>
<head>
    <title>Triangolini</title>
    <style>body {font-family: monospace;}</style>
</head>
    
    <h1>Triangolini</h1>
    
    <?php
    
    //a
    for($i=0; $i<11; $i++){
        for($c=0;$c<$i;$c++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
    //b
    for($i=11;$i>0;$i--){
        for($c=0;$c<$i;$c++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
    //c
    for($i=0;$i<11;$i++){
        for($c=0;$c<$i;$c++){
            echo "&nbsp;";
            
        }
        for($i=11;$i>$c;$i--){
        echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
    //d
    for($i=0;$i<11;$i++){
        for($c=11;$c>$i;$c--){
            echo "&nbsp;";
            
        }
        for($i=0;$i<$c;$i++){
        echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
    ?>
    <br>
    <a href="slide1.html">torna indietro</a><br> 
    <p>
<b>Triangolo A:</b><br>
Un ciclo `for` esterno ($i) definisce le righe, aumentando il numero di asterischi per ogni riga, creando un triangolo che cresce verso il basso.
<br>
<b>Triangolo B:</b><br>
Un ciclo `for` esterno ($i) definisce le righe, riducendo il numero di asterischi per ogni riga, creando un triangolo che decresce verso il basso.
<br>
<b>Triangolo C:</b><br>
Un ciclo `for` esterno ($i) stampa una quantità crescente di spazi vuoti per allineare a destra e, successivamente, un numero decrescente di asterischi, creando un triangolo decrescente allineato a destra.
<br>
<b>Triangolo D:</b><br>
Un ciclo `for` esterno ($i) stampa una quantità decrescente di spazi vuoti e, successivamente, un numero crescente di asterischi, creando un triangolo crescente allineato a destra.
</p>

</html>