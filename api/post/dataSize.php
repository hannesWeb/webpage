<?php 

$data_size = $_SERVER['CONTENT_LENGTH'] ?? 'Nur bei POST-Requests zu ermitteln';

echo "{$data_size}";

?> 
