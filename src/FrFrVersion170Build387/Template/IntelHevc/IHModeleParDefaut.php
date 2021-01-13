<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\IntelHevc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class IHModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::INTEL_HEVC;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
