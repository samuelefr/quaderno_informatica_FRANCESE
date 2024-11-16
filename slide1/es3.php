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

</html>