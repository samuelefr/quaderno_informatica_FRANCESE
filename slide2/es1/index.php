<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Accesso a pagina riservata</h3>
        <form action="login.php" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" placeholder="inserisci il tuo nome utente"/><br>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="inserisci la tua password"/><br>
    
            <input name="submit" type="submit" value="Invia" />
        </form>
</body>
</html>