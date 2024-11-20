<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione e Accesso</title>
</head>
<body>

    <!-- Modulo Registrazione -->
    <h3>Registrati</h3>
    <form method="POST" action="">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <br>

        <button type="submit">Registrati</button>
    </form>

    <!-- Modulo Login -->
    <h3>Accedi</h3>
    <form method="POST" action="">
        <label for="login_email">Email</label>
        <input type="text" id="login_email" name="login_email" required>
        <br>

        <label for="login_password">Password</label>
        <input type="password" id="login_password" name="login_password" required>
        <br>

        <button type="submit">Accedi</button>
    </form>

</body>
</html>
<?php
// Avvia la sessione
session_start();

// Registrazione
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['password']) && !isset($_POST['login_email'])) {
    $_SESSION['Registratiemail'] = htmlspecialchars($_POST['email']);
    $_SESSION['Registratipassword'] = htmlspecialchars($_POST['password']);
    echo "Registrazione avvenuta con successo!";
}

// Accesso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_email']) && isset($_POST['login_password'])) {
    $Loginemail = htmlspecialchars($_POST['login_email']);
    $Loginpassword = htmlspecialchars($_POST['login_password']);

    // Controllo credenziali
    if (
        isset($_SESSION['Registratiemail']) && 
        isset($_SESSION['Registratipassword']) &&
        $Loginemail === $_SESSION['Registratiemail'] &&
        $Loginpassword === $_SESSION['Registratipassword']
    ) {
        echo "Benvenuto!";
    } else {
        echo "Errore: Email o password non corrette.";
    }
}
?>
<br>
<html>
    <a href="http://127.0.0.1/esphp/slide3/slide3.html">Torna indietro</a><br> 
</html>