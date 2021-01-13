<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MainconceptMpeg2;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MM2ModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAINCONCEPT_MPEG_2;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
