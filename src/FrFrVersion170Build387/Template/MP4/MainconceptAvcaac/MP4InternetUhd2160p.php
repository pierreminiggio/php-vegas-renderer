<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\MainconceptAvcaac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4InternetUhd2160p extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAINCONCEPT_AVCAAC;
    }

    public function getTemplateName(): string
    {
        return 'Internet UHD 2160p';
    }
}
