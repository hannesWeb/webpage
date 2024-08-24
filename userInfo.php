<?php 

ob_start();

function getVisIpAddr() { 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 

$ip = getVisIPAddr();
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
$ispData = @json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$isp = $ispData->org ?? 'Unbekannt';
$date = date('Y-m-d H:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$timezone = $ipdat->geoplugin_timezone;
$http_status = http_response_code();
$referrer = $_SERVER['HTTP_REFERER'] ?? 'Direkter Zugriff';
$os = php_uname('s') . ' ' . php_uname('r');
$content = $_SERVER['REQUEST_URI'];
$data_size = $_SERVER['CONTENT_LENGTH'] ?? 'Nur bei POST-Requests zu ermitteln';

echo "<h2>Benutzerinformationen</h2>";
echo "<ul>";
echo "<li><strong>IP-Adresse:</strong> {$ip}</li>";
echo "<li><strong>Internet-Service-Provider:</strong> {$isp}</li>";
echo "<li><strong>Land:</strong> {$ipdat->geoplugin_countryName}</li>";
echo "<li><strong>Stadt:</strong> {$ipdat->geoplugin_city}</li>";
echo "<li><strong>Kontinent:</strong> {$ipdat->geoplugin_continentName}</li>";
echo "<li><strong>Breitengrad:</strong> {$ipdat->geoplugin_latitude}</li>";
echo "<li><strong>Längengrad:</strong> {$ipdat->geoplugin_longitude}</li>";
echo "<li><strong>Währungssymbol:</strong> {$ipdat->geoplugin_currencySymbol}</li>";
echo "<li><strong>Währungscode:</strong> {$ipdat->geoplugin_currencyCode}</li>";
echo "<li><strong>Zeitzone:</strong> {$timezone}</li>";
echo "<li><strong>Datum und Uhrzeit des Abrufs:</strong> {$date}</li>";
echo "<li><strong>Browser:</strong> {$browser}</li>";
echo "<li><strong>Sprache und Browser-Version:</strong> {$lang}</li>";
echo "<li><strong>Inhalt des Abrufs:</strong> {$content}</li>";
echo "<li><strong>HTTP-Statuscode:</strong> {$http_status}</li>";
echo "<li><strong>Verweisende Website:</strong> {$referrer}</li>";
echo "<li><strong>Betriebssystem:</strong> {$os}</li>";
echo "<li><strong>Größe der empfangenen Daten:</strong> {$data_size}</li>";
echo "</ul>";

$sent_data_size = ob_get_length();
echo "<p><strong>Größe der gesendeten Daten:</strong> {$sent_data_size} Bytes</p>";

ob_end_flush();

?> 
