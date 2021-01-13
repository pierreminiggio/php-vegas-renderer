<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4FluxVideoMvc1920X108024p25Mbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'Flux vidéo MVC 1920 x 1080-24p, 25 Mbits/s';
    }
}
