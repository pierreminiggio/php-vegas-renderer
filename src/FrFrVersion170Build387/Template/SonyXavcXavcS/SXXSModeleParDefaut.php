<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyXavcXavcS;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SXXSModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_XAVC_XAVC_S;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
