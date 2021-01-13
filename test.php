<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WindowsMediaVideoV11\WMVVVideoHd108030p8Mbitss;
use PierreMiniggio\VegasRenderer\VegasRenderer;

$renderer = new VegasRenderer('C:\\Program Files\\VEGAS\\VEGAS Pro 17.0\\vegas170.exe');
$renderer->render(
    'F:\\videos\\vlogs\\test\\projet.veg',
    new WMVVVideoHd108030p8Mbitss(),
    'F:\\videos\\vlogs\\test\\projet.wmv'
);

echo 'rendered !';
