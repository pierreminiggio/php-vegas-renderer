<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MXF\PanasonicP2Mxf;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MXFModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::PANASONIC_P2_MXF;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
