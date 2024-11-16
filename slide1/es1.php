<html>
<head>
    <title>Tabella</title>
</head>

<body>
    <h1>Tabella Pitagorica</h1>
    
    <?php
    echo '<table border="1">';
    for($x = 1 ; $x<11; $x++){
        echo "<tr>"; //righe "table row"
        for($y = 1 ; $y<11; $y++){
        $m = $x * $y;
        echo"<td>$m</td>"; //nella cella "table data"
       
        
    }echo "<tr>"; //righe "table row" 
    }
    
    
    echo "</table>";
    ?>
    <br>
    <a href="slide1.html">torna indietro</a><br> 
</body>
<p>
<b>Inizio della tabella:</b><br>
echo (table border="1"); apre la tabella con un bordo visibile.
<br>
<b>Ciclo Esterno (`for $x = 1; $x < 11; $x++`):</b><br>
Questo ciclo serve per creare le righe della tabella. La variabile `$x` rappresenta il numero di riga e va da 1 a 10.
echo "<tr>";` apre una nuova riga (`<tr>`) per ogni valore di `$x`.
<br>
<b>Ciclo Interno (`for $y = 1; $y < 11; $y++`):</b><br>
Questo ciclo crea le celle di ogni riga. La variabile `$y` rappresenta il numero di colonna e anch’essa va da 1 a 10.
In ogni cella viene calcolato il prodotto di `$x` e `$y` con `$m = $x * $y`.
`echo "<td>$m</td>";` stampa il valore di `$m` all'interno di una cella (`<td>`), che rappresenta il risultato della moltiplicazione.

<b>Fine della Riga:</b><br>
Alla fine di ogni iterazione del ciclo esterno, `echo "</tr>";` chiude la riga della tabella.

<b>Fine della Tabella:</b><br>
Una volta completati entrambi i cicli, `echo "</table>";` chiude l’intera tabella.
</p>
</html>