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
</html>