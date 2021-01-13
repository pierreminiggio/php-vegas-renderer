<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SAAvchd1920X108050i extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'AVCHD 1920 x 1080-50i';
    }
}
