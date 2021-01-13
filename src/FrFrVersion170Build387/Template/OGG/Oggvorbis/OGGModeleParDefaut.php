<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\OGG\Oggvorbis;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class OGGModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::OGGVORBIS;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
