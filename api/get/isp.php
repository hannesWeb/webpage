<?php 

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

echo "{$isp}";

?> 
