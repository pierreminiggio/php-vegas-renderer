<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\MagixHevcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4ModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_HEVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
