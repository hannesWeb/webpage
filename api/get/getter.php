<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dateien und Verzeichnisse</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <div class="main_page">
        <div class="page_header">
            <span>Dateien und Verzeichnisse</span>
        </div>
        <div class="content_section_text">
            <p>Hier finden Sie eine Liste aller Dateien und Unterverzeichnisse im aktuellen Verzeichnis:</p>
            <ul>
                <?php
                // Aktuelles Verzeichnis durchgehen
                $files = scandir('.');

                // Dateien und Verzeichnisse auflisten
                foreach ($files as $file) {
                    // Ignoriere die speziellen Verzeichnisse '.' und '..'
                    if ($file === '.' || $file === '..') {
                        continue;
                    }

                    // Prüfen, ob es ein Verzeichnis oder eine Datei ist
                    if (is_dir($file)) {
                        echo "<li><a href=\"$file\">[Verzeichnis] $file</a></li>";
                    } else {
                        echo "<li><a href=\"$file\">$file</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
