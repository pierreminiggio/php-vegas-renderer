<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\PCA\SonyPca;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class PCAModeleParDefaut extends Template
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
