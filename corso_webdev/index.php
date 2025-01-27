<?php
$host = 'localhost';
$user = 'root'; // Cambiare se necessario
$password = ''; // Cambiare se necessario
$dbname = 'rubrica';

// Connessione al database
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Query per ottenere i contatti
$sql = "SELECT * FROM contatti";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Rubrica Contatti</title>
</head>
<body>
    <h1>Lista Contatti</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Telefono</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['cognome'] ?></td>
                <td><?= $row['telefono'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="aggiungi.php">Aggiungi un nuovo contatto</a>
</body>
</html>
