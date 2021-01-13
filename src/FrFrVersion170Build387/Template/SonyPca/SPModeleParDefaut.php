<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyPca;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SPModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_PCA;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
