<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PierreMiniggio\VegasRenderer\VegasRenderer;

$renderer = new VegasRenderer('C:\\Program Files\\VEGAS\\VEGAS Pro 17.0\\vegas170.exe');
$renderer->render(
    'F:\\videos\\vlogs\\test\\projet.veg',
    'Windows Media Video V11',
    'Vidéo HD 1080-30p 8 Mbits/s',
    'F:\\videos\\vlogs\\test\\projet.wmv'
);

echo 'rendered !';
