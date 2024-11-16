<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella quadrati e cubi</title>
</head>
<body>
    <H1>Tabella quadrati e cubi</H1>
    <form method="post" action="">
    <label for="n">Scegli un numero intero N (da 1 a 10):</label>
    <select id="n" name="n">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        
    </select>    
<br><br>

<input type="submit"  name="submit" value="Genera tabella" >
</form>
<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n'];
    echo "<table border='1'>";
    echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>".($i*$i)."</td>";
        echo "<td>".($i*$i*$i)."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>


</body>
<a href="http://127.0.0.1/esphp/slide2/slide2.html">torna indietro</a><br>
<p>
<b>1. Scelta del numero:</b><br>
La parte `form` permette all’utente di scegliere un numero da 1 a 10 con un menu a discesa `select`, che ha le opzioni da 1 a 10. Dopo aver selezionato un numero, l’utente clicca su "Genera tabella".
<br>
<b>2. Gestione della scelta con PHP:</b><br>
Quando l’utente invia il form, PHP verifica che il bottone "Genera tabella" sia stato premuto tramite `isset($_POST['submit'])`. Poi, recupera il valore di `n` selezionato dall'utente con `$_POST['n']`.
<br>
<b>3. Creazione della tabella:</b><br>
PHP inizia a creare una tabella HTML con `echo "(table border='1')";`. La prima riga di intestazione, creata con `echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";`, mostra le colonne: Numero, Quadrato e Cubo.
<br>
<b>4. Ciclo per calcolo dei valori:</b><br>
Il ciclo `for ($i = 1; $i <= $n; $i++)` scorre da 1 al valore di `n` scelto dall'utente, e per ogni valore di `i` calcola:
    - Il numero (`$i`)
    - Il quadrato di `$i` (`$i * $i`)
    - Il cubo di `$i` (`$i * $i * $i`)
   Ogni riga con questi valori viene aggiunta alla tabella.
<br>
<b>5. Output della tabella:</b><br>
Alla fine del ciclo, PHP chiude la tabella con `echo "</table>";`, e questa appare sotto il form con i calcoli dei quadrati e cubi per ogni numero da 1 a `n`.
</p> 
</html>