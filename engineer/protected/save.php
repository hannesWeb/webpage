<?php
if (isset($_POST['text']) && isset($_POST['count'])) {
    $text = $_POST['text'];
    $count = $_POST['count'];

    // Speichern des Textes in einer Datei
    $filename = "eingabe" . $count . ".txt";
    file_put_contents($filename, $text);
}
?>
