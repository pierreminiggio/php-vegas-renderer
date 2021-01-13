<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4FluxVideoBluRay1920x108060i10Mbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'Flux vidéo Blu-ray 1920x1080-60i, 10 Mbits/s';
    }
}
