<?php 

ob_start();

$city = @file_get_contents("https://hannes-hirsch.de/api/get/city.php");
$content = @file_get_contents("https://hannes-hirsch.de/api/get/content.php");
$continent = @file_get_contents("https://hannes-hirsch.de/api/get/continent.php");
$country = @file_get_contents("https://hannes-hirsch.de/api/get/country.php");
$curcode = @file_get_contents("https://hannes-hirsch.de/api/get/curcode.php");
$cursym = @file_get_contents("https://hannes-hirsch.de/api/get/cursym.php");
$date = @file_get_contents("https://hannes-hirsch.de/api/get/date.php");
$http = @file_get_contents("https://hannes-hirsch.de/api/get/http.php");
$ip = @file_get_contents("https://hannes-hirsch.de/api/get/ip.php");
$isp = @file_get_contents("https://hannes-hirsch.de/api/get/isp.php");
$latitude = @file_get_contents("https://hannes-hirsch.de/api/get/latitude.php");
$longitude = @file_get_contents("https://hannes-hirsch.de/api/get/longitude.php");
$os = @file_get_contents("https://hannes-hirsch.de/api/get/os.php");
$time = @file_get_contents("https://hannes-hirsch.de/api/get/time.php");
$timezone = @file_get_contents("https://hannes-hirsch.de/api/get/timezone.php");
$data_size = @file_get_contents("https://hannes-hirsch.de/api/post/dataSize.php");

echo "<h2>Benutzerinformationen</h2>";
echo "<ul>";
echo "<li><strong>IP-Adresse:</strong> {$ip}</li>";
echo "<li><strong>Internet-Service-Provider:</strong> {$isp}</li>";
echo "<li><strong>Land:</strong> {$country}</li>";
echo "<li><strong>Stadt:</strong> {$city}</li>";
echo "<li><strong>Kontinent:</strong> {$continent}</li>";
echo "<li><strong>Breitengrad:</strong> {$latitude}</li>";
echo "<li><strong>Längengrad:</strong> {$longitude}</li>";
echo "<li><strong>Währungssymbol:</strong> {$cursym}</li>";
echo "<li><strong>Währungscode:</strong> {$curcode}</li>";
echo "<li><strong>Zeitzone:</strong> {$timezone}</li>";
echo "<li><strong>Datum und Uhrzeit des Abrufs:</strong> {$date}</li>";
echo "<li><strong>Browser:</strong> Live-Vorschau aktuell nicht verfügbar.</li>";
echo "<li><strong>Sprache und Browser-Version:</strong> Live-Vorschau aktuell nicht verfügbar.</li>";
echo "<li><strong>Inhalt des Abrufs:</strong> {$content}</li>";
echo "<li><strong>HTTP-Statuscode:</strong> {$http}</li>";
echo "<li><strong>Betriebssystem:</strong> {$os}</li>";
echo "<li><strong>Größe der empfangenen Daten:</strong> {$data_size}</li>";
echo "</ul>";

$sent_data_size = ob_get_length();
echo "<p><strong>Größe der gesendeten Daten:</strong> {$sent_data_size} Bytes</p>";

ob_end_flush();

?> 
