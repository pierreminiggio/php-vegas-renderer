<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\MainconceptAvcaac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4Internet360pPortrait extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAINCONCEPT_AVCAAC;
    }

    public function getTemplateName(): string
    {
        return 'Internet 360p portrait';
    }
}
