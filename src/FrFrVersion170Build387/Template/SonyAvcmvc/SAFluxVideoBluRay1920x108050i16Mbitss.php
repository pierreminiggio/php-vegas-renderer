<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SAFluxVideoBluRay1920x108050i16Mbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'Flux vidéo Blu-ray 1920x1080-50i, 16 Mbits/s';
    }
}
