<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyMxf;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SMHdEx1920X108060i extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_MXF;
    }

    public function getTemplateName(): string
    {
        return 'HD EX 1920 x 1080-60i';
    }
}
