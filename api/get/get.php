<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <div class="main_page">
        <div class="page_header">
            <span>Mögliche Endpunkte</span>
        </div>
        <div class="content_section_text">
            <p>Hier finden Sie eine Liste aller möglichen API-GET Endpunkte:</p>
            <?php
            // Aktuelles Verzeichnis durchgehen
            $files = scandir('.');

            // Dateien und Verzeichnisse auflisten
            foreach ($files as $file) {
                // Ignoriere die speziellen Verzeichnisse '.' und '..' sowie 'index.html'
                if ($file === '.' || $file === '..' || $file === 'index.html' || $file === 'get.php') {
                    continue;
                }

                // Prüfen, ob es ein Verzeichnis oder eine Datei ist
                if (is_dir($file)) {
                    echo "<button onclick=\"location.href='$file'\">[Verzeichnis] $file</button><br>";
                } else {
                    echo "<button onclick=\"location.href='$file'\">$file</button><br>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
