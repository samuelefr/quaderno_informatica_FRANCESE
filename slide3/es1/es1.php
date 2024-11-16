<?php
// Funzione per controllare se i dati sono validi
function valida_data($data) {
    // Verifica formato della data (AAAA-MM-GG)
    return preg_match("/^\d{4}-\d{2}-\d{2}$/", $data);
}

// Verifica se i dati sono stati inviati tramite POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Recupero dei dati dal form
    $usr = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $data_nascita = $_POST["data_nascita"];
    $codice_fiscale = $_POST["codice_fiscale"];
    $email = $_POST["email"];
    $cellulare = $_POST["cellulare"];
    $indirizzo = $_POST["indirizzo"];
    $nickname = $_POST["nickname"];
    $password = $_POST["password"];
    
    // Flag per errori
    $errori = [];

    // Controllo se i campi obbligatori sono vuoti
    if (empty($usr) || empty($cognome) || empty($data_nascita) || empty($email) || empty($indirizzo) || empty($nickname)) {
        $errori[] = "Errore: Tutti i campi obbligatori devono essere compilati!";
    }

    // Controllo se la data di nascita è valida
    if (!valida_data($data_nascita)) {
        $errori[] = "Errore: Data di nascita non valida!";
    }

    // Controllo se il nickname è diverso da nome e cognome
    if ($nickname == $usr || $nickname == $cognome) {
        $errori[] = "Errore: Il nickname deve essere diverso dal nome e cognome!";
    }

    // Controllo la validità della password
    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        $errori[] = "Errore: La password deve contenere almeno una lettera maiuscola, un numero e un carattere speciale!";
    }

    // Controllo la validità del cellulare
    if (!preg_match("/^\d{12}$/", $cellulare)) {
        $errori[] = "Errore: Il cellulare deve essere composto da 12 cifre numeriche!";
    }

    // Controllo la validità dell'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errori[] = "Errore: L'email non è valida!";
    }

    // Se ci sono errori, li mostro
    if (!empty($errori)) {
        foreach ($errori as $errore) {
            echo "<p>$errore</p>";
        }
    } else {
        // Se tutto è valido, stampa tutti i dati dell'utente
        echo "<h3>Registrazione completata con successo!</h3>";
        echo "<p><strong>Nome:</strong> $usr</p>";
        echo "<p><strong>Cognome:</strong> $cognome</p>";
        echo "<p><strong>Data di nascita:</strong> $data_nascita</p>";
        echo "<p><strong>Codice fiscale:</strong> " . (!empty($codice_fiscale) ? $codice_fiscale : "Non fornito") . "</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Cellulare:</strong> " . (!empty($cellulare) ? $cellulare : "Non fornito") . "</p>";
        echo "<p><strong>Indirizzo:</strong> $indirizzo</p>";
        echo "<p><strong>Nickname:</strong> $nickname</p>";
        echo "<p><strong>Password:</strong> $password</p>"; // Nasconde la password per sicurezza
    }
}
?>
<html>
    <a href="http://127.0.0.1/esphp/slide3/es1/inserimentodati.html">torna indietro</a><br> 
</html>  
