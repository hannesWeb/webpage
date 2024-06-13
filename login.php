<?php
// Starten Sie die Sitzung
session_start();

// Überprüfen Sie, ob das Formular gesendet wurde
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Überprüfen Sie die Anmeldeinformationen
    if ($_POST['username'] == 'Hannes' && $_POST['password'] == 'Hannes3105!') {
        // Anmeldeinformationen sind korrekt, setzen Sie die Sitzungsvariable
        $_SESSION['loggedin'] = true;
    } else {
        // Anmeldeinformationen sind falsch, zeigen Sie eine Fehlermeldung an
        echo '
<style>
    .error {
        color: red;
    }
</style>
<div class="error">Falscher Benutzername oder Passwort!</div>
';

    }
}

// Überprüfen Sie, ob der Benutzer angemeldet ist
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // Der Benutzer ist angemeldet, zeigen Sie die test.html-Datei an
    include('test.html');
} else {
    // Der Benutzer ist nicht angemeldet, zeigen Sie das Anmeldeformular 
    echo '
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            margin: auto;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <form action="login.php" method="post">
        Benutzername: <input type="text" name="username"><br>
        Passwort: <input type="password" name="password"><br>
        <input type="submit" value="Anmelden">
    </form>
    ';
}
?>

