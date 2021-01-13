<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4ModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
