<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html');

$url = 'https://ghbrisk.com/e/x6g1et9aqvc3';

// Obtener el HTML y modificar contenido
$html = file_get_contents($url);
$html = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $html);
$html = str_replace('sandbox', 'data-sandbox', $html);
$html = str_replace('window.top', 'null', $html);

echo $html;
?>
