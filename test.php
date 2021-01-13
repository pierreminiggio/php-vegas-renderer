<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WMV\WindowsMediaVideoV11\WMVVideoHd108030p8Mbitss;
use PierreMiniggio\VegasRenderer\VegasRenderer;

$renderer = new VegasRenderer('C:\\Program Files\\VEGAS\\VEGAS Pro 17.0\\vegas170.exe');
$renderer->render(
    'F:\\videos\\vlogs\\test\\projet.veg',
    new WMVVideoHd108030p8Mbitss(),
    'F:\\videos\\vlogs\\test\\projet.wmv'
);

echo 'rendered !';
