<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SAFluxVideoBluRay1920x108024p10Mbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'Flux vidéo Blu-ray 1920x1080-24p, 10 Mbits/s';
    }
}
