<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text- und Passwort-Eingabe</title>
    <script>
        let timeout;
        let inputCount = 1;

        // Funktion, um Text in eine Datei zu speichern
        function saveText() {
            let text = document.getElementById('textInput').value;

            // AJAX Anfrage an save.php, um den Text zu speichern
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "save.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("text=" + encodeURIComponent(text) + "&count=" + inputCount);

            inputCount++; // Zähler für die Dateinamen erhöhen
            document.getElementById('textInput').value = ""; // Textfeld leeren
            document.getElementById('passwordSection').style.display = 'block'; // Passwortfeld anzeigen
        }

        // Funktion zum Überwachen der Eingabe
        function monitorInput() {
            clearTimeout(timeout); // Vorherigen Timer zurücksetzen
            timeout = setTimeout(saveText, 10000); // 10 Sekunden warten
        }

        // Funktion, die überprüft, ob 4 Zeichen im Passwort eingegeben wurden
        function checkPasswordLength() {
            let password = document.getElementById('passwordInput').value;
            if (password.length >= 4) {
                alert('Gesperrt');
                document.getElementById('passwordInput').disabled = true; // Passwortfeld sperren
            }
        }
    </script>
</head>
<body>
    <h1>Text-Eingabe</h1>
    <textarea id="textInput" oninput="monitorInput()" rows="4" cols="50" placeholder="Text hier eingeben..."></textarea>

    <div id="passwordSection" style="display: none;">
        <h2>Passwort-Eingabe</h2>
        <input type="password" id="passwordInput" maxlength="4" oninput="checkPasswordLength()" placeholder="Passwort (4 Zeichen)">
    </div>
</body>
</html>
