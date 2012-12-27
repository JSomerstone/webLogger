<?php
date_default_timezone_set('Europe/Helsinki');

$logFile = dirname(__DIR__). '/logs/' . date('Y-m-d') . '.log';
$logHandle = fopen($logFile, 'w');

fwrite($logHandle, json_encode($_GET));

header('Content-Type: image/gif');
echo file_get_contents(__DIR__. '/s.gif');