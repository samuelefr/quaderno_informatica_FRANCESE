<!DOCTYPE html>
<html lang="en">
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
</body>
</html>