<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PierreMiniggio\VegasRenderer\RendererAndTemplateBuilder;

$renderer = new RendererAndTemplateBuilder();
$renderer->buildFiles('C:\\Program Files\\VEGAS\\VEGAS Pro 17.0\\vegas170.exe');

echo 'Done !';
