<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\ScottStudiosWave;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SSWModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SCOTT_STUDIOS_WAVE;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
