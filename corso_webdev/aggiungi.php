<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'rubrica';

// Connessione al database
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO contatti (nome, cognome, telefono) VALUES ('$nome', '$cognome', '$telefono')";
    if ($conn->query($sql) === TRUE) {
        echo "Contatto aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Aggiungi Contatto</title>
</head>
<body>
    <h1>Aggiungi un Contatto</h1>
    <form action="aggiungi.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Cognome:</label>
        <input type="text" name="cognome" required><br>
        <label>Telefono:</label>
        <input type="text" name="telefono" required><br>
        <button type="submit">Aggiungi</button>
    </form>
    <a href="index.php">Torna alla lista</a>
</body>
</html>
